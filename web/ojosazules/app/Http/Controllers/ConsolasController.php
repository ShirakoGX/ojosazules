<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
// use illimunanate\support\Facade;

class ConsolasController extends Controller
{
    public function getTipos(){
        $tipos = array(); 
        $tipos[] = "01";
        $tipos[] = "02";
        $tipos[] = "03";
        $tipos[] = "04";
        $tipos[] = "05";
        $tipos[] = "06";
        $tipos[] = "07";
        $tipos[] = "08";
        $tipos[] = "09";
        $tipos[] = "10";

        return $tipos;
    }
    public function getMedidas(){
        $medidas = array(); 
        $medidas[] = "KiloWatts";
        $medidas[] = "Watts";
        $medidas[] = "Temperatura";

        return $medidas;
    }
    public function getConsolas(){
        $consolas=Consola::all();
        return $consolas;
    }
    public function crearConsola(Request $request){
        $input = $request->all();
        $consola = new Consola();
        $consola->fecha = $input["fecha"];
        $consola->hora = $input["hora"];
        $consola->retipo = $input["tipo"];
        $consola->valor = $input["valor"];
        $consola->medida = $input["medida"];
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

