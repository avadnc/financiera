<?php
defined('BASEPATH') or exit('No direct script access allowed');

//mostrar erroes;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class C_pruebas extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('calculoFinanciero');
        
    }

    public function index()
    {
        $dato1 = 10000 ;
        $dato2 = 150000 ;
        $dato3 = 10000;

        echo 'El cálculo de liquidez es :'. calculoLiquidez($dato1,$dato2);
        echo '<br>';
        echo 'El endeudamiento es: ' . endeudamiento($dato1,$dato2) . ' %';
        echo '<br>';
        echo 'La rentabilidad es de: '. rentrabilidad($dato1,$dato2) . ' %';
        echo '<br>';
        echo 'La prueba del acido es de: '. pruebaAcido($dato1,$dato2,$dato3) . ' %';
        echo '<br>';
        echo 'Rotacion Inventario: '. diasInventario($dato1,$dato2);
        echo '<br>';
        echo 'Los clientes pagan cada: '. diasCliente($dato1,$dato2);
        echo '<br>';
        echo 'Se pagan a los proveeores cada: '. diasProveedor($dato1,$dato2);
    }
}