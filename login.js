$(document).ready(function(){
    var funcion;
    verificar_sesion();

    function verificar_sesion() {
        funcion = 'verificar_sesion';
        $.post('controllers/UsuarioController.php',{funcion},(response)=>{
            if(response != ''){
                location.href = 'vistas/cliente/cliente-inicio.php';
            }
        });
    }
    $('#form-login').submit(e => {
        let user = $('#user').val();
        let pass = $('#pass').val();
        funcion = 'login';
        $.post('controllers/UsuarioController.php', {funcion, user, pass}, (response)=>{
            if(response == 'logueado'){
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Se inicio sesión correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });
                location.href = 'vistas/cliente/cliente-inicio.php';
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Datos Incorrectos!',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
        e.preventDefault();
    });
});