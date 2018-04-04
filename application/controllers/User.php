<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User extends CI_Controller {



	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');

        //$this->load->model('BusinessModel', 'Model');
        //$this->data['categorylist'] = $this->Model->getCategoryList();
        
    }

    public function index() {
        // $this->showPage('home');
        //$this->load->model('BusinessModel');
        //$this->data['business_data'] = $this->BusinessModel->select();
        $this->load->view('user/includes/header');
        $this->load->view('user/includes/carousel');
        
        $this->load->view('user/home');
        $this->load->view('user/includes/footer');
    }

	public function loginchk(){


        $res = $this->UserModel->verifylog($this->input->post('email'),md5($this->input->post('password')),'customer');

        if($res !== false){

          
                $firstname = $res[0]->firstName;
                $lastname = $res[0]->lastName;

                $id = $res[0]->customerId;

                $the_session = array("loggerFname"=>$firstname,"loggerid"=>$id,"loggerLname"=>$lastname);
                $this -> session -> set_userdata($the_session);


                redirect("User");


           


        }

        // else{
        //     echo "
        //         <div>
        //         <center>
        //             <h1 style='color: #9f191f'>Wrong Username or Password</h1>
        //             <h3 style='color: #398439'>Try again!</h3>
        //          </center>
        //          </div>
        //          ";
        //     $this->load->view('login_view');
        // }




    }

    public function signout(){
        session_unset();
        redirect(base_url()); //redirect to login
    }

    public function Register(){

        $user_array = array(

            
            'firstName'                  => $_POST['Fname'],
            'lastName'               => $_POST['Lname'],
            'email'               => $_POST['email'],
            'password'               => md5($_POST['password']),
           
        );


        $this->UserModel->insertData($tablename="customer", $user_array);
    }


}