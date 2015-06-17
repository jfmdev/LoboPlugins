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

<h1><?php echo __('Documentation'); ?></h1>

<h3>Introduction</h3>

<p>The <em>Sitemaps</em> protocol allows a webmaster to inform search engines about URLs on a website that are available for crawling. 
A Sitemap is an XML file that lists the URLs for a site. It allows webmasters to include additional information about each URL: when it was last updated, 
how often it changes, and how important it is in relation to other URLs in the site. This allows search engines to crawl the site more intelligently.
Sitemaps are a URL inclusion protocol and complement robots.txt, a URL exclusion protocol.</p>

<p>This plugins allows to automatically generate the Sitemap file and then edit it manually, if need. You can, however, generate the Sitemap file using another tools
(just search for "Sitemaps generator" in Google or Bing) and then copy and paste the generated code.</p>


