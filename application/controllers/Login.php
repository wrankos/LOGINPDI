<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		//este es el inicio
		$this->load->view('login/index');
	}
	public function logear(){
		$usuario = $this->input->post("usuario");
		$contraseña = $this->input->post("contraseña");

		//intanciar el servicio

		//descomentar esto
		//$client = new SoapClient("Pegar aca el url del web service");

		//se debe cambiar id y pass por los valores que recibe el servicio (revisarlo con SOAPUI, descarguenlo)
		
		$params = array(
			"id" => $usuario,
			"pass" => $contraseña
			);
		//descomentar esto
		//$funcionario = $client->InfoFuncionarioLogin($params);

		echo "<pre>";
			print_r ($funcionario);
		echo "</pre>";	


	}
}
?>