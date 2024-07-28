<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function LoginPage()
	{
		$this->load->view('global/head');
		$this->load->view('modul-login/login');
	}
}
