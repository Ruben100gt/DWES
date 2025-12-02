<?php

const ARRAY_LETRAS_DNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C',  'K', 'E'];

    function generatePassword(int $caracteres):string{

        return "Tu contraseña de $caracteres caracteres es:";
    }

    function calcularLetraDNI (int $numero):?string{
    $letra = $numero%23;
    return ARRAY_LETRAS_DNI[$letra];
    }


    function organizarImagen(array $datosImagen, string $tituloPelicula):String|bool{
        $carpetas=scandir(__DIR__);
        if(!array_search('uploaded', $carpetas)){
            mkdir(__DIR__."/uploaded");
            move_uploaded_file($datosImagen['tmp_name'],__DIR__."/uploaded/".$tituloPelicula."png");
        }else{
            move_uploaded_file($_FILES['poster']['tmp_name'], __DIR__."/uploaded/".$tituloPelicula."png");
        }

        return __DIR__."/uploaded/".$tituloPelicula."png";
    }