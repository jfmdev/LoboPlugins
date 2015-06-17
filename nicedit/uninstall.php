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
 
// Security measure.
if ( !defined('IN_CMS') ) {
    exit();
}

// Delete plugin settings.
if ( Plugin::deleteAllSettings('nicedit') === false ) {
    Flash::set('error', __('Unable to delete plugin settings.'));
    redirect(get_url('setting'));
} else {
    Flash::set('success', __('Successfully uninstalled plugin.'));
    redirect(get_url('setting'));
}

