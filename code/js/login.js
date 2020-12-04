$('#submitButton').on('click', function (e) {

    e.preventDefault();
    
    var bool = true;
    
    bool = bool && $("#username")[0].checkValidity()
        && ($("#username").val().length > 0);
    bool = bool && $("#password")[0].checkValidity()
        && ($("#password").val().length > 0);
    
    if (bool) {
        var user = {
            username: $("#username").val(),
            password: $("#password").val()
        }
        const userXHR= $.ajax({
            url    : "../php/loginconnect.php",
            type   : "POST",
            data   : user,
            
           
            
        }).done(function(datas) {
           console.log(datas);
            if (datas == "user") {
              console.log("geia")
              window.location.href = "../php/user.php";
            }
            else if (datas == "admin") {
                //window.location.href = "/admin/statistics.php";
                console.log("geia")

            }
            else {
                console.log($('#wrongInput').css("display", "block"));
                console.log("here baby");
                $('#wrongInput').css("display", "block !important");

            }
        }).fail(function() {
            $('#failureModal').modal('show');//φτιαχτω μετα
            console.log("here1");
        });
    }

    else {
        $('#wrongInput').css("display", "block");
        console.log("here2");

    }

});