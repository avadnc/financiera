<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Finanzas_model extends CI_Model
{

    public $entity;
    public $banco;
    public $fk_tercero;
    public $ventaAnual;
    public $costoVentas;
    public $utilidadAnual;
    public $clientes;
    public $inventario;
    public $actCirculante;
    public $pasCirculante;
    public $totalActivos;
    public $totalPasivo;
    public $proveedores;
    public $credCortoPlazo;
    public $credLargoPlazo;
    public $saldPM1;
    public $saldPM2;
    public $saldPM3;
    public $saldPM4;
    public $saldPM5;
    public $saldPM6;
    public $ingrM1;
    public $ingrM2;
    public $ingrM3;
    public $ingrM4;
    public $ingrM5;
    public $ingrM6;


    public function set_datos($data_raw)
    {
        foreach ($data_raw as $nombre_campo => $valor_campo) {

            if (property_exists('Finanzas_model', $nombre_campo)) {
                $this->$nombre_campo = $valor_campo;
            }
        }
        return $this;
    }

    public function insert_finanzas(){
        
        //verificar el usuario
        $this->db->select('id');

        $consulta = array(
            'entity' => $this->entity,
            'id' => $this->fk_tercero
        );
        $this->db->where($consulta);

        $query = $this->db->get('xll_terceros');

        $tercero = $query->row();

        if (isset($tercero)) {
            $done = $this->db->insert('xll_estado_finanzas', $this);

            if ($done) {
                $respuesta = array(
                    'err' => false,
                    'mensaje' => 'Los datos se han insertado satisfactoriamente',
                    'data' => array(
                        'finanzas_id' => $this->db->insert_id()
                    )
                );
    
            } else {
                $respuesta = array(
                    'err' => true,
                    'mensaje' => 'error al instertar',
                    'data' => array(
                        'error' => $this->db->_error_message(),
                        'error_db' => $this->db->_error_number()
                    )
                );
            }
            return $respuesta;
            
        } else {
            $respuesta = array(
                'err' => true,
                'mensaje' => 'El cliente con id: ' . $this->fk_tercero . ' no existe',
                'data' => null
            );

            return $respuesta;

        }
    }

    public function get_finanzas($fk_id, $entity){

    }
}

/* End of file Finanzas_model.php */

?>