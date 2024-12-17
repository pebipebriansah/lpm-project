<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// routes for Login
$routes->get('/', 'Home::index');
$routes->get('/login','AuthController::index');
$routes->post('/auth','AuthController::auth');
$routes->get('/logout','AuthController::logout');
$routes->get('/register','AuthController::register');
$routes->post('/register/save','AuthController::save');
$routes->post('klasifikasi','KlasifikasiController::klasifikasi_berita');
$routes->get('lpm-sinergis','Home::index');
$routes->get('politik','Home::politik');
$routes->get('hukum','Home::hukum');
$routes->get('nasional','Home::nasional');
$routes->get('global','Home::global');
$routes->get('peristiwa','Home::peristiwa');
$routes->get('detail/(:any)','Home::detail/$1');

// routes for Admin
$routes->group('admin', ['filter' => 'AuthFilter'], static function ($routes){
    $routes->get('/','Admin\DashboardController::index');
    $routes->get('berita','Admin\BeritaController::index');
    $routes->get('berita/save','Admin\BeritaController::save');
});

// routes for Jurnalis
$routes->group('jurnalis', ['filter' => 'AuthFilter'], static function ($routes){
    $routes->get('/','Jurnalis\DashboardController::index');
    $routes->get('berita','Jurnalis\BeritaController::index');
    $routes->post('berita/save','Jurnalis\BeritaController::save');
});

$routes->group('editor', ['filter' => 'AuthFilter'], static function ($routes){
    $routes->get('/','Editor\DashboardController::index');
    $routes->get('berita','Editor\BeritaController::index');
    $routes->post('berita/update/(:any)','Editor\BeritaController::update/$1');
    $routes->get('berita/history','Editor\BeritaController::history');
    $routes->post('berita/konfirmasi/(:any)','Editor\BeritaController::konfirmasi/$1');
});

$routes->group('pimpinan', ['filter' => 'AuthFilter'], static function ($routes){
    $routes->get('/','Pimpinan\DashboardController::index');
    $routes->get('publish_berita','Pimpinan\BeritaController::publish_berita');
    $routes->post('publish_berita/publish/(:any)','Pimpinan\BeritaController::publish/$1');
});