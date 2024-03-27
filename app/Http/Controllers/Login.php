<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo_Roles;
use App\Models\Usuarios;

class Login extends Controller
{
    public function valida(Request $request)
    {
        $email = $request->input('Email');
        $contraseña = $request->input('Contraseña');
        $consulta = Usuarios::where('Email', '=', $email)
            ->where('Contraseña', '=', $contraseña)
            ->get();
        if (count($consulta) == 0 or $consulta[0]->activo == '0') {
            return redirect('login');
        } else {

            $area = Tipo_Roles::where('ID_Role', '=', $consulta[0]->ID_Usuario)
                ->get();
            //dd($request->all());

            if ($consulta[0]->ID_Role == 1) {
                return redirect('dashboard');
            } else {
                $request->session()->put('session_ID_Usuario', $consulta[0]->ID_Usuario);
                $request->session()->put('session_name', $consulta[0]->nombre . ' ' . $consulta[0]->app . ' ' . $consulta[0]->apm);
                $request->session()->put('session_nombre', $consulta[0]->nombre);
                $request->session()->put('session_app', $consulta[0]->app);
                $request->session()->put('session_apm', $consulta[0]->apm);
                $request->session()->put('gen', $consulta[0]->gen);
                $request->session()->put('fn', $consulta[0]->fn);
                $request->session()->put('email', $consulta[0]->email);
                $request->session()->put('session_tipo', $consulta[0]->ID_Role);
                $request->session()->put('session_foto', $consulta[0]->foto);

                return redirect('dashboard');
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }
}
