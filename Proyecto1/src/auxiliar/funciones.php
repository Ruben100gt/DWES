<?php

const ARRAY_LETRAS_DNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C',  'K', 'E'];

    function generatePassword(int $caracteres):string{

        return "Tu contraseña de $caracteres caracteres es:";
    }

    function calcularLetraDNI (int $numero):?string{
    $letra = $numero%23;
    return ARRAY_LETRAS_DNI[$letra];
    }