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
<h1><?php echo __('Settings'); ?></h1>

<p><?php echo __('Push the button "Generate" for automatically generate the sitemaps file or edit the file manually and then push the button "Save"') . '.'; ?></p>

<form action="<?php echo get_url('plugin/sitemaps_xml/save'); ?>" method="post" class="sitemaps">
    <input type="hidden" name="action" value="" />
    <div class="textarea">
        <textarea name="content" id="textarea_sitemaps"><?php if(isset($sitemapsContent)) echo $sitemapsContent; ?></textarea>
    </div>
    <div class="buttons">
        <button name="generate">
            <img src="<?php echo URI_PUBLIC; ?>wolf/plugins/sitemaps_xml/images/robot.png" align="middle" alt="page icon" />
            <span><?php echo __('Generate'); ?></span>
        </button>
        <button name="submit">
            <img src="<?php echo URI_PUBLIC; ?>wolf/plugins/sitemaps_xml/images/save.png" align="middle" alt="page icon" />
            <span><?php echo __('Save'); ?></span>
        </button>
    </div>
</form>