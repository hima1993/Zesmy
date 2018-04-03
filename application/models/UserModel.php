 
<?php

class UserModel extends CI_Model{


public function verifylog($email,$password,$systemUser){


        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $q = $this->db->get($systemUser);

        if($q->num_rows() == 1){

            return $q->result();
        }

        else{

            return false;

        }
}




function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
 }






}