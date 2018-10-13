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
				'rules' => ''
			),

			array(
				'field' => 'giroEmpresa',
				'label' => 'Giro de la empresa',
				'rules' => ''
			),

			array(
				'field' => 'monto',
				'label' => 'Monto Solicitado',
				'rules' => ''
			),

			array(
				'field' => 'repLegal',
				'label' => 'Represntante Legal',
				'rules' => ''
			),

			array(
				'field' => 'estCivil',
				'label' => 'Estado Civil Rep. Legal',
				'rules' => ''
			),

			array(
				'field' => 'nomConyuge',
				'label' => 'Nombre del Conyuge',
				'rules' => ''
			),

			array(
				'field' => 'fechaConst',
				'label' => 'Fecha de Constitución Empresa',
				'rules' => ''
			),

			array(
				'field' => 'ventaAnual',
				'label' => 'Ventas Anuales',
				'rules' => ''
			),

			array(
				'field' => 'costoVentas',
				'label' => 'Costo De Ventas',
				'rules' => ''
			),

			array(
				'field' => 'utilidadAnual',
				'label' => 'Utilidad Anual',
				'rules' => ''
			),

			array(
				'field' => 'clientes',
				'label' => 'Clientes',
				'rules' => ''
			),

			array(
				'field' => 'inventario',
				'label' => 'Inventario',
				'rules' => ''
			),

			array(
				'field' => 'actCirculante',
				'label' => 'Activo Circulante',
				'rules' => ''
			),
			array(
				'field' => 'pasCirculante',
				'label' => 'Pasivo Circulante',
				'rules' => ''
			),
			array(
				'field' => 'totalActivo',
				'label' => 'Total Activos',
				'rules' => ''
			),

			array(
				'field' => 'proveedores',
				'label' => 'Total Deuda Proveedores',
				'rules' => ''
			),
			array(
				'field' => 'totalPasivo',
				'label' => 'Total Pasivos',
				'rules' => ''
			),

			array(
				'field' => 'credCortoPlazo',
				'label' => 'Creditos a Corto Plazo',
				'rules' => ''
			),

			array(
				'field' => 'credLargoPlazo',
				'label' => 'Creditos a Largo Plazo',
				'rules' => ''
			),

			array(
				'field' => 'saldPM1',
				'label' => 'Saldo Promedio Mes 1',
				'rules' => ''
			),

			array(
				'field' => 'saldPM2',
				'label' => 'Saldo Promedio Mes 2',
				'rules' => ''
			),

			array(
				'field' => 'saldPM3',
				'label' => 'Saldo Promedio Mes 3',
				'rules' => ''
			),

			array(
				'field' => 'saldPM4',
				'label' => 'Saldo Promedio Mes 4',
				'rules' => ''
			),

			array(
				'field' => 'saldPM5',
				'label' => 'Saldo Promedio Mes 5',
				'rules' => ''
			),

			array(
				'field' => 'saldPM6',
				'label' => 'Saldo Promedio Mes 6',
				'rules' => ''
			),

			array(
				'field' => 'ingrM1',
				'label' => 'Ingresos Medios Mes 1',
				'rules' => ''
			),

			array(
				'field' => 'ingrM2',
				'label' => 'Ingresos Medios Mes 2',
				'rules' => ''
			),

			array(
				'field' => 'ingrM3',
				'label' => 'Ingresos Medios Mes 3',
				'rules' => ''
			),

			array(
				'field' => 'ingrM4',
				'label' => 'Ingresos Medios Mes 4',
				'rules' => ''
			),

			array(
				'field' => 'ingrM5',
				'label' => 'Ingresos Medios Mes 5',
				'rules' => ''
			),

			array(
				'field' => 'ingrM6',
				'label' => 'Ingresos Medios Mes 6',
				'rules' => ''
			),
			array(
				'field' => 'Banco',
				'label' => 'Banco',
				'rules' => ''
			)
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
