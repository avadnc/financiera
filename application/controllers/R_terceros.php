<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');


//errores

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class R_terceros extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('Terceros_model');

    }

    public function tercero_get()
    {
        $terceroId = $this->uri->segment(3);

        if (!isset($terceroId)) {
            $respuesta = array(
                'err' => true,
                'mensaje' => 'Es necesario el ID',
                'data' => null
            );

            $this->response($respuesta, 400);
            return;
        }

        $tercero = $this->Terceros_model->get_tercero($terceroId);

        if (isset($tercero)) {

            unset($tercero->parent);
            unset($tercero->notaPrivada);
            unset($tercero->notaPublica);
            unset($tercero->tipoCliente);
            unset($tercero->tipoFinanciera);
            unset($tercero->fechaModificacion);

            $respuesta = array(
                'err' => false,
                'mensaje' => 'registro cargado correctamente',
                'data' => $tercero
            );

            $this->response($respuesta, 200);

        } else {

            $respuesta = array(
                'err' => true,
                'mensaje' => 'No se encontró registro con ID ' . $terceroId,
                'data' => null
            );

            $this->response($respuesta, 404);

        }
    }
}