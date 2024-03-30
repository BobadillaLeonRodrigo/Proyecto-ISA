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
    //Rutas de CRUD TipoRoles
        //Agregar TipoRoles
        Route::name('agregar')->post('agregar', [ControllerTipo_Roles::class, 'agregar']);
        //Eliminar TipoRoles
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerTipo_Roles::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerTipo_Roles::class, 'eliminar']);
        //Guardar TipoRoles
        Route::name('editarTR')->get('editarTR/{id}',[ControllerTipo_Roles::class, 'editarTR']);
        Route::name('salvarTR')->put('salvarTR/{id}',[ControllerTipo_Roles::class, 'salvarTR']);

//------------------------------------------------------------------------------------------------
    //Rutas de TipoCitas
Route::name('tipocitas')->get('tipocitas', [ControllerTipo_Citas::class, 'tipocitas']);
    //Rutas de CRUD TipoCitas
        //Agregar TipoCitas
        Route::name('agregar')->post('agregar', [ControllerTipo_Citas::class, 'agregar']);
        //Eliminar TipoCitas
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerTipo_Citas::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerTipo_Citas::class, 'eliminar']);
        //Guardar TipoCitas
        Route::name('editarTC')->get('editarTC/{id}',[ControllerTipo_Citas::class, 'editarTC']);
        Route::name('salvarTC')->put('salvarTC/{id}',[ControllerTipo_Citas::class, 'salvarTC']);

//------------------------------------------------------------------------------------------------
    //Rutas de Producto
Route::name('producto')->get('producto', [ControllerProducto::class, 'producto']);
    //Rutas de CRUD Producto
        //Agregar Producto
        Route::name('agregar')->post('agregar', [ControllerProducto::class, 'agregar']);
        //Eliminar Producto
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerProducto::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerProducto::class, 'eliminar']);
        //Guardar Producto
        Route::name('editarP')->get('editarP/{id}',[ControllerProducto::class, 'editarP']);
        Route::name('salvarP')->put('salvarP/{id}',[ControllerProducto::class, 'salvarP']);

//------------------------------------------------------------------------------------------------
    //Rutas de Citas
Route::name('citas')->get('citas',[ControllerCitas::class,'citas']);
    //Rutas de CRUD Citas
        //Agregar Citas
        Route::name('agregar')->post('agregar', [ControllerCitas::class, 'agregar']);
        //Eliminar Citas
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerCitas::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerCitas::class, 'eliminar']);
        //Guardar Citas
        Route::name('editarCi')->get('editarCi/{id}',[ControllerCitas::class, 'editarCi']);
        Route::name('salvarCa')->put('salvarCa/{id}',[ControllerCitas::class, 'salvarCa']);

//------------------------------------------------------------------------------------------------
    //Rutas de Carrito
Route::name('carrito')->get('carrito',[ControllerCarrito::class,'carrito']);
    //Rutas de CRUD Carrito
        //Agregar Carrito
        Route::name('agregar')->post('agregar', [ControllerCarrito::class, 'agregar']);
        //Eliminar Carrito
        Route::name('eliminar')->delete('eliminar/{id}', [ControllerCarrito::class, 'eliminar']);
        Route::name('eliminar')->get('eliminar/{id}', [ControllerCarrito::class, 'eliminar']);
        //Guardar Carrito
        Route::name('editarCa')->get('editarCa/{id}',[ControllerCarrito::class, 'editarCa']);
        Route::name('salvarCa')->put('salvarCa/{id}',[ControllerCarrito::class, 'salvarCa']);

//------------------------------------------------------------------------------------------------
    //Rutas de Login
Route::name('login')->get('login', function () {
    return view('sesiones/login');
});
Route::name('valida')->post('valida', [Login::class, 'valida']);
Route::name('logout')->get('logout', [Login::class, 'logout']);
