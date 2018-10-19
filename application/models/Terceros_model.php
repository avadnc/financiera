<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Terceros_model extends CI_Model
{

    public $id;
    public $entity;
    public $nombreFiscal;
    public $nombreAlias;
    public $fechaConst;
    public $parent;
    public $sectorEmpresa;
    public $repLegal;
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
    public $fechaModificacion;

    public function get_tercero($id, $entity)
    {
        $this->db->where(array(
            'id' => $id,
            'entity' => $entity,
            'status' => 1
        ));

        $query = $this->db->get('xll_terceros');
        $row = $query->custom_row_object(0, 'Terceros_model');

        if (isset($row)) {
            $row->id = intval($row->id);
            $row->status = intval($row->status);
        }
        return $row;
    }

    public function set_datos($data_raw)
    {
        foreach ($data_raw as $nombre_campo => $valor_campo) {

            if (property_exists('Terceros_model', $nombre_campo)) {
                $this->$nombre_campo = $valor_campo;
            }
        }

        return $this;
    }

    public function insert_tercero()
    {
        //verificar el correo
        $this->db->select('rfc');

        $consulta = array(
            'entity' => $this->entity,
            'rfc' => $this->rfc
        );
        $this->db->where($consulta);

        $query = $this->db->get('xll_terceros');

        $rfc = $query->row();

        if (isset($rfc)) {

            $respuesta = array(
                'err' => true,
                'mensaje' => 'El Cliente que intentas registrar ya existe',
                'data' => null
            );

            return $respuesta;

        }

        // $tercero = $this->Terceros_model->set_datos($data);

        $done = $this->db->insert('xll_terceros', $this);

        if ($done) {
            $respuesta = array(
                'err' => false,
                'mensaje' => 'El Cliente se inserto satisfactoriamente',
                'data' => array(
                    'cliente_id' => $this->db->insert_id()
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
    }
}

/* End of file Terceros_model.php */

?>