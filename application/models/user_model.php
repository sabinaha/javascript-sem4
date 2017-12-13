<?php
class user_model extends CI_Model{
    public function register($enc_password){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $enc_password
        );

        return $this->db->insert('user', $data);
    }

    public function login($username, $password){

        $sql = "SELECT * FROM user WHERE username = ?";
        $myquery = $this->db->query($sql, array($username));

        if($myquery->num_rows() == 1){
            $pw = $myquery->row(0)->password;
            if(password_verify($password, $pw)){
                return $myquery->row(0)->username;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    // Check username exists
        public function check_username_exists($username){
            $query = $this->db->get_where('user', array('username' => $username));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }
}
