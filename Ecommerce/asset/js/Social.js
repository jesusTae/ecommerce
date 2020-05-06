function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $.ajax({
        url: '/Login/Registrar',
        type: "Post",
        data: {
            username: profile.getName(),
            email: profile.getEmail(),
            password: null,
            telefono: null,
            direccion: null,
            externallogin: true
        },
        success: function (data) {
            if (data.message == 'OK') {
                if (document.cookie.length == 0 || document.cookie != "user=") {
                    document.cookie = "user=" + encodeURIComponent(profile.getName()) + "; path=/";
                    document.cookie = "email=" + encodeURIComponent(profile.getEmail()) + "; path=/";
                }
                window.location.href = '/';
            } else {
                alert(data.message);
            }
        }
    });
}

function signOut() {
    //var auth2 = gapi.getAuthInstance();
    //auth2.signOut().then(function () {
    //    console.log('User signed out.');
    //});
    document.cookie = "cart_count=; expires=@DateTime.Now; path=/;";
    document.cookie = "idcode=; expires=@DateTime.Now; path=/;";
    document.cookie = "user=; expires=@DateTime.Now; path=/;";
    document.cookie = "email=; expires=@DateTime.Now; path=/;";
    window.location.href = "/";
}

function Registrar() {
    //if ($("#password").length < 8 || $("#password").length > 16) {
    //    alert("La contraeña debe tener minimo 8 caracteres y maximo 16 caracteres");
    //} else {
    if ($("#password").val() == $("#passwordR").val()) {
        $.ajax({
            url: '/Login/Registrar',
            type: "Post",
            data: {
                username: $("#username").val(),
                nitter: $("#nitter").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                telefono: $("#telefono").val(),
                direccion: $("#direccion").val()
            },
            success: function (data) {
                if (data.success == true) {
                    if (document.cookie.length == 0 || document.cookie != "user=") {
                        document.cookie = "user=" + $("#username").val() + "; path=/";
                        document.cookie = "email=" + $("#email").val() + "; path=/";
                    }
                    window.location.href = '/';
                } else {
                    alert(data.message);
                }
            }
        });
    } else {
        $("#password").css("borderColor", "red");
        $("#passwordR").css("borderColor", "red");
        alert("Verificar la contraseña ingresada");
        //}
    }
}

function Login() {
    $.ajax({
        url: '/Login/Login',
        type: "Post",
        data: {
            email: $("#email").val(),
            password: $("#password").val()
        },
        success: function (data) {
            if (data.success == true) {
                if (document.cookie.length == 0 || document.cookie != "user=") {
                    document.cookie = "user=" + encodeURIComponent(data.user.username) + "; path=/";
                    document.cookie = "email=" + encodeURIComponent(data.user.email) + "; path=/";
                }
                window.location.href = '/';
            } else {
                alert(data.message);
            }
        }
    });
}

function checkLoginState() {
    FB.getLoginStatus(function (response) {
        console.log(response);
        statusChangeCallback(response);
    });
}

function testAPI() {

    FB.login(function (response) {
        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function (response) {
                console.log('Successful login for: ' + response.name);
                $.ajax({
                    url: '/Login/Registrar',
                    type: "Post",
                    data: {
                        username: response.name,
                        email: response.email,
                        password: null,
                        telefono: null,
                        direccion: null,
                        externallogin: true
                    },
                    success: function (data) {
                        if (data.message == 'OK') {
                            if (document.cookie.length == 0 || document.cookie != "user=") {
                                document.cookie = "user=" + encodeURIComponent(response.name) + "; path=/";
                                //document.cookie = "email=" + encodeURIComponent(response.email) + "; path=/";
                            }
                            window.location.href = '/';
                        } else {
                            alert(data.message);
                        }
                    }
                });
            })
        } else {
            console.log('Usuario no autorizado.');
        }
    }, {
            scope: 'email',
            return_scopes: true
        });

}

function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI();
    } else {
        // The person is not logged into your app or we are unable to tell.
        document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
    }
}

window.fbAsyncInit = function () {
    FB.init({
        appId: '368592664033687',
        cookie: true,
        xfbml: true,
        version: 'v3.3'
    });

    FB.AppEvents.logPageView();

};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));