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
		$data = $this->input->post('data');
		
		$this->servicios_model->url_pedidos($data);
	}
}
