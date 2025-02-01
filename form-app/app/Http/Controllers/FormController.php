<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function check(Request $request)
    {
        $age = $request->age ?? 0;
        $message = $age >= 18 ? 'Aprovado' : 'Reprovado';

        return redirect()->route('index')->with('message', $message);
    }
}
