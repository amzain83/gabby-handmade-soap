<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/admin',array('admin' => true, 'controller'=>'orders','action'=>'index'));
	Router::connect('/checkout', array('controller' => 'orders', 'action' => 'edit'));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'contact'));
  Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
  Router::connect('/register', array('controller' => 'users', 'action' => 'register'));
  Router::connect('/account', array('controller' => 'users', 'action' => 'account'));
  //Redirect admin login to user login
	Router::connect('/admin/users/login', array('admin' => false, 'controller' => 'users', 'action' => 'login'));
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();
	
	//combine edit and add
	Router::connect('/admin/:controller/add', array('admin' => true, 'controller' => ':controller', 'action' => 'edit'));
	Router::connect('/:controller/add', array('controller' => ':controller', 'action' => 'edit'));

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
