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
		$es='[{"detalles":{"nameValuePairs":{"ID0":"F09-P17031731","ARTICULO0":"10301021","DESC0":"Acetaminofen 100 mg/ml Solución Oral Gotas 30ml/Frasco 1/Caja (Ramos)","CANT0":"2","TOTAL0":"22.00","BONI0":"0","ID1":"F09-P17031731","ARTICULO1":"12901011","DESC1":"Acetaminofen 120 mg/5ml Jarabe 120 ml/Frasco 1/Caja (Lancasco)","CANT1":"3","TOTAL1":"59.85","BONI1":"0"}},"mCliente":"01338","mEstado":"0","mFecha":"17/03/2017 ","mIdPedido":"F09-P17031731","mNombre":"FARMACIA FARMA CENTER","mPrecio":"223.54999","mVendedor":"F09"},{"detalles":{"nameValuePairs":{"ID2":"F09-P18031732","ARTICULO2":"10301021","DESC2":"Acetaminofen 100 mg/ml Solución Oral Gotas 30ml/Frasco 1/Caja (Ramos)","CANT2":"2","TOTAL2":"22.00","BONI2":"0","ID3":"F09-P18031732","ARTICULO3":"12901011","DESC3":"Acetaminofen 120 mg/5ml Jarabe 120 ml/Frasco 1/Caja (Lancasco)","CANT3":"10","TOTAL3":"59.85","BONI3":"5+1"}},"mCliente":"01338","mEstado":"0","mFecha":"18/03/2017 ","mIdPedido":"F09-P18031732","mNombre":"FARMACIA FARMA CENTER","mPrecio":"642.5","mVendedor":"F09"}]
';
echo $es;
	}
}
