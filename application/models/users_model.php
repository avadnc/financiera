<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Users_model extends CI_Model
{

    public $id;
    public $entity;
    public $fk_terecero;
    public $username;
    public $password;
    public $fecha_modificacion;

    // public function get_user($id)
    // {
    //     $this->db->where(array(
    //         'id' => $id,
    //         'activo' => 1
    //     ));

    //     $query = $this->db->get('xll_users');
    //     $row = $query->custom_row_object(0, 'Users_model');

    //     return $row;

    // }

    public function auth_user($user, $pass)
    {
  
        $this->db->select('entity');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $this->db->from('xll_users');
        

        $query = $this->db->get();
        // // var_dump($query);

        // return 'el usuario es: '.$user .'<br> el password es: '.$pass;

        return $query->row();



    }

}

/* End of file users.php */



?>