<?php

/*
 * Copyright (C) 2013 Jose F. Maldonado
 *
 * This file is part of RobotsTxt.
 *
 * RobotsTxt is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * RobotsTxt is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with RobotsTxt. If not, see <http://www.gnu.org/licenses/>.
 */

// Security measure
if (!defined('IN_CMS')) {
    exit();
}

// Remote all settings.
if (Plugin::deleteAllSettings('robots_txt')) {
	Flash::set('success', 'Robots.txt - '.__('Uninstalled') . '.');
}
else {
	Flash::set('error', 'Robots.txt - '.__('Unable to remove stored settings') . '!');
}

?>