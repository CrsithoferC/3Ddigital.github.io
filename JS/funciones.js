$(document).ready(function(){

    $("#registro_for").validate({

        rules:{
            nombre: {
                required: true,
                minlenght: 4
            },
            contra: {
                required: true,
                minlenght: 6
            },
            correo: {
                required: true,
                email: true
            },
            telefono: {
                required: true,
                Number: true,
                minlenght: 8,
                maxlenght: 11
            },

            messages:{
                nombre: {
                    required: "El nombre de usuario es requerido",
                    minlenght: "Es necesario minimo 4 caracteres"
                },
                contra: {
                    required: "Es requerida la contraseña",
                    minlenght: "Minimo 6 caracteres"
                },
                correo:{
                    required: "El correo es Requerido",
                    email: "El correo nos es valido"
                },
                telefono:{
                    required: "El telefono es requerido",
                    email: "solo se acepta dijitos numericos",
                    minlenght: "El numero tiene que tener minimo 8 caracteres",
                    maxlenght: "El numero tiene que tener maximo de 11 caracteres"
                }
            }

        }
    });


});