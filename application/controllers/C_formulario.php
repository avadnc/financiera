<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_formulario extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $this->load->view('view_formulario');
    }

    public function finanzas()
    {
		$validForm = array(			
			
				array(
					'field' => 'nomEmpresa',
					'label' => 'Nombre e la Empresa',
					'rules' => ''
						),
				array(
					'field' => 'email',
					'label' => 'Direccion de Email',
					'rules' =>	''),
				array(
					'field' => 'giroEmpresa',
					'label' => 'Giro de la empresa',
					'rules' => ''),
				array('monto'	=>	''),
				array('repLegal'	=>	''),
				array('estCivil'	=>	''),
				array('nomConyuge'	=>	''),
				array('fechaConst'	=>	''),
				array('ventaAnual'	=>	''),
				array('costoVenta'	=>	''),
				array('utilidadAnual'	=>	''),
				array('clientes'	=>	''),
				array('inventario'	=>	''),
				array('actCircula'	=>	''),
				array('totalActivo'	=>	''),
				array('totalPasivo'	=>	''),
				array('credCortoPlazo'	=>	''),
				array('credLargoPlazo'	=>	''),
				array('saldPM1'	=>	''),
				array('saldPM2'	=>	''),
				array('saldPM3'	=>	''),
				array('saldPM4'	=>	''),
				array('saldPM5'	=>	''),
				array('saldPM6'	=>	''),
				array('ingrM1'	=>	''),
				array('ingrM2'	=>	''),
				array('ingrM3'	=>	''),
				array('ingrM4'	=>	''),
				array('ingrM5'	=>	''),
				array('ingrM6'	=>	'')
			

		);


        // if ($this->form_validation->run() == false) {
        //     $this->load->view('myform');
        // } else {
        //     $this->load->view('formsuccess');
        // }
        $data = $this->input->post();
        var_dump($data);

    }

    public function respuesta()
    {

        echo 'Datos guardados';

    }
}
