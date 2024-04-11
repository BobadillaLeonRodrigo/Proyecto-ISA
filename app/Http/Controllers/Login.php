<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\DB;
use App\Models\Tipo_Roles;
use App\Models\Usuarios;

class Login extends Controller
{
    public function valida(Request $request)
    {
        $consulta = Usuarios::where('Email', $request->Email)->first();

        if ($consulta && Hash::check($request->Contraseña, $consulta->Contraseña)) {
            Session::put('sessiontipo', $consulta->ID_Role);
            Session::put('session_ID_Usuario', $consulta->ID_Usuario);
            if (Session::get('sessiontipo') == 1) {
                return redirect()->route('dashboard');
            } elseif (Session::get('sessiontipo') == 2) {
                return redirect()->route('inicio');
            }
        } else {
            Session::flash('mensaje', "El usuario o la contraseña no son válidos");
            return view('sesiones/login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
