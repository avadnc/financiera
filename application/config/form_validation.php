<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array(

    'tercero_put' => array(

        array('field' => 'nombreFiscal', 'label' => 'Nombre Fiscal', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'nombreAlias', 'label' => 'Nombre Comercial', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'fechaConst', 'label' => 'Fecha de Constitución', 'rules' => 'trim|required'),
        array('field' => 'sectorEmpresa', 'label' => 'Sector Empresarial', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'repLegal', 'label' => 'Representante Legal', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'codigoFinanciera', 'label' => 'Codigo de Cliente', 'rules' => 'trim|min_length[1]'),
        array('field' => 'codigoCliente', 'label' => 'Codigo Cliente', 'rules' => 'trim|min_length[3]'),
        array('field' => 'codigoSucursal', 'label' => 'Codigo Sucursal', 'rules' => 'trim|min_length[3]'),
        array('field' => 'direccion', 'label' => 'Direccion Postal', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'codigoPostal', 'label' => 'Codigo Postal', 'rules' => 'trim|required|exact_length[5]'),
        array('field' => 'poblacion', 'label' => 'Población', 'rules' => 'trim|required|min_length[3]'),
        array('field' => 'telFijo', 'label' => 'Telefono', 'rules' => 'trim|required|exact_length[10]'),
        array('field' => 'telCelular', 'label' => 'Telefono Celular', 'rules' => 'trim|required|exact_length[10]'),
        array('field' => 'url', 'label' => 'Dirección Web', 'rules' => 'trim|required|valid_url'),
        array('field' => 'email', 'label' => 'Dirección Email', 'rules' => 'trim|required|valid_email'),
        array('field' => 'rfc', 'label' => 'RFC', 'rules' => 'trim|required|min_length[10]|max_length[13]')
       
       //pendientes a validar
       /*
        array('field'=>'notaPrivada'), 
        array('field'=>'notaPublica'), 
        array('field'=>'tipoCliente'), 
        array('field'=>'tipoFinanciera'), 
        array('field'=>'logo'), 
        array('field'=>'fechaModificacion')
     */
    ),
    
    'estado_finanzas_put' => array(

        array('field' => 'entity','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'fk_tercero','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ventaAnual','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'costoVentas','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'utilidadAnual','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'clientes','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'inventario','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'actCirculante','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'pasCirculante','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'totalActivos','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'totalPasivo','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'proveedores','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'credCortoPlazo','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'credLargoPlazo','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM1','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM2','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM3','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM4','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM5','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'saldPM6','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM1','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM2','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM3','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM4','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM5','label'=>'','rules'=>'trim|required|numeric'),
        array('field' => 'ingrM6','label'=>'','rules'=>'trim|required|numeric')
    )
);



?>