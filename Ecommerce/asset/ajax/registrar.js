$(document).ready(function(){
    $('#BtnRegistrar').on('click',function(){

        var username    = $('[name="username"]').val();
        var nitter      = $('[name="nitter"]').val();
        var email       = $('[name="email"]').val();
        var password    = $('[name="password"]').val();
        var passwordR   = $('[name="passwordR"]').val();
        var telefono    = $('[name="telefono"]').val();
        var direccion   = $('[name="direccion"]').val();

        if(username=="")
        {
            alertify.error('Digite el Nombre completo');
            $('[name="username"]').focus();
            return false;
        }

        if(nitter=="")
        {
            alertify.error('Digite el Numero de identificacion');
            $('[name="nitter"]').focus();
            return false;
        }

        if(email=="")
        {
            alertify.error('Digite el Correo electronico');
            $('[name="email"]').focus();
            return false;
        }

        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if(!regex.test($('[name="email"]').val().trim())){
            alertify.error('Digite un correo valido');
            $('[name="email"]').focus();
            return false;
        }

        if(password=="")
        {
            alertify.error('Digite la Contraseña');
            $('[name="password"]').focus();
            return false;
        }

        if(passwordR=="")
        {
            alertify.error('Digite Repetir Contraseña');
            $('[name="passwordR"]').focus();
            return false;
        }

        if(password != passwordR)
        {
            alertify.error('Contraseña no coinciden');
            return false;
        }

        if(telefono=="")
        {
            alertify.error('Digite el Telefono');
            $('[name="telefono"]').focus();
            return false;
        }

        if(direccion=="")
        {
            alertify.error('Digite la Direccion');
            $('[name="direccion"]').focus();
            return false;
        }

        var formData = new FormData();
        formData.append('username',username );
        formData.append('nitter',nitter );
        formData.append('email',email );
        formData.append('password',password );
        formData.append('passwordR',passwordR );
        formData.append('telefono',telefono );
        formData.append('direccion',direccion );

        $.ajax({
            type : "POST",
            url  : urlRegistrar,
            dataType : "JSON",
            data : formData,
            contentType: false,
            processData: false,
            success: function(data){
                if(data==0)
                {
                    alertify
                        .alert("Mensaje!","<h3 class='text-center'>Registro exitoso.</h3>", function(){
                        location.reload();
                    });
                }else{
                    alertify
                        .alert("Mensaje!","<h3 class='text-center'>Este usuario ya se encuentra registrado.</h3>", function(){
                    });
                }
            }
        });
        return false;

    });

});