function Login(view) {
    $(".se-pre-con").fadeIn();
    if ($("#email").val() != null && $("#email").val() != "" && $("#password").val() != null && $("#password").val() != "") {
        switch (view) {
            case 0:
                $.ajax({
                    url: "/Home/Validate",
                    type: "Post",
                    data: {
                        User: $("#email").val(),
                        Password: $("#password").val(),
                    },
                    success: function (data) {
                        if (data.success == false) {
                            alert(data.message);
                            $(".se-pre-con").fadeOut("slow");
                        } else {
                            $("#view").html(data);
                            $("#user_log").html($("#nomter").val() + "(Salir)");
                            $(".se-pre-con").fadeOut("slow");
                        }
                    }
                });
                break;
            case 1:
                //$.ajax({
                //    url: "/Home/Validate",
                //    type: "Post",
                //    data: {
                //        User: $("#email").val(),
                //        Password: $("#password").val(),
                //    },
                //    success: function (data) {
                //        if (data.success == false) {
                //            alert(data.message);
                //            $(".se-pre-con").fadeOut("slow");
                //        } else {
                //            $("#view").html(data);
                //            $("#user_log").html($("#nomter").val() + "(Salir)");
                //            $(".se-pre-con").fadeOut("slow");
                //        }
                //    }
                //});
                if ($("#email").val() == "Master" && $("#password").val() == "Master") {
                    location.href = "/Administrator/Index";
                }
                break;
        }
    } else {
        alert("Debe digitar un Usuario y Contraseña para ingresar al sistema");
        $(".se-pre-con").fadeOut("slow");
    }
    
}

$(window).load(function () {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");

    //$("#email").keypress(function (e) {
    //    var code = (e.keyCode ? e.keyCode : e.which);
    //    if (code == 13) {
    //        Login();
    //    }
    //});

    //$("#password").keypress(function (e) {
    //    var code = (e.keyCode ? e.keyCode : e.which);
    //    if (code == 13) {
    //        Login();
    //    }
    //});
});

function readCookie(name) {
    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + name.replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
}