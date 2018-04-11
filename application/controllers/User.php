<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User extends CI_Controller {



	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('AdminModel', 'Model');
        $this->data['categorylist'] = $this->Model->getCategoryList();
        $this->data['categoryWomen'] = $this->Model->getCategoryWomen();
        $this->data['categoryMen'] = $this->Model->getCategoryMen();
        $this->data['categoryKids'] = $this->Model->getCategoryKids();
        
    }

    public function index() {

       
        $this->load->view('user/includes/header',$this->data);
        $this->load->view('user/includes/carousel',$this->data);
        
        $this->load->view('user/home',$this->data);
        $this->load->view('user/includes/footer',$this->data);
    }

    public function browse() {
       
        $this->load->view('user/includes/header',$this->data);
       
        
        $this->load->view('user/browse',$this->data);
        $this->load->view('user/includes/footer',$this->data);
    }

    // Search categary
    public function search_keyword() {
        $this->load->model('AdminModel');
        $category = $this->input->get('categary');
        $categoryid = 0;
        if($category =='Men'){
            $categoryid = 1;
        }
        else if($category =='Women'){
            $categoryid = 2;
        }
        else if($category =='kids_boy'){
            $categoryid = 3;
        }
        else if($category =='kids_girl'){
            $categoryid = 4;
        }

        $keyword = $this->input->get('search');
        $this->data['categoryid_id']  = $categoryid;
        $this->data['item_data'] = $this->AdminModel->search($keyword,$categoryid);
        $this->load->view('user/includes/header', $this->data);
       $this->load->view('user/browse',$this->data);
       $this->load->view('user/includes/footer',$this->data);

    }

    public function categary_view($categoryId) {
        $this->load->model('AdminModel');
        //$this->data['business_data'] = $this->BusinessModel->selectcategory($categoryId);
        $this->load->view('client/layouts/header', $this->data);
        $this->load->view('client/layouts/sidebar', $this->data);
        $this->load->view('client/browse', $this->data);
        $this->load->view('client/layouts/footer', $this->data);
    }



	public function loginchk(){

        $this->load->model('AdminModel');

        $res1 = $this->AdminModel->checkLog($this->input->post('email'), md5($this->input->post('password')));

        $res2 = false;


        

        if($res1 !== false){
            

            
            $admn_det = array(


                'admn_id'=>$res1[0]->adminId,
                'username' => $res1[0]->username,               
                
                'email'=>$res1[0]->email,
                'admn_loggedIn' => TRUE

            );

                $this->session->set_userdata($admn_det);
                redirect('Admin');   





            
           
        }else{

            $this->load->model('UserModel');

            $res2 = $this->UserModel->verifylog($this->input->post('email'),md5($this->input->post('password')),'customer');


            if ($res2 != false){

          
                $firstname = $res2[0]->firstName;
                $lastname = $res2[0]->lastName;

                $id = $res2[0]->customerId;

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