<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_controllers extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
	}
	public function articulos()
	{
		$this->servicios_model->Articulos();
	}
	public function ClientesMora()
	{
		$this->servicios_model->ClienteMora("F09");
	}
	public function ClientesIndicadores()
	{
		$this->servicios_model->ClienteIndicadores("F09");
	}
	public function Clientes()
	{
		$this->servicios_model->Clientes("F09");
	}
	public function Puntos()
	{
		$this->servicios_model->Puntos("F09");
	}
	public function InsertCobros()
	{
		$this->servicios_model->InsertCobros($_POST['pCobros']);
	}
	public function LoginUsuario()
	{
		$this->servicios_model->LoginUsuario($_POST['usuario'],$_POST['pass']);
	}
	public function url_pedidos()
	{
		$this->servicios_model->url_pedidos($_POST['PEDIDOS']);
	}
	public function ekisde()
	{
		$es='[{"detalles":{"nameValuePairs":{"ID0":"F09-P20031731","ARTICULO0":"12901011","DESC0":"Acetaminofen 120 mg/5ml Jarabe 120 ml/Frasco 1/Caja (Lancasco)","CANT0":"23","TOTAL0":"59.85","BONI0":"5+1","ID1":"F09-P20031731","ARTICULO1":"13408013","DESC1":"Albendazol 400 mg Tabletas Masticables 25/Caja (Vardhman)","CANT1":"2","TOTAL1":"189.40","BONI1":"0"}},"mCliente":"01006","mEstado":"0","mFecha":"20/03/2017 ","mIdPedido":"F09-P20031731","mNombre":"FARMACIA SAN MARTIN","mPrecio":"1755.3499","mVendedor":"F09"}]
';
echo $es;
	}
}
