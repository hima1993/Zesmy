<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 4/12/2018
 * Time: 12:49 AM
 */

class MakePayment extends CI_Controller{
    public function index(){
        $this->load->view('user/payment/header');
        $this->load->view('user/payment/review');
        //$this->load->view('user/checkout');
        $this->load->view('user/includes/footer');
    }

    public function shipDetails(){
        $name=$this->input->post('name');
        $country= $this->input->post('country');
        $street= $this->input->post('street');
        $apartment= $this->input->post('apartment');
        $this->load->model('PaymentModel');
        $this->PaymentModel->shipData($name,$country,$street,$apartment);
//        $this->load->view('user/payment/header');
//        $this->load->view('user/payment/payment');
//        $this->load->view('user/includes/footer');
    }

}