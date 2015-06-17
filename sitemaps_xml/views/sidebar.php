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
 
?>
<p class="button">
    <a href="<?php echo get_url('plugin/sitemaps_xml/documentation'); ?>">
        <img src="<?php echo URI_PUBLIC; ?>wolf/plugins/sitemaps_xml/images/documentation.png" align="middle" alt="page icon" />
        <?php echo __('Documentation'); ?>
    </a>
</p>
<p class="button">
    <a href="<?php echo get_url('plugin/sitemaps_xml/settings'); ?>">
        <img src="<?php echo URI_PUBLIC; ?>wolf/plugins/sitemaps_xml/images/settings.png" align="middle" alt="page icon" />
        <?php echo __('Settings'); ?>
    </a>
</p>
