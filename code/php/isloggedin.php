<?php
session_start();
if (isset($_SESSION["usenrame"])) {            // possibly logged in
    if (isset($_SESSION["type"])){           
    
        if ($_SESSION["type"] == "user") {    // everything alright
            // there is no need to explicitly set this header,
            // but we do it for readability
            header("Location: user.php");

        }else if($_SESSION["type"] == "admin"){
            header("Location: admin.php");


        }
    }

}
session_unset();
session_destroy();


?>