<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
}
