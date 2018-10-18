<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array(

    $tercero_put = array(
        
        array('field'=>'entity','label' => 'entidad', 'rules' => 'trim|required|min_length[1]'),
        array('field'=>'nombreFiscal', 'label' => 'Nombre Fiscal','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'nombreAlias','label' => 'Nombre Comercial','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'fechaConst', 'label' => 'Fecha de Constitución', 'rules'=> 'trim|required'), 
        array('field'=>'sectorEmpresa','label' => 'Sector Empresarial','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'repLegal','label' => 'Representante Legal','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'codigoFinanciera','label' => 'Codigo de Cliente','rules' => 'trim|min_length[1]'), 
        array('field'=>'codigoCliente','label' => 'Codigo Cliente','rules' =>'trim|min_length[3]'), 
        array('field'=>'codigoSucursal','label' => 'Codigo Sucursal','rules' =>'trim|min_length[3]'), 
        array('field'=>'direccion','label' => 'Direccion Postal','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'codigoPostal','label' => 'Codigo Postal','rules' =>'trim|required|exact_length[5]'), 
        array('field'=>'poblacion','label' => 'Población','rules' =>'trim|required|min_length[3]'), 
        array('field'=>'telFijo','label' => 'Telefono','rules' =>'trim|required|exact_length[10]'), 
        array('field'=>'telCelular','label' => 'Telefono Celular','rules' =>'trim|required|exact_length[10]'), 
        array('field'=>'url','label' => 'Dirección Web','rules'=>'trim|required|valid_url'), 
        array('field'=>'email','label' => 'Dirección Email','rules'=>'trim|required|valid_email'), 
        array('field'=>'rfc','label' => 'RFC','rules'=>'trim|required|min_length[10]|max_length[13]')
       
       //pendientes a validar
       /*
        array('field'=>'notaPrivada'), 
        array('field'=>'notaPublica'), 
        array('field'=>'tipoCliente'), 
        array('field'=>'tipoFinanciera'), 
        array('field'=>'logo'), 
        array('field'=>'fechaModificacion')
        */
    )
);



?>