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
 if (!defined('IN_CMS')) { exit(); }
 
/**
 * Main controller for the plugin Sitemaps XML.
 *
 * @package wolf
 * @subpackage plugin.sitemaps_xml
 * @version 1.0
 * @for Wolf version 0.7.7 and above
 * @license http://www.gnu.org/licenses/lgpl.html LGPL License
 */
class SitemapsXmlController extends PluginController {
	
	/**
     * If the user is not logged, ask for it.
     */
	public static function _checkLog()
	{
        AuthUser::load();
        if ( ! AuthUser::isLoggedIn())
		{
            redirect(get_url('login'));
        }
    }
	
	/**
     * Main constructor.
     *
     * Define the layout and add the side bar.
     */
    public function __construct()
	{
		self::_checkLog();
        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/sitemaps_xml/views/sidebar'));
    }
	
	/**
     * Define the main page.
     */
    function index($page = 0)
    {
        // Read the file 'sitemaps.xml'.
        $sitemaps_path = CMS_ROOT . '/sitemaps.xml';
        $sitemaps_content = '';
        if(file_exists($sitemaps_path))
        {
            $sitemaps_content = file_get_contents($sitemaps_path);
        } else {
            $sitemaps_content = $this->generate();
        }
        
        // Display the view.
        $this->display('sitemaps_xml/views/settings', array('sitemapsContent' => $sitemaps_content));
    }
	
	/**
     * Define the documentation page.
     */
    public function documentation()
	{
        $this->display('sitemaps_xml/views/documentation');
    }
	
	/**
     * Define the settings page.
     */
    public function settings()
	{
        redirect(get_url('plugin/sitemaps_xml/'));
    }

    /**
     * Method for create or update the file 'sitemaps.xml'.
     */
    public function save()
	{
        // Verify which button has been pressed.
        $action = $_POST['action'];
        if(!empty($action) && strcmp($action, 'generate') == 0)
            $content = $this->generate();
        else
            $content = $_POST['content'];
    
        // Create or update the file 'sitemaps.txt'.
        $sitemaps_path = CMS_ROOT . '/sitemaps.xml';
        file_put_contents($sitemaps_path, $content);
            
        // Show a message.
        Flash::set('success', __('The file "sitemaps.xml" has been updated'));
        
        // Redirect to the main page of the plugin.
		redirect(get_url('plugin/sitemaps_xml/'));
	}
    
    /**
     * Generates automatically the sitemaps file.
     *
     * @returns An string with the content of the sitemaps file.
     */
    private function generate()
    {
        $parent = Page::find();
        $out = SitemapsXmlController::snippet_xml_sitemap($parent);
        return '<?xml version="1.0" encoding="UTF-8" ?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n" . $out . "</urlset>";
    }
    
    /**
     * Snippet generator which creates a Google friendly XML sitemap. Function obtained from: http://www.wolfcms.org/wiki/howto:create_a_sitemap
     *
     * @param $parent The page parent which childs are going to be listed in the sitemap.
     * @returns An string with the XML code.
     */
    private static function snippet_xml_sitemap($parent)
    {
        $out = '';
        $childs = $parent->children();
        if (count($childs) > 0)
        {
            foreach ($childs as $child)
            {
                $out .= "  <url>\n";
                $out .= "   <loc>".$child->url()."</loc>\n";
                $out .= "   <lastmod>".$child->date('%Y-%m-%d', 'updated')."</lastmod>\n";
                $out .= "   <changefreq>".($child->hasContent('changefreq') ? $child->content('changefreq'): 'weekly')."</changefreq>\n";
                $out .= "  </url>\n";
                $out .= SitemapsXmlController::snippet_xml_sitemap($child);
            }
        }
    return $out;
    }
}