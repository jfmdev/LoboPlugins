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
 if (!defined('IN_CMS')) { exit(); }
 
/**
 * Main controller for the plugin RobotsTxt.
 *
 * @package wolf
 * @subpackage plugin.robots_txt
 * @version 1.0
 * @for Wolf version 0.7.7 and above
 * @license http://www.gnu.org/licenses/lgpl.html LGPL License
 */
class RobotsTxtController extends PluginController {
	
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
        $this->assignToLayout('sidebar', new View('../../plugins/robots_txt/views/sidebar'));
    }
	
	/**
     * Define the main page.
     */
    function index($page = 0)
    {
        // Read the file 'robots.txt'.
        $robots_path = CMS_ROOT . '/robots.txt';
        $robots_content = '';
        if(file_exists($robots_path))
        {
            $robots_content = file_get_contents($robots_path);
        } else {
            $robots_content = "User-agent: *\nDisallow: \nDisallow: /wolf/";
        }
        
        // Display the view.
        $this->display('robots_txt/views/settings', array('robotsContent' => $robots_content));
    }
	
	/**
     * Define the documentation page.
     */
    public function documentation()
	{
        $this->display('robots_txt/views/documentation');
    }
	
	/**
     * Define the settings page.
     */
    public function settings()
	{
        redirect(get_url('plugin/robots_txt/'));
    }

    /**
     * Method for create or update the file 'robots.txt'.
     */
    public function save()
	{
        // Verify if the content has been defined.
        $content = $_POST['content'];
        if(!empty($content))
        {
            // Create or update the file 'robots.txt'.
            $robots_path = CMS_ROOT . '/robots.txt';
            file_put_contents($robots_path, $content);
            
            // Show a message.
            Flash::set('success', __('The file "robots.txt" has been updated'));
        }
        
        // Redirect to the main page of the plugin.
		redirect(get_url('plugin/robots_txt/'));
	}
}