<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terceros_model extends CI_Model {

    public $id;
    public $nombreFiscal;
    public $nombreAlias;
    public $fechaConst; 
    public $parent; 
    public $sectorEmpresa; 
    public $repLegal; 
    public $estCivilRepLegal; 
    public $conyugeRepLegal; 
    public $status; 
    public $codigoFinanciera; 
    public $codigoCliente; 
    public $codigoSucursal; 
    public $direccion; 
    public $codigoPostal; 
    public $poblacion; 
    public $telFijo; 
    public $telCelular; 
    public $url; 
    public $email; 
    public $rfc; 
    public $notaPrivada; 
    public $notaPublica; 
    public $tipoCliente; 
    public $tipoFinanciera; 
    public $logo;
    
    public function get_terecero($id)
    {
        $this->db->where(array(
            'id' => $id,
            'status' => 1
        ));
        
        $query = $this->db->get('xll_terceros');
        $row = $query->custom_row_object(0, 'Terceros_model');

        return $row;
    }


}

/* End of file Terceros_model.php */

?>