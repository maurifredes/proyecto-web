<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Aqui va a ir toda la logica vinculada a los clientes
class ClientesController extends Controller
{
    public function getRegiones(){
        $regiones = array();
        $regiones[] = "I - Arica, Parinacota y Tarapacá";
        $regiones[] = "II - Antofagasta";
        $regiones[] = "III - Atacama y Coquimbo";
        $regiones[] = "IV - Valparaiso";
        $regiones[] = "V - O'Higgins";
        $regiones[] = "VI - Ñuble, Biobío y La Araucanía";
        $regiones[] = "VII - La Araucanía";
        $regiones[] = "VIII - Los Ríos y Los Lagos";
        $regiones[] = "IX - Los Lagos y Aysén";
        $regiones[] = "X - Magallanes";
        $regiones[] = "Metropolitana de Santiago";

        return $regiones;
    }
}
