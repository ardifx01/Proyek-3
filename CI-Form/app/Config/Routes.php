<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('dosen', 'dosen::display');
$routes->get('mahasiswa', 'Mahasiswa::display');
$routes->get('home', 'Home::index');
$routes->get('berita', 'Berita::index');

