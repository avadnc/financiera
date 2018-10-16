<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Users_model extends CI_Model
{

    public $id;
    public $fk_terecero;
    public $username;
    public $password;
    public $fecha_modificacion;

    public function get_user($id)
    {
        $this->db->where(array(
            'id' => $id,
            'activo' => 1
        ));
        
        $query = $this->db->get('xll_users');
        $row = $query->custom_row_object(0, 'Users_model');

        return $row;
        
    }

}

/* End of file users.php */



?>