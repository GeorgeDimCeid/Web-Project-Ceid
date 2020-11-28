<?php

function authenticate($type){

    session_start();

    if (isset($_SESSION["email"])) {            
               
            if ($_SESSION["type"] == $type) {    
                
                header('HTTP/2 200 OK');
            }
            else {                               // unauthorised access
                echo '<script>alert("Λυπόμαστε, αλλά δεν έχετε πρόσβαση στη σελίδα που ζητήσατε. Error 401 ")</script>';
                session_unset();
                session_destroy();
                header("Location: /login.php");
                
            }
        }
        
        
    
    else {                                       // not logged in
        // in case session has somehow been corrupted
        session_unset();
        session_destroy();
        header("Location: /login.php");
    }

}


?>