<?php

/*
 * Copyright (C) 2013 Jose F. Maldonado
 *
 * This file is part of SitemapsXml.
 *
 * SitemapsXml is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SitemapsXml is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SitemapsXml. If not, see <http://www.gnu.org/licenses/>.
 */

 // Security measure.
 if (!defined('IN_CMS')) { exit(); }

 // Define plugin info.
Plugin::setInfos(array(
    'id'          => 'sitemaps_xml',
    'title'       => 'Sitemaps XML',
    'description' => __("Allows to create and edit the file 'sitemaps.xml'."),
    'version'     => '0.9',
    'license'     => 'LGPL',
    'author'      => 'JFMDev',
    'website'     => 'http://code.google.com/p/loboplugins/',
    'update_url'  => 'http://loboplugins.googlecode.com/files/loboplugins-versions.xml',
    'require_wolf_version' => '0.7.7'
));

// Add controller.
Plugin::addController('sitemaps_xml', 'Sitemaps XML', 'admin_view');

$uri = $_SERVER['QUERY_STRING'];
if ( preg_match('/plugin\/sitemaps_xml/', $uri) ) {
    // Add CodeMirror.
    Plugin::addJavascript('sitemaps_xml', 'codemirror.js');
    Plugin::addJavascript('sitemaps_xml', 'codemirror_mode_xml.js');
    Plugin::addStylesheet('sitemaps_xml', 'codemirror.css');
}

?>