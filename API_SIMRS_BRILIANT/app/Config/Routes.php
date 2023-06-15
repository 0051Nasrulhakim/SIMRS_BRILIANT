<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Pasien');
// $routes->setDefaultMethod('get_pasien');
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
// $routes->get('/pasien', 'Pasien::get_pasien');

// pasien
// $routes->post('/pasien/get_pasien', 'Pasien::get_pasien');
$routes->group('pasien', static function ($routes) {
    $routes->post('get_pasien', 'Pasien::get_pasien');
    $routes->post('add_pasien', 'Pasien::add_pasien');
    $routes->post('search_norm', 'Pasien::search_norm');
    $routes->post('search_nobpjs', 'Pasien::search_nobpjs');
    $routes->post('search_uid', 'Pasien::search_uid');
    $routes->post('delete_pasien', 'Pasien::delete_pasien');
    $routes->post('update_pasien', 'Pasien::update_pasien');
});

// poli
$routes->group('poli', static function ($routes) {
    $routes->post('get_poli', 'Poli::get_poli');
    $routes->post('add_poli', 'Poli::add_poli');
    $routes->post('search_poli', 'Poli::search_poli');
    $routes->post('update_poli', 'Poli::update_poli');
    $routes->post('delete_poli', 'Poli::delete_poli');
});

// dokter
$routes->group('dokter', static function($routes){
    $routes->post('get_dokter', 'Dokter::get_dokter');
    $routes->post('add_dokter', 'Dokter::add_dokter');
    $routes->post('search_dokter', 'Dokter::search_dokter');
    $routes->post('search_nomor_praktek', 'Dokter::search_nomor_praktek');
    $routes->post('update_dokter', 'Dokter::update_dokter');
    $routes->post('delete_dokter', 'Dokter::delete_dokter');
    $routes->post('get_kodeDokter', 'Dokter::get_kodeDokter');
});

// selain post alihkan ke halaman 404
$routes->get('/pasien/(:any)', 'Pasien::index');
$routes->get('/poli/(:any)', 'Poli::index');
$routes->get('/dokter/(:any)', 'Dokter::index');

// get method root
$routes->get('/', 'Pasien::index');
$routes->get('/(:any)', 'Pasien::index');


// $routes->resource('pasien');

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
