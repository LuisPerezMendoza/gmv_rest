<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'servicio_controllers';
$route['ARTICULOS'] = 'Servicio_controllers/articulos';
$route['ClientesMora'] = 'Servicio_controllers/ClientesMora';
$route['ClientesIndicadores'] = 'Servicio_controllers/ClientesIndicadores';
$route['Clientes'] = 'Servicio_controllers/Clientes';
$route['Puntos'] = 'Servicio_controllers/Puntos';
$route['Login'] = 'Servicio_controllers/LoginUsuario';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
