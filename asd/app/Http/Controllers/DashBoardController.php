<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        //panel de tablas
        $cons_user = User::count();
        $cons_usuario = Usuario::count();

        //numeros diarios
        $cons_usuario = Usuario::all('name');

        $posts=Usuario::where('name')->get();

        return view('dashboard',compact('cons_user'));
    }
}
