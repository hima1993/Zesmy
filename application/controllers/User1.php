<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User1 extends CI_Controller{

	public function addToCart(){
		//reciving the obtained data
		$a1_atController=$_POST['a1'];
		$a2_atController=$_POST['a2'];

		//sending back the data
		//echo jason_encode(array('b1'=>$a1_atController,'b2'=>$a2_atController));
	}
}