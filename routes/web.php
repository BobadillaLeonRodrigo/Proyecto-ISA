<?php

use App\Http\Controllers\ControllerCarrito;
use App\Http\Controllers\ControllerCitas;
use App\Http\Controllers\ControllerProducto;
use App\Http\Controllers\ControllerTipo_Citas;
use App\Http\Controllers\ControllerTipo_Roles;
use App\Http\Controllers\ControllerUsuario;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('inicio')->get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('admin/dashboard');
});

//Rutas para la navegacion del panel administrativo
    //Rutas de Usuarios
Route::name('usuarios')->get('usuarios', [ControllerUsuario::class, 'usuarios']);
    //Rutas de CRUD Usuario
        //Agregar Usuario
        Route::name('agregar')->post('agregar', [ControllerUsuario::class, 'agregar']);
        //Eliminar Usuario
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerUsuario::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerUsuario::class, 'eliminar']);
        //Guardar Usuario
        Route::name('editar')->get('editar/{id}',[ControllerUsuario::class, 'editar']);
        Route::name('salvar')->put('salvar/{id}',[ControllerUsuario::class, 'salvar']);

//------------------------------------------------------------------------------------------------
    //Rutas de TipoRoles
Route::name('tiporoles')->get('tiporoles', [ControllerTipo_Roles::class, 'tiporoles']);


//------------------------------------------------------------------------------------------------
    //Rutas de TipoCitas
Route::name('tipocitas')->get('tipocitas', [ControllerTipo_Citas::class, 'tipocitas']);


//------------------------------------------------------------------------------------------------
    //Rutas de Producto
Route::name('producto')->get('producto', [ControllerProducto::class, 'producto']);


//------------------------------------------------------------------------------------------------
    //Rutas de Citas
Route::name('citas')->get('citas',[ControllerCitas::class,'citas']);


//------------------------------------------------------------------------------------------------
    //Rutas de Carrito
Route::name('carrito')->get('carrito',[ControllerCarrito::class,'carrito']);


//Rutas de Login
Route::name('login')->get('login', function () {
    return view('sesiones/login');
});
Route::name('valida')->post('valida', [Login::class, 'valida']);
Route::name('logout')->get('logout', [Login::class, 'logout']);
