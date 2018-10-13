<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.steps.css" />
</head>

<body>
	<div class="container">

	</div>
	<div class="container">
	<div id="finanzas">
		<!-- <form action="#" class="tab-wizard vertical wizard-circle"> -->

<?php
/*************************/
/*   Inicia Formulario   */
/*************************/

$atributos = array('class' => 'finanzas',
					'method' => ''
				);

echo form_open('', $atributos);

//nombre empresa
echo form_label('Nombre de la Empresa :', 'nomEmpresa');
$data = array(
    'name' => 'nomEmpresa',
    'id' => 'nomEmpresa',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//email
echo form_label('Correo Electrónico :', 'email');
$data = array(
    'name' => 'email',
    'id' => 'email',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Rubro empresa
echo form_label('Giro de la Empresa :', 'giroEmpresa');
$data = array(
    'name' => 'giroEmpresa',
    'id' => 'giroEmpresa',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//monto solicitado
echo form_label('Monto Solicitado :', 'monto');
$data = array(
    'name' => 'monto',
    'id' => 'monto',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Representante Legal
echo form_label('Representante Legal :', 'repLegal');
$data = array(
    'name' => 'repLegal',
    'id' => 'repLegal',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Estado Civil
echo form_label('Estado Civil Representante Legal :', 'estCivil');
$data = array(
    'name' => 'estCivil',
    'id' => 'estCivil',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Nombre del Conyuge
echo form_label('Nombre Conyuge Representante Legal :', 'nomConyuge');
$data = array(
    'name' => 'nomConyuge',
    'id' => 'nomConyuge',
    'maxlength' => '50',
    'size' => '50',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Fecha Constitución
echo form_label('Fecha Constitución Empresa :', 'fechaConst');
$data = array(
    'name' => 'fechaConst',
    'id' => 'fechaConst',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'date',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Ventas Anuales
echo form_label('Ventas Anuales :', 'ventaAnual');
$data = array(
    'name' => 'ventaAnual',
    'id' => 'ventaAnual',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Costo de Ventas
echo form_label('Costo de Ventas :', 'costoVentas');
$data = array(
    'name' => 'costoVentas',
    'id' => 'costoVentas',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Utilidad Anual
echo form_label('Utilidad Anual :', 'utilidadAnual');
$data = array(
    'name' => 'utilidadAnual',
    'id' => 'utilidadAnual',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Clientes
echo form_label('Clientes :', 'clientes');
$data = array(
    'name' => 'clientes',
    'id' => 'clientes',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);
echo form_input($data);

//Inventario
echo form_label('Inventario :', 'inventario');
$data = array(
    'name' => 'inventario',
    'id' => 'inventario',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Inventario
echo form_label('Activo Circulante :', 'actCirculante');
$data = array(
    'name' => 'actCirculante',
    'id' => 'actCirculante',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Activo
echo form_label('Total Activo :', 'totalActivo');
$data = array(
    'name' => 'totalActivo',
    'id' => 'totalActivo',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Proveedores
echo form_label('Proveedores :', 'proveedores');
$data = array(
    'name' => 'totalActivo',
    'id' => 'totalActivo',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Pasivo
echo form_label('Total Pasivo :', 'totalPasivo');
$data = array(
    'name' => 'totalPasivo',
    'id' => 'totalPasivo',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Creditos Corto Plazo
echo form_label('Creditos a Corto Plazo :', 'credCortoPlazo');
$data = array(
    'name' => 'credCortoPlazo',
    'id' => 'credCortoPlazo',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Creditos Largo Plazo
echo form_label('Creditos a Largo Plazo :', 'credLargoPlazo');
$data = array(
    'name' => 'credLargoPlazo',
    'id' => 'credLargoPlazo',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);


//Bancos

//Saldo Promedio Mes 1
echo form_label('Saldo Promedio Mes 1 :', 'saldPM1');
$data = array(
    'name' => 'saldPM1',
    'id' => 'saldPM1',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);
//Saldo Promedio Mes 1
echo form_label('Saldo Promedio Mes 2 :', 'saldPM2');
$data = array(
    'name' => 'saldPM2',
    'id' => 'saldPM2',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Saldo Promedio Mes 3
echo form_label('Saldo Promedio Mes 3 :', 'saldPM3');
$data = array(
    'name' => 'saldPM3',
    'id' => 'saldPM3',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Saldo Promedio Mes 4
echo form_label('Saldo Promedio Mes 4 :', 'saldPM4');
$data = array(
    'name' => 'saldPM4',
    'id' => 'saldPM4',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Saldo Promedio Mes 5
echo form_label('Saldo Promedio Mes 5 :', 'saldPM5');
$data = array(
    'name' => 'saldPM5',
    'id' => 'saldPM5',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Saldo Promedio Mes 6
echo form_label('Saldo Promedio Mes 6 :', 'saldPM6');
$data = array(
    'name' => 'saldPM6',
    'id' => 'saldPM6',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 1
echo form_label('Total Ingresos Mes 1 :', 'ingrM1');
$data = array(
    'name' => 'ingrM1',
    'id' => 'ingrM1',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 2
echo form_label('Total Ingresos Mes 2 :', 'ingrM2');
$data = array(
    'name' => 'ingrM2',
    'id' => 'ingrM2',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 3
echo form_label('Total Ingresos Mes 3 :', 'ingrM3');
$data = array(
    'name' => 'ingrM3',
    'id' => 'ingrM3',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 4
echo form_label('Total Ingresos Mes 4 :', 'ingrM4');
$data = array(
    'name' => 'ingrM4',
    'id' => 'ingrM4',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 5
echo form_label('Total Ingresos Mes 5 :', 'ingrM5');
$data = array(
    'name' => 'ingrM5',
    'id' => 'ingrM5',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

//Total Ingresos Mes 6
echo form_label('Total Ingresos Mes 6 :', 'ingrM6');
$data = array(
    'name' => 'ingrM6',
    'id' => 'ingrM6',
    'maxlength' => '50',
    'size' => '50',
    'type' => 'text',
    'class' => 'form-control',
    'style' => '',

);

echo form_input($data);

$atributos = array('class' => 'btn btn-primary');

echo form_submit('', 'Enviar', $atributos);

echo form_close();

?>

<!--Faltantes 
    numero celular con whatsapp


-->
			<!-- </form> -->
		</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>js/jquery.steps.min.js"></script>

<script>

$(document).ready(function(){
	
	$('form.finanzas').on('submit', function(form){
		
		form.preventDefault();
			
			// var data = $(this).serializeArray();

			$.post('finanzas', $('form.finanzas').serializeArray(), function(data){
				console.log(data);
			});
		
		// $(location).attr('href', 'c_formulario/respuesta');
	});
});

</script>

</body>

</html>