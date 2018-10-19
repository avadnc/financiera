<?php

//ANCHOR Calculo de Liquidez

function calculoLiquidez($actCirculante, $pasCirculante)
{
    if (is_numeric($actCirculante) && is_numeric($pasCirculante)) {

        $data = $actCirculante / $pasCirculante;
        return $data;

    } else {
        //validamos si nos mandan datos vacios
        if ($actCirculante == '' || $pasCirculante == '' || $actCirculante == null || $pasCirculante == null) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}

//ANCHOR Calculo de Endeudamiento
function endeudamiento($totalPasivo, $totalActivo)
{
    if (is_numeric($totalPasivo) && is_numeric($totalActivo)) {

        $data = ($totalPasivo / $totalActivo) * 100;
        return $data;

    } else {
        //validamos si nos mandan datos vacios
        if ($totalPasivo == '' || $totalActivo == '' || $totalPasivo == null || $totalActivo == null) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }
}
//ANCHOR Calculo de Rentabilidad
function rentabilidad($utilidadAnual, $ventaAnual)
{
    if (is_numeric($utilidadAnual) && is_numeric($ventaAnual)) {

        $data = ($utilidadAnual / $ventaAnual) * 100;
        return $data;

    } else {
        //validamos si nos mandan datos vacios
        if ($utiliutilidadAnualdad == '' || $ventaAnual == '' || $utilidadAnual == null || $ventaAnual == null) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}

//ANCHOR Prueba del Acido
function pruebaAcido($actCirculante, $inventario, $pasCirculante)
{
    if (is_numeric($actCirculante) && is_numeric($inventario) && is_numeric($pasCirculante)) {

        $data = ($actCirculante - $inventario) / $pasCirculante ;
        return $data;

    } else {
        //validamos si nos mandan datos vacios
        if ($actCirculante == '' || $ventas == '' || $inventario == '' || $inventario == null || $ventas == null || $inventario == null) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}

//ANCHOR Dias de Inventario
function diasInventario($inventario, $costoVentas)
{
    if (is_numeric($inventario) && is_numeric($costoVentas)) {

        $data = ($inventario / $costoVentas) * 365 ;
        return round($data);

    } else {
        //validamos si nos mandan datos vacios
        if ($inventario == '' || $costoVentas == '' || $inventario == null || $costoVentas == null ) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}

//ANCHOR Dias pago Clientes
function diasCliente($clientes, $ventaAnual)
{
    if (is_numeric($clientes) && is_numeric($ventaAnual)) {

        $data = ($clientes / $ventaAnual) * 365 ;
        return round($data);

    } else {
        //validamos si nos mandan datos vacios
        if ($clientes == '' || $ventaAnual == '' || $clientes == '' || $ventaAnual == null ) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}

//ANCHOR Dias pago Proveedores
function diasProveedor($proveedores, $costoVentas)
{
    if (is_numeric($proveedores) && is_numeric($costoVentas) ) {

        $data = ($proveedores / $costoVentas) * 365 ;
        return round($data);

    } else {
        //validamos si nos mandan datos vacios
        if ($proveedores == '' || $costoVentas == '' || $proveedores == '' || $costoVentas == null ) {

            return 'se deben introducir datos';

        } else { // en caso de que no esten vacios significa que no son numericos

            return 'los datos introducidos no son numericos';
        }
    }

}
?>