<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPersonalidad extends Controller
{
    public function show(){
        $datos=$this->mostrarJson();
        return view('personalidad',["datos"=>$datos]);
    }

    //Funcion para mostrar el formato json
    public function mostrarJson(){
        $datos=json_decode(file_get_contents('../storage/app/data/personalidad.json'),true);
        return $datos;
    }
    public function revision(Request $request){
        $contadorA=0;
        $contadorB=0;
        $contadorC=0;
        $contadorD=0;
        //Devuelve un array asociativo
       $datosFormulario=$request->all();
       //Recorremos y mostramos los resultados
        foreach($datosFormulario as $clave => $valor){
            $item=substr($clave,2);
            switch ($item) {
                case 'A':
                    //sumamos el valor
                    $contadorA+=$valor;
                    echo("Contado A: " . $contadorA . "<br>");
                    break;
                case 'B':
                    $contadorB+=$valor;
                    echo("Contado B: " . $contadorB . "<br>");

                    break;
                case 'C':
                    $contadorC+=$valor;
                    echo("Contado C: " . $contadorC . "<br>");

                    break;
                case 'D':
                    $contadorD+=$valor;
                    echo("Contado D: " . $contadorD . "<br>");
                default:
                    # code...
                    break;
            }
        }
       return view('prueba',['datosFormulario'=>$datosFormulario]);
    }
}
