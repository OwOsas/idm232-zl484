<?php
function error_check(){

    if (isset($_GET["error"])){
        if($_GET["error"] == "SI_emptyInput"){
            return "SI";
        }
        elseif($_GET["error"] == "SI_usernameDoesNotExists"){
            return "SI";
        }
        elseif($_GET["error"] == "SI_wrongPwd"){
            return "SI";
        }
        elseif($_GET["error"] == "SU_emptyInput"){
            return "SU";
        }   
        elseif($_GET["error"] == "SU_invalidUsername"){
            return "SU";
        }
        elseif($_GET["error"] == "SU_usernameExist"){
            return "SU";
        }
        elseif($_GET["error"] == "SU_invalidEmail"){
            return "SU";
        }
        elseif($_GET["error"] == "SU_passwordDoNotMatch"){
            return "SU";
        }
    else{
        return "";
        }
    }
}

function error_msg(){
    if (isset($_GET["error"])){
        if($_GET["error"] == "SI_emptyInput"){
            return "Username and password cannot be empty.";
        }
        elseif($_GET["error"] == "SI_usernameDoesNotExists"){
            return "Username does not exists";
        }
        elseif($_GET["error"] == "SI_wrongPwd"){
            return "The password does not match the username.";
        }
        elseif($_GET["error"] == "SU_emptyInput"){
            return "Input cannot be empty.";
        }   
        elseif($_GET["error"] == "SU_invalidUsername"){
            return "The user name is invalid.";
        }
        elseif($_GET["error"] == "SU_usernameExist"){
            return "This username already being used.";
        }
        elseif($_GET["error"] == "SU_invalidEmail"){
            return "The email is invalid.";
        }
        elseif($_GET["error"] == "SU_passwordDoNotMatch"){
            return "The repeated password does not match.";
        }
    else{
        return "";
        }
    }
}