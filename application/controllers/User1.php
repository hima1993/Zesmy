<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User1 extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');      
    }

	public function addToCart(){
		$item_arr=array(
			 'username' => 'abc2'
		);

		$responce=$this->UserModel->insertData($tablename='admin', $data_arr=$item_arr);

		echo "<script>console.log('$responce')</script>";
	}
}