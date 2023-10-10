<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        try
        {
            
            $response['codrespuesta'] = '201';
            $response['mensaje'] = "asdf";
            $response['respuesta'] = 'Recepción de mensaje correcto';
        }
        catch (\Exception $e)
        {
            $response['codrespuesta'] = '200';
            $response['respuesta'] = 'Error en formato';
        }
        return json_encode($response, JSON_UNESCAPED_UNICODE);      
    }
}
