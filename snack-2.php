<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$access = "acceso negato";

if(strlen($name >= 3)) {

    if (strpos($mail, "@") != false && strpos($mail, ".") != false) {
        
        if (is_numeric($age)) {
            $access = "accesso consentito";
        }
    }
}

echo $access;
?>