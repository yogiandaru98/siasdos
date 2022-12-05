<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login','Home::login');
$routes->post('/login/action','AuthController::login');
$routes->post('/register/action','AuthController::register');
$routes->get('/logout','AuthController::logout');
$routes->get('/pengumuman','Home::pengumuman');
$routes->post('/pengumuman/store','Home::storePengumuman');

//nmata kuliah
$routes->get('/mata_kuliah','MataKuliahController::index');
$routes->get('/mata_kuliah/create/','MataKuliahController::create');
$routes->post('/matakuliah/store','MataKuliahController::store');
$routes->get('/matakuliah/edit/(:num)','MataKuliahController::edit/$1');
$routes->post('/matakuliah/delete/(:num)','MataKuliahController::delete/$1');
$routes->post('/matakuliah/update','MataKuliahController::update');

//mahasiswa
$routes->get('/pendaftaran','MahasiswaController::index');
$routes->post('/pendaftaran/store','MahasiswaController::store');
//admin
$routes->get('/data_pendaftar/','AdminController::index');

$routes->get('/data_pendaftar/view/(:num)','AdminController::view/$1');
$routes->get('/data_pendaftar/edit/(:num)','AdminController::edit/$1');
$routes->get('/data_pendaftar/delete/(:num)','AdminController::delete/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
