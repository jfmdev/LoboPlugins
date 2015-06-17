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

<h1><?php echo __('Documentation'); ?></h1>

<h3>Introduction</h3>

<p><strong style="color:blue;">RobotsTxt</strong> is a plugin that simplifies the task of create and update the file <em>robots.txt</em>, used to indicate to web crawlers (and other web robots) 
which parts of a website must not be indexed by search engines.</p>
<p>Keep in mind that the protocol of <em>robots.txt</em> is purely advisory, it relies on the cooperation of the web robot. A web robot (in particular, malicious web robots) can
ignore the directives of <em>robots.txt</em> and jump straight into the disallowed sections.</p>

<br/>
<h3>Examples</h3>

<p>
	The following examples have been copied from the site <a href="http://www.robotstxt.org/">robotstxt.org</a>.
</p>
<div class="example">
    This example tells all robots to visit all files because the wildcard * specifies all robots:
    <div class="code">
        User-agent: *
        <br/>Disallow:
    </div>
    The same result can be accomplished with an empty or missing robots.txt file.
</div>
<div class="example">
    This example tells all robots to stay out of a website:
    <div class="code">
        User-agent: *
        <br/>Disallow: /
    </div>
</div>
<div class="example">
    This example tells all robots not to enter three directories:
    <div class="code">
        User-agent: *
        <br/>Disallow: /cgi-bin/
        <br/>Disallow: /tmp/
        <br/>Disallow: /junk/
    </div>
</div>
<div class="example">
    This example tells all robots to stay away from one specific file:
    <div class="code">
        User-agent: *
        <br/>Disallow: /directory/file.html
    </div>
</div>

<br/>
<h3>Generators</h3>

<p>If you do not want to manually edit the file <em>robots.txt</em>, they are plenty of generators that can do the work for you.
Only search in Google (or Bing) for "robots.txt generator".</p>
