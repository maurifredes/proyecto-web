<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

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

    /**
     * Esta función va a ir a buscar todas los clientes que existen en la bd
     * y los va a retornar
     */
    public function getClientes(){
        //Equivalente a un select * from clientes
        $clientes = Cliente::all();
        return $clientes;
    }

    /**
     * Esta función va a registrar un cliente de ejemplo en la bd
     * Una Request es un objeto PHP que permite acceder a las cosas que me envian
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearCliente(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la interfaz
        //Cuando hablo de interfaz hablo de javascript
        $cliente = new Cliente();
        $cliente->nombre = $input["nombre"];
        $cliente->apellido = $input["apellido"];
        $cliente->rut = $input["rut"];
        $cliente->telefono = $input["telefono"];
        $cliente->region = $input["region"];
        $cliente->direccion = $input["direccion"];
        $cliente->correo = $input["correo"];

        $cliente->save();
        return $cliente;
    }

    //Eloquent: El administrador de BD de Laravel se llama Eloquent
    public function eliminarCliente(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //1. Ir a buscar el registro a la bd
        $cliente = Cliente::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $cliente->delete(); //DELETE FROM clientes WHERE id=1
        return "ok";
    }
}
