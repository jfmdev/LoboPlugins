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

// Security measure.
if (!defined('IN_CMS')) { exit(); }
 
?>
<h1><?php echo __('Settings'); ?></h1>

<p><?php echo __('Edit the content of the file and push the button "Save", to create or update the file "robots.txt"') . '.'; ?></p>

<form action="<?php echo get_url('plugin/robots_txt/save'); ?>" method="post" class="robots">
    <textarea name="content"><?php if(isset($robotsContent)) echo $robotsContent; ?></textarea>
    <div class="buttons">
        <button name="submit">
            <img src="<?php echo URI_PUBLIC; ?>wolf/plugins/robots_txt/images/save.png" align="middle" alt="page icon" />
            <span><?php echo __('Save'); ?></span>
        </button>
    </div>
</form>
