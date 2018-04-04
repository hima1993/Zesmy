<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Other extends CI_Controller {


	public function GoCheckout(){
		$this->load->view('user/includes/header');
		
		$this->load->view('user/checkout');

		$this->load->view('user/includes/footer');
		
	}


}