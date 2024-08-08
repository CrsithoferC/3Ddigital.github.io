function Editar(arreglo) {
    cadena = arreglo.split(',');
    $('#ID_').val(cadena[0].trim());
    $('#nombre_').val(cadena[1].trim());
    $('#numero_').val(cadena[2].trim());
    $('#Respuesta_').val(cadena[3].trim()); // Aquí aseguramos que no hay espacios en blanco
    $('#comentarios_').val(cadena[4].trim());
    $('#fecha_').val(cadena[5].trim());
}

$('#editar_adm').click(function() {
    var recolec = $('#for_adm').serialize();
    $.ajax({
        url: 'adm_mod.php',
        type: 'POST',
        data: recolec,
        success: function(variable) {
            $('#adm').load('Pclientes.php #adm');
            $('#editar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }
    });
});

$('#agg_adm').click(function() {
    var recolec = $('#for_agg').serialize();
    $.ajax({
        url: 'adm_agg.php',
        type: 'POST',
        data: recolec,
        success: function(variable) {
            $('#adm').load('Pclientes.php #adm');
            $('#agregar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();


            $('#adm_nombre').val("");
            $('#adm_numero').val("");
            $('#adm_comentarios').val("");
            $('#adm_fecha').val("");

        }
    });
});

function Eliminar(arreglo) {
    var cadena = arreglo.split(',');
    $('#id_eli').val(cadena[0].trim());
    $('#nombre_eli').val(cadena[1].trim());
    document.getElementById("id_eli_label").textContent =  'ID: ' +cadena[0];
    document.getElementById("u_eli").textContent =  'nombre: ' +cadena[1];
}

$('#eli_').click(function() {
    var recolec = $('#enviar_eli').serialize();
    console.log("Datos a enviar: ", recolec); // Mostrar los datos que se van a enviar
    $.ajax({
        url: 'adm_eliminar.php',
        type: 'POST',
        data: recolec,
        success: function(response) {
            console.log("Respuesta del servidor: ", response); // Mostrar la respuesta del servidor
            $('#adm').load('Pclientes.php #adm');
            $('#borrar').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }
    });
});

