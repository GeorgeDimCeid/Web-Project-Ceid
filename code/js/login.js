$('#submitButton').on('click', function (e) {

    e.preventDefault();
    
    var bool = true;
    
    bool = bool && $("#email")[0].checkValidity()
        && ($("#email").val().length > 0);
    bool = bool && $("#password")[0].checkValidity()
        && ($("#password").val().length > 0);
    
    if (bool) {
        var user = {
            email: $("#email").val(),
            password: $("#password").val()
        }
        const userXHR= $.ajax({
            url    : "../php/loginconnect.php",
            type   : "POST",
            data   : user,
            
           
            
        });
        userXHR.done(function(datas) {
           
            if (datas == "user") {
              console.log("geia")
              window.location.href = "../php/user.php";
            }
            else if (datas == "admin") {
                //window.location.href = "/admin/statistics.php";
                console.log("geia")

            }
            else {
                $('#wrongInput').css("display", "block") ;
                console.log("here baby");

            }
        });
        userXHR.fail(function() {
            //$('#failureModal').modal('show');//φτιαχτω μετα
            console.log("here1");
        });
    }

    else {
        //$('#wrongInput').css("display", "block");
        console.log("here2");

    }

});