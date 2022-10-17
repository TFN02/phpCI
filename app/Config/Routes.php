<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'c_home::display');
$routes->get('/mahasiswa', 'c_mahasiswa::display', ['as' => 'mahasiswa']);
$routes->get('/mahasiswa/table', 'c_mahasiswa::mahasiswaTable', ['as' => 'mahasiswa_table']);
$routes->get('/mahasiswa/create', 'c_mahasiswa::create');
$routes->post('/save', 'c_mahasiswa::save');
$routes->get('mahasiswa/viewDetail/(:num)', 'c_mahasiswa::viewDetail/$1');
$routes->get('mahasiswa/delete/(:num)', 'c_mahasiswa::delete/$1');
$routes->get('mahasiswa/edit/(:num)', 'c_mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'c_mahasiswa::update/$1');
$routes->post('/mahasiswa', 'c_mahasiswa::search', ['as' => 'mahasiswa.search']);
$routes->post('/login/aksi_login', 'login::aksi_login');
$routes->get('/login', 'login::display');
$routes->get('/login/logout','login::logout');
$routes->get('/main', 'c_mahasiswa::mainSection');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
