<?php

session_start();

if(isset($_SESSION['rut'])){

    session_destroy();
    print "Deslogueado con exito";
    print '<META HTTP-EQUIV=Refresh CONTENT="0; URL=login.php">';

}else{

    print "Usuario no validado";
}
