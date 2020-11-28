<?php

function loggedIn(){

    session_start();

    if (isset($_SESSION["userid"])) {
        // possibly logged in
        if (isset($_SESSION["type"])){
            // for all intents & purposes logged in
            header("Location: /sessionSet.html");
        }
        else {
            // something is wrong, user should log in
            // unset session vars in case session has somehow been corrupted
            session_unset();
            session_destroy();
        }
    }
    else {
        // not logged in, proceed
        // unset session vars in case session has somehow been corrupted
        session_unset();
        session_destroy();
    }

}

?>