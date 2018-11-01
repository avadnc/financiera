<?php

defined('BASEPATH') or exit('No direct script access allowed');


/* End of file formulario.php */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form id="__vtigerWebForm" name="banco" action="http://localhost/vtigercrm/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<input type="hidden" name="__vtrftk" value="sid:8693c0c8b44da03f4d7289c9689c9255fa0dc3b1,1540424755">
<input type="hidden" name="publicid" value="df63d17964f0403d377499d31a3c6ab4">
<input type="hidden" name="urlencodeenable" value="1">
<input type="hidden" name="name" value="banco">
<input type="hidden" name="cf_852" data-label="" value="">
<input type="hidden" name="cf_856" data-label="" value="">
<table>
    <tbody>
        <tr>
            <td>
                <label>Apellido*</label>
                </td>
                <td>
                    <input type="text" name="lastname" data-label="" value="" required=""></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nombre</label>
                            </td>
                            <td>
                                <input type="text" name="firstname" data-label="" value="">
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Móvil</label>
                                        </td>
                                        <td>
                                            <input type="text" name="mobile" data-label="" value="">
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Teléfono Particular</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="homephone" data-label="" value="">
                                                        </td>
                                                        </tr>
                                                            </tbody>
                                                            </table>
                                                            <input type="submit" value="Submit">
                                                            </form>
                                                            <script type="text/javascript">
                                                            window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.getElementById("__vtigerWebForm"), inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");var elemDataType = numberTypeInputs[i].getAttribute("datatype");if(val != "") {if(elemDataType == "double") {var numRegex = /^[+-]?\d+(\.\d+)?$/;}else{var numRegex = /^[+-]?\d+$/;}if (!numRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}var dateTypeInputs = document.querySelectorAll("input[type=date]");for (var i = 0; i < dateTypeInputs.length; i++) {dateVal = dateTypeInputs[i].value;var elemLabel = dateTypeInputs[i].getAttribute("label");if(dateVal != "") {var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;if(!dateRegex.test(dateVal)) {alert("For "+ elemLabel +" field please enter valid date in required format"); return false;}}}var inputElems = document.getElementsByTagName("input");var totalFileSize = 0;for(var i = 0; i < inputElems.length; i++) {if(inputElems[i].type.toLowerCase() === "file") {var file = inputElems[i].files[0];if(typeof file !== "undefined") {var totalFileSize = totalFileSize + file.size;}}}if(totalFileSize > 52428800) {alert("Maximum allowed file size including all files is 50MB.");return false;}}; }
</script>
<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script>
$('#__vtigerWebForm').on('submit', function(){
    event.preventDefault();
    

    $.ajax({
        url: 'http://localhost/financiera/index.php/r_terceros/obtenerFinanzas',
        method: 'GET',
        headers: {
        "user": "admin",
        "password":"admin",
        "idTercero":"1",
        "idFinanzas":"1"
    }
    }
    ).done(function(data){
        var formData = {  
            '__vtrftk': 'sid:8693c0c8b44da03f4d7289c9689c9255fa0dc3b1,1540424755',
            'publicid':'df63d17964f0403d377499d31a3c6ab4',
            'urlencodeenable': '1',
            'name' :'banco',
 
            'lastname'              : $('input[name=lastname]').val(),
            'cf_852'             : data['data']['saldoPromedio'],
            'cf_856'    : data['data']['ingresoPromedio']
        };
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'http://localhost/vtigercrm/modules/Webforms/capture.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        }).done(function(data){
                
                console.log(data);

        });
        console.log(data['data']['saldoPromedio']);
        console.log(data['data']['ingresoPromedio']);
        
    console.log(formData);
    });
    
});
</script>
</body>
</html>