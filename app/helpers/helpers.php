<?php

function comprobarAncho($mueble)
{
    if ($mueble->muebleable_type == 'App\Models\Fabricado')
        return $mueble->muebleable->ancho;
    else
        return "-";
}

function comprobarAlto($mueble)
{
    if ($mueble->muebleable_type == 'App\Models\Fabricado')
        return $mueble->muebleable->alto;
    else
        return "-";
}

function calcularPrecio($mueble)
{
    if ($mueble->muebleable_type == 'App\Models\Fabricado')
        return (( $mueble->muebleable->alto * $mueble->muebleable->ancho )) * $mueble->precio . "€";
    else
        return $mueble->precio . "€";
}