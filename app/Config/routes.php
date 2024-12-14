<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'index'));
 	Router::connect('/location-odisha', array('controller' => 'pages', 'action' => 'locationodisha'));
	Router::connect('/plan-your-trip', array('controller' => 'pages', 'action' => 'tripplan'));

 	Router::connect('/travel-odisha/by-air', array('controller' => 'pages', 'action' => 'travelair'));
	Router::connect('/travel-odisha/by-rail', array('controller' => 'pages', 'action' => 'travelrail'));
	Router::connect('/travel-odisha/by-road', array('controller' => 'pages', 'action' => 'travelroad'));
	
	Router::connect('/travel-odisha/visa-passport-and-embassy-information', array('controller' => 'pages', 'action' => 'visapassportinfo'));
	Router::connect('/travel-odisha/customs-and-borders', array('controller' => 'pages', 'action' => 'customsborders'));
	Router::connect('/travel-odisha/checklist', array('controller' => 'pages', 'action' => 'checklist'));
	
	
	Router::connect('/travel-odisha/*', array('controller' => 'pages', 'action' => 'travelair'));
	
 	Router::connect('/about-odisha/discover-odisha', array('controller' => 'pages', 'action' => 'discoverodisha'));
	Router::connect('/about-odisha/once-you-are-here', array('controller' => 'pages', 'action' => 'oncehereodisha'));
	Router::connect('/about-odisha/travel-essentials', array('controller' => 'pages', 'action' => 'travelessentialsodisha'));	

	Router::connect('/about-odisha/:slug', array('controller' => 'pages', 'action' => 'view'),
	 					array(
			                    'slug' => '[A-Za-z0-9\._-]+',
			                    'pass' => array('slug')
			                ));
							
	
	Router::connect('/destinations', array('controller' => 'destinations', 'action' => 'index'));
	Router::connect('/destinations/index', array('controller' => 'destinations', 'action' => 'index'));
	Router::connect('/destinations/:slug', array('controller' => 'destinations', 'action' => 'view'),
	 					array(
			                    'slug' => '[A-Za-z0-9\._-]+',
			                    'pass' => array('slug')
			                ));

							
	Router::connect('/what-to-see', array('controller' => 'attractions', 'action' => 'index'));
	Router::connect('/what-to-see/index', array('controller' => 'attractions', 'action' => 'index'));
	Router::connect('/what-to-see/:slug', array('controller' => 'attractions', 'action' => 'view'),
	 					array(
			                    'slug' => '[A-Za-z0-9\._-]+',
			                    'pass' => array('slug')
			                ));	

							
	Router::connect('/attractions', array('controller' => 'attractions', 'action' => 'tourism'));			                
	Router::connect('/attractions/index', array('controller' => 'attractions', 'action' => 'tourism'));
	Router::connect('/attractions/:slug', array('controller' => 'attractions', 'action' => 'tourismtype'),
	 					array(
			                    'slug' => '[A-Za-z0-9\._-]+',
			                    'pass' => array('slug')
			                ));	
							
	Router::connect('/what-to-do', array('controller' => 'activities', 'action' => 'index'));
	Router::connect('/what-to-do/index', array('controller' => 'activities', 'action' => 'index'));
	Router::connect('/what-to-do/:slug', array('controller' => 'activities', 'action' => 'view'),
	 					array(
			                    'slug' => '[A-Za-z0-9\._-]+',
			                    'pass' => array('slug')
			                ));								                					
	
	Router::connect('/upcoming-events', array('controller' => 'events', 'action' => 'index'));
	
	Router::connect('/contact-us', array('controller' => 'pages', 'action' => 'contactus'));
	Router::connect('/about-us', array('controller' => 'pages', 'action' => 'aboutus'));
	Router::connect('/what-we-do', array('controller' => 'pages', 'action' => 'services'));
    
    Router::connect('/under-construction', array('controller' => 'pages', 'action' => 'underconstruction'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
