<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/','Home::index');
$routes->get('/Confirmados','Confirmados_Controller::index');
$routes->post('/Confirmados/Crear','Confirmados_Controller::Crear');
$routes->get('/Confirmados/eliminar/(:any)','Confirmados_Controller::eliminar/$1');
$routes->post('/Confirmados/actualizar/(:any)','Confirmados_Controller::Actualizar/$1');
$routes->post('/Posibles/Crear','Posibles_Controller::Crear');
$routes->get('/Posibles/eliminar/(:any)','Posibles_Controller::eliminar/$1');
$routes->get('/Posibles','Posibles_Controller::index');
$routes->post('/Posibles/actualizar/(:any)','Posibles_Controller::Actualizar/$1');
/**
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
