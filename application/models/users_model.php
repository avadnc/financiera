<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Users_model extends CI_Model
{

    public $id;
    public $fk_terecero;
    public $username;
    public $password;
    public $fecha_modificacion;

    public function users_get($id)
    {

    }

}

/* End of file users.php */



?>