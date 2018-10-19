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
        $this->load->model('Users_model');

    }

    public function tercero_get()
    {
        $data = $this->get();
        $user = $data['user'];
        $password = $data['password'];

        $user = $this->Users_model->auth_user($user, $password);

        if (isset($user)) {

            $terceroId = $data["id"];
            $entity = intval($user->entity);

            if (!isset($terceroId) || !isset($entity)) {
                $respuesta = array(
                    'err' => true,
                    'mensaje' => 'Es necesario el ID o la entidad',
                    'data' => null
                );

                $this->response($respuesta, 400);
                return;
            }

            $tercero = $this->Terceros_model->get_tercero($terceroId, $entity);

            if (isset($tercero)) {

                unset($tercero->parent);
                unset($tercero->entity);
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
        } else {
            $respuesta = array(
                'err' => true,
                'mensaje' => 'Usuario o Contraseña Incorrecta',
                'data' => null
            );
            $this->response($respuesta);
        }


    }

    public function tercero_put()
    {
        $data = $this->put();

        $user = $data['user'];
        $password = $data['password'];

        $user = $this->Users_model->auth_user($user, $password);

        if (isset($user)) {

            unset($data['user']);
            unset($data['password']);

            $this->load->library('form_validation');
            $this->form_validation->set_data($data);

            $data['entity'] = $user->entity;

            if ($this->form_validation->run('tercero_put') == true) {

                //validar si el tercero existe en la empresa creada

                $this->db->select('rfc');

                $consulta = array(
                    'entity' => $user->entity,
                    'rfc' => $data['rfc']
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

                    $this->response($respuesta);

                }

                $tercero = $this->Tercero_model->set_datos($data);
                $done = $this->db->insert('xll_terceros', $tercero);

                if ($done) {
                    $respuesta = array(
                        'err' => false,
                        'mensaje' => 'El Cliente se inserto satisfactoriamente',
                        'data' => array(
                            'cliente_id' => $this->db->insert_id()
                        )
                    );

                    $this->response($respuesta);


                } else {
                    $respuesta = array(
                        'err' => true,
                        'mensaje' => 'error al instertar',
                        'data' => array(
                            'error' => $this->db->_error_message(),
                            'error_db' => $this->db->_error_number()
                        )
                    );

                    $this->response($respuesta, 500);
                }




            } else {

                $respuesta = array(
                    'err' => true,
                    'mensaje' => 'error en la validación de datos',
                    'data' => $this->form_validation->get_errores_arreglo()
                );

                $this->response($respuesta, 400);

                // echo "todo mal";
            }



        } else {
            $this->response("usuario no autenticado");
        }
    }
}