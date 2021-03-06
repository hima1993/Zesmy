<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('admin/admin1.php');
	}
	

	public function logoutAdmn(){
		unset(
			$_SESSION['admn_id'],
			$_SESSION['username'],
			
			$_SESSION['email'],
			$_SESSION['admn_loggedIn']
		);
		redirect('User');

	}

	public function viewProfile(){
		$this->load->view('admin/userprofile.php');
	}

//	ICB's work
    public function adminView(){
        $this->load->view('admin/includes/adminHeader.php');
        $this->load->view('admin/adminDashboard.php');
        $this->load->view('admin/includes/adminFooter.php');
    }
    public function addItem(){
        $this->load->view('admin/includes/adminHeader.php');
        $this->load->view('admin/addItem.php');
        $this->load->view('admin/includes/adminFooter.php');
    }

}
