<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'servicio_controllers';
$route['ARTICULOS'] = 'Servicio_controllers/articulos';
$route['ClientesMora'] = 'Servicio_controllers/ClientesMora';
$route['ClientesIndicadores'] = 'Servicio_controllers/ClientesIndicadores';
$route['Clientes'] = 'Servicio_controllers/Clientes';
$route['Puntos'] = 'Servicio_controllers/Puntos';
$route['InsertCobros'] = 'Servicio_controllers/InsertCobros';
$route['inVisitas'] = 'Servicio_controllers/InsertVisitas';
$route['Login'] = 'Servicio_controllers/LoginUsuario';
$route['url_pedidos'] = 'Servicio_controllers/url_pedidos';
$route['updatePedidos'] = 'Servicio_controllers/updatePedidos';


$route['pruebaJson'] = 'Servicio_controllers/pruebaJson';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;