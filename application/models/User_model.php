<?php
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function login($username, $password){
        $query = $this->db->get_where('user',array('username'=>$username,'password'=>md5($password)));
		return $query;
    }



    public function getUserEmail($username){
        $login = false;
        $this->db->select('*');
        $this->db->join('user_unit','user_unit.user_id=user.user_id', 'right');
        $this->db->join('unit','user_unit.unit_id=unit.id_unit',);
        $query = $this->db->get_where('user',array('email'=>$this->input->post('username')));
        if($query->num_rows() > 0){
            $login=true;
        }else{
            $this->db->select('*');
            $this->db->join('user_unit','user_unit.user_id=user.user_id', 'right');
            $query = $this->db->get_where('user',array('username'=>$this->input->post('username')));
            if($query->num_rows() > 0){
                $login=true;
            }
        }
        if($login){
            return $query;
        }
    }

    public function get_user_by_role($role){
        $this->db->select('*');
        $query = $this->db->get_where('user',array('role'=>$role));
		return $query->result_array();
    }

    public function get_user_by_id($user_id){
        $this->db->select('*');
        $query = $this->db->get_where('user',array('user_id'=>$user_id));
		return $query->row_array();
    }

    public function ldap_login(){
        $username = $this->input->POST('username');
        if (strpos($username, '@menpan.go.id') !== false) {
            $explode = explode('@', $username);
            $user = $explode[0];
        }else{
            $user = $this->input->POST('username');
        }
        $pass = $this->input->POST('password');
        //echo $user." ".$pass; die();
        $ds=ldap_connect("ldap2.menpan.go.id")
            or die("Could not connect to LDAP server."); // must be a valid LDAP server!
            ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
            if ($ds) {
              $ldaprdn  = 'uid='.$user.',ou=people,dc=menpan,dc=go,dc=id';     // ldap rdn or dn
                if ($ldapbind = @ldap_bind($ds, $ldaprdn, $pass)) {
                    ldap_close($ds);
                    return true;
                } else {
                    ldap_close($ds);
                    return false;
                }
            } else {
                return "failed";
            }
    }
}
