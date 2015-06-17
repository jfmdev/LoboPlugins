<?php

/*
 * Copyright (C) 2013 Jose F. Maldonado
 *
 * This file is part of 'NicEdit for Wolf'.
 *
 * 'NicEdit for Wolf' is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * 'NicEdit for Wolf' is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with 'NicEdit for Wolf'. If not, see <http://www.gnu.org/licenses/>.
 */

// Security measure
if ( !defined('IN_CMS') ) {
    exit();
}

Plugin::setInfos(array(
    'id'          => 'nicedit',
    'title'       => 'NicEdit for Wolf',
    'description' => 'Allows you to use the NicEdit content editor. ',
    'version'     => '0.9',
    'license'     => 'LGPL',
    'author'      => 'JFMDev',
    'website'     => 'http://code.google.com/p/loboplugins/',
    'update_url'  => 'http://loboplugins.googlecode.com/files/loboplugins-versions.xml',
    'require_wolf_version' => '0.7.7'
));

if ( Plugin::isEnabled('nicedit') ) {
    Filter::add('nicedit', 'nicedit/filter_nicedit.php');

    $uri = $_SERVER['QUERY_STRING'];
    if ( preg_match('/(\/plugin\/nicedit|page\/edit|snippet\/edit|layout\/edit|page\/add|snippet\/add|layout\/add)/', $uri, $match) ) {
        //Plugin::addJavascript('nicedit', 'nicEdit.js');
        Plugin::addJavascript('nicedit', 'niceditInit.js');
    }
}

