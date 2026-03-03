<?php

function convertir_estatus($p=null){
    if ($p=="1"){
        $respuesta = "Activo";
    }else{
        $respuesta = "Desactivado";
    }
    return $respuesta;
}

?>