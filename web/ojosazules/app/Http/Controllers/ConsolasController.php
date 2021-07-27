<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
// use illimunanate\support\Facade;

class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas = array(); 
        $marcas[] = "Huawei";
        $marcas[] = "Samsung";
        $marcas[] = "Xiaomi";
        $marcas[] = "Motorola";
        $marcas[] = "Apple";

        return $marcas;
    }
    public function getConsolas(){
        $consolas=Consola::all();
        return $consolas;
    }
    public function crearConsola(Request $request){
        $input = $request->all();
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];
        $consola->save();
        return $consola;
    }
    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $consola = Consola::findOrFail($id);
        $consola->delete();
        return "ok";
    }

}

