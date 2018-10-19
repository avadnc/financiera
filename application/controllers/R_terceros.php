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
        $this->load->helper('calculofinanciero');
        $this->load->model('Terceros_model');
        $this->load->model('Users_model');
        $this->load->model('Finanzas_model');


    }

    //obtener datos de tercero con ID
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

    //grabar datos de tercero
    public function tercero_put()
    {
        $data = $this->put();

        $user = $data['user'];
        $password = $data['password'];

        $user = $this->Users_model->auth_user($user, $password);

        if (isset($user)) {

            unset($data['user']);
            unset($data['password']);
            $data['entity'] = $user->entity;
            $this->load->library('form_validation');
            $this->form_validation->set_data($data);



            if ($this->form_validation->run('tercero_put') == true) {

                //validar si el tercero existe en la empresa creada
                $tercero = $this->Terceros_model->set_datos($data);
                $respuesta = $tercero->insert_tercero();

                if ($respuesta['err']) {

                    $this->response($respuesta, 400);

                } else {

                    $this->response($respuesta);
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
            $this->response("usuario no autenticado", 403);
        }
    }

    //insertando los estados financieros
    public function tercero_finanzas_put()
    {
        $data = $this->put();

        $user = $data['user'];
        $password = $data['password'];

        $user = $this->Users_model->auth_user($user, $password);

        if (isset($user)) {

            unset($data['user']);
            unset($data['password']);
            $data['entity'] = $user->entity;
            $this->load->library('form_validation');
            $this->form_validation->set_data($data);

            if ($this->form_validation->run('estado_finanzas_put') == true) {

                //validar si el tercero existe en la empresa creada
                // $this->response($data);
                $finanzas = $this->Finanzas_model->set_datos($data);

                $respuesta = $finanzas->insert_finanzas();

                if ($respuesta['err']) {

                    $this->response($respuesta, 400);

                } else {

                    $this->response($respuesta);
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
            $this->response('usuario no autenticado', 403);
        }
    }

    public function obtenerFinanzas_get()
    {
        $data = $this->input->request_headers();

        $user = $data['user'];
        $password = $data['password'];

        $user = $this->Users_model->auth_user($user, $password);

        if (isset($user)) {
            $this->db->select('(sum(saldPM1+saldPM2+saldPM3+saldPM4+saldPM5+saldPM6)/6) as "saldoPromedio"', false);
            $this->db->where(array(
                'fk_tercero' => $data->idTercero,
                'entity' => $user->entity,
                'id' => $data->idFinanzas
            ));
            $query = $this->db->get('xll_estado_finanzas');

            $saldoPM = $query->row(); //saldo promedio
            $saldoPM = intval($saldoPM->saldoPromedio);

            $this->db->reset_query();

            $this->db->select('(sum(ingrM1+ingrM2+ingrM3+ingrM4+ingrM5+ingrM6)/6) as "ingresoPromedio"', false);
            $this->db->where(array(
                'fk_tercero' => 1,
                'entity' => 1,
                'id' => 1
            ));
            $query = $this->db->get('xll_estado_finanzas');

            $ingresoPM = $query->row(); //ingreso promedio
            $ingresoPM = intval($ingresoPM->ingresoPromedio);

            $this->db->reset_query();

            $this->db->select('xll_d_bancos.nombreComercial as "banco", xll_estado_finanzas.ventaAnual, xll_estado_finanzas.costoVentas, xll_estado_finanzas.utilidadAnual, xll_estado_finanzas.clientes, xll_estado_finanzas.inventario, xll_estado_finanzas.actCirculante, xll_estado_finanzas.pasCirculante, xll_estado_finanzas.totalActivos, xll_estado_finanzas.totalPasivo, xll_estado_finanzas.proveedores, xll_estado_finanzas.credCortoPlazo, xll_estado_finanzas.credLargoPlazo', false);
            $this->db->where(array(
                'xll_estado_finanzas.fk_tercero' => 1,
                'xll_estado_finanzas.entity' => 1,
                'xll_estado_finanzas.id' => 1
            ));
            $this->db->join('xll_d_bancos', 'xll_estado_finanzas.banco = xll_d_bancos.id');

            $query = $this->db->get('xll_estado_finanzas');

            $estadosFinancieros = $query->row();

            if (isset($saldoPM) && isset($ingresoPM) && isset($estadosFinancieros)) {

                $respuesta = array(
                    'err' => false,
                    'mensaje' => 'Datos financieros correctamente',
                    'data' => array(
                        'saldoPromedio' => $saldoPM,
                        'ingresoPromedio' => $ingresoPM,
                        'calculoLiquidez' => calculoLiquidez(intval($estadosFinancieros->actCirculante), intval($estadosFinancieros->pasCirculante)),
                        'endeudamiento' => endeudamiento(intval($estadosFinancieros->totalPasivo), intval($estadosFinancieros->totalActivos)),
                        'rentabilidad' => rentabilidad(intval($estadosFinancieros->utilidadAnual), intval($estadosFinancieros->ventaAnual)),
                        'pruebaDelAcido' => pruebaAcido(intval($estadosFinancieros->actCirculante), intval($estadosFinancieros->inventario), intval($estadosFinancieros->pasCirculante)),
                        'diasInventario' => diasInventario(intval($estadosFinancieros->inventario), intval($estadosFinancieros->costoVentas)),
                        'diasCliente' => diasCliente(intval($estadosFinancieros->clientes), intval($estadosFinancieros->ventaAnual)),
                        'diasProveedor' => diasProveedor(intval($estadosFinancieros->proveedores), intval($estadosFinancieros->costoVentas))
                    )
                );

                $this->response($respuesta);

            } else {

                $respuesta = array(
                    'err' => true,
                    'mensaje' => 'error en la obtencion de datos',
                    'data' => array(
                        'error' => $this->db->_error_message(),
                        'error_db' => $this->db->_error_number()
                    )
                );
                $this->response($respuesta);
            }


        } else {
            $this->response('usuario no autenticado', 403);

        }
    }
}