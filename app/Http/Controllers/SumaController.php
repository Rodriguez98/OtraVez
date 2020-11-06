<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function suma($n1, $n2)
    {
        $suma = $n1 + $n2;
        $message = "La suma es $suma";
        return response()->json($message, 200);
    }
}
