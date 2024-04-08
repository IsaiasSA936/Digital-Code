// funcion para visualizar en campo password
$(document).ready(function() {
    $('#togglePassword').click(function() {
        const tipo = $('#password').attr('type') === 'password' ? 'text' : 'password';
    $('#password').attr('type', tipo);
    $(this).text(tipo === 'password' ? 'Mostrar' : 'Ocultar');
});
});