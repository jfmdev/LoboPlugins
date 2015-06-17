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

// Security measure
if (!defined('IN_CMS')) {
    exit();
}

// Remote all settings.
if (Plugin::deleteAllSettings('sitemaps_xml')) {
	Flash::set('success', 'Sitemaps XML - '.__('Uninstalled') . '.');
}
else {
	Flash::set('error', 'Sitemaps XML - '.__('Unable to remove stored settings') . '!');
}

?>