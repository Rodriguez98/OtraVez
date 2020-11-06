<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/sumar', function () {
    return view('formularios.sumar');
});

Route::get('/restar', function () {
    return view('formularios.restar');
});

Route::get('/multiplicar', function () {
    return view('formularios.multiplicar');
});

Route::post('suma', function (HttpRequest $request) {
    $suma=$request->numero_uno+$request->numero_dos;
    $request->offsetSet('suma',$suma);
    return view('resultados.suma',['suma'=>$request->suma]);
});

Route::post('resta', function (HttpRequest $request) {
    $resta=$request->numero_uno - $request->numero_dos;
    $request->offsetSet('resta',$resta);
    return view('resultados.resta',['resta'=>$request->resta]);
});

Route::post('multiplicacion', function (HttpRequest $request) {
    $multiplicacion=$request->numero_uno * $request->numero_dos;
    $request->offsetSet('multiplicacion',$multiplicacion);
    return view('resultados.multiplicacion',['multiplicacion'=>$request->multiplicacion]);
});
