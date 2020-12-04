$(() => {

        $("#fname_error_message").hide();
        $("#sname_error_message").hide();
        $("#email_error_message").hide();
        $("#password_error_message").hide();
        $("#password_error_message1").hide();
        $("#password_error_message2").hide();
        $("#password_error_message3").hide();
        $("#password_error_message4").hide();
        $("#username_error_message").hide();
        $("#password_error_message5").hide();

        




        var error_fname = false;
        var error_sname = false;
        var error_email = false;
        var error_password = false;
        var error_username = false;

       

        function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#name").val();
            if (pattern.test(fname) && fname !== '') {
                $("#fname_error_message").hide();
                $("#name").css("border-bottom", "2px solid #34F458");
            } else {
                $("#fname_error_message").html("Should contain only Characters");
                $("#fname_error_message").show();
                $("#name").css("border-bottom", "2px solid #F90A0A");
                error_fname = true;
            }
        }
        function check_username() {
            var pattern = /^[a-zA-Z0-9]*$/;
            var fname = $("#username").val();
            if (pattern.test(fname) && fname !== '') {
                $("#username_error_message").hide();
                $("#username").css("border-bottom", "2px solid #34F458");
            } else {
                $("#username_error_message").html("Should contain only Characters and numbers");
                $("#username_error_message").show();
                $("#username").css("border-bottom", "2px solid #F90A0A");
                error_username = true;
            }
        }

        function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#lastname").val();
            if (pattern.test(sname) && sname !== '') {
                $("#sname_error_message").hide();
                $("#lastname").css("border-bottom", "2px solid #34F458");
            } else {
                $("#sname_error_message").html("Should contain only Characters");
                $("#sname_error_message").show();
                $("#lastname").css("border-bottom", "2px solid #F90A0A");
                error_fname = true;
            }
        }

        function check_password() {

            var password_length = $("#password").val().length;
            var pass=$("#password").val();
            if (password_length < 8  ) {
                $("#password_error_message").html("Atleast 8 Characters");
                $("#password_error_message").show();
                $("#passsword").css("border-bottom", "2px solid #F90A0A");
                error_password = true;


            }else{
                $("#password_error_message").hide();

            }
            if (pass.search(/[A-Z]/) === -1 ) {
                console.log("hello");
                $("#password_error_message1").html("Atleast 1 Uppercase Character");
                $("#password_error_message1").show();
                $("#passsword").css("border-bottom", "2px solid #F90A0A");
                error_password = true;


            }else{
                $("#password_error_message1").hide();

            }
            if (pass.search(/[!\@\#\%\^\&\*\(\)\_\-\+\=\<\>\,\?]/)  === -1 ) {
                $("#password_error_message2").html("\nAtleast 1 Special Character");
                $("#password_error_message2").show();
                $("#passsword").css("border-bottom", "2px solid #F90A0A");
                error_password = true;


            }else{
                $("#password_error_message2").hide();
            }
            
            
            
            
            
            if(error_password == false) {
                $("#password").css("border-bottom", "2px solid #34F458");
            }
        }
       

        function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
                $("#email_error_message").hide();
                $("#email").css("border-bottom", "2px solid #34F458");
            } else {
                $("#email_error_message").html("Invalid Email");
                $("#email_error_message").show();
                $("#email_error_message").fadeIn(3000);
                $("#email").css("border-bottom", "2px solid #F90A0A");
                error_email = true;
            }
        }

        $("#submitButton").on('click', (e) => {
                {
                    $("#fname_error_message").hide();
                    $("#sname_error_message").hide();
                    $("#email_error_message").hide();
                    $("#password_error_message").hide();
                    $("#password_error_message1").hide();
                    $("#password_error_message2").hide();
                    $("#password_error_message3").hide();
                    $("#password_error_message4").hide();
                    $("#password_error_message5").hide();

                    


                    e.preventDefault();

                    error_fname = false;
                    error_sname = false;
                    error_email = false;
                    error_password = false;
                    error_username=false;

                    check_fname();
                    check_sname();
                    check_email();
                    check_password();
                    check_username();

                    if (error_fname === false && error_sname === false && error_email === false && error_password === false ) {
                        


                        var user = {
                            firstname: $("#name").val(),
                            lastname: $("#lastname").val(),
                            email: $("#email").val(),
                            password: $("#password").val(),
                            username: $("#username").val()
                        }


                
                        const userXHR= $.ajax({
                            url    : "../php/signinconnect.php",
                            type   : "POST",
                            data   : user,
                            
                           
                            
                        }).done(function(datas) {
                            console.log(datas);
                            if (datas == "ok") {
                              
                              window.location.href = "../php/user.php";
                            }
                            else if (datas == "idtaken") {
                                //window.location.href = "/admin/statistics.php";
                                $("#password_error_message3").show();

                                console.log("geia");
                
                            }
                            else if (datas == "usernametaken") {
                                //window.location.href = "/admin/statistics.php";
                                $("#password_error_message5").show();

                                console.log("geia soyyyyy");
                
                            }
                            else {
                                $("#password_error_message3").show();//φτιαχτω μετα
                                console.log("here2");

                
                            }
                        }).fail(function() {
                            $("#password_error_message3").show();//φτιαχτω μετα
                            console.log("here1");
                        });






                        
                    } else {
                        console.log("Please Fill the form Correctly");
                        return false;
                    }


                }
            });
    });