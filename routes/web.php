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

Route::name('acerca')->get('/acerca', function () {
    return view('info/acerca');
});

Route::name('politicas')->get('/politicas', function () {
    return view('info/politicas');
});

Route::get('dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');

//Rutas para la navegacion del panel administrativo
//Rutas de Usuarios
Route::name('usuarios')->get('usuarios', [ControllerUsuario::class, 'usuarios']);
//Rutas de CRUD Usuario
//Agregar Usuario
Route::name('agregarU')->post('agregarU', [ControllerUsuario::class, 'agregarU']);
//Eliminar Usuario
Route::name('eliminarU')->delete('eliminarU/{id}', [ControllerUsuario::class, 'eliminarU']);
Route::name('eliminarU')->get('eliminarU/{id}', [ControllerUsuario::class, 'eliminarU']);
//Guardar Usuario
Route::name('editar')->get('editar/{id}', [ControllerUsuario::class, 'editar']);
Route::name('salvar')->put('salvar/{id}', [ControllerUsuario::class, 'salvar']);

//------------------------------------------------------------------------------------------------
//Rutas de TipoRoles
Route::name('tiporoles')->get('tiporoles', [ControllerTipo_Roles::class, 'tiporoles']);
//Rutas de CRUD TipoRoles
//Agregar TipoRoles
Route::name('agregarTR')->post('agregarTR', [ControllerTipo_Roles::class, 'agregarTR']);
//Eliminar TipoRoles
Route::name('eliminarTR')->delete('eliminarTR/{id}', [ControllerTipo_Roles::class, 'eliminarTR']);
Route::name('eliminarTR')->get('eliminarTR/{id}', [ControllerTipo_Roles::class, 'eliminarTR']);
//Guardar TipoRoles
Route::name('editarTR')->get('editarTR/{id}', [ControllerTipo_Roles::class, 'editarTR']);
Route::name('salvarTR')->put('salvarTR/{id}', [ControllerTipo_Roles::class, 'salvarTR']);

//------------------------------------------------------------------------------------------------
//Rutas de TipoCitas
Route::name('tipocitas')->get('tipocitas', [ControllerTipo_Citas::class, 'tipocitas']);
//Rutas de CRUD TipoCitas
//Agregar TipoCitas
Route::name('agregarTC')->post('agregarTC', [ControllerTipo_Citas::class, 'agregarTC']);
//Eliminar TipoCitas
Route::name('eliminarTC')->delete('eliminarTC/{id}', [ControllerTipo_Citas::class, 'eliminarTC']);
Route::name('eliminarTC')->get('eliminarTC/{id}', [ControllerTipo_Citas::class, 'eliminarTC']);
//Guardar TipoCitas
Route::name('editarTC')->get('editarTC/{id}', [ControllerTipo_Citas::class, 'editarTC']);
Route::name('salvarTC')->put('salvarTC/{id}', [ControllerTipo_Citas::class, 'salvarTC']);

//------------------------------------------------------------------------------------------------
//Rutas de Producto
Route::name('producto')->get('producto', [ControllerProducto::class, 'producto']);
//Rutas de CRUD Producto
//Agregar Producto
Route::name('agregarP')->post('agregarP', [ControllerProducto::class, 'agregarP']);
//Eliminar Producto
Route::name('eliminarP')->delete('eliminarP/{id}', [ControllerProducto::class, 'eliminarP']);
Route::name('eliminarP')->get('eliminarP/{id}', [ControllerProducto::class, 'eliminarP']);
//Guardar Producto
Route::name('editarP')->get('editarP/{id}', [ControllerProducto::class, 'editarP']);
Route::name('salvarP')->put('salvarP/{id}', [ControllerProducto::class, 'salvarP']);

//------------------------------------------------------------------------------------------------
//Rutas de Citas
Route::name('citas')->get('citas', [ControllerCitas::class, 'citas']);
//Rutas de CRUD Citas
//Agregar Citas
Route::name('agregarCi')->post('agregarCi', [ControllerCitas::class, 'agregarCi']);
//Eliminar Citas
Route::name('eliminarCi')->delete('eliminarCi/{id}', [ControllerCitas::class, 'eliminarCi']);
Route::name('eliminarCi')->get('eliminarCi/{id}', [ControllerCitas::class, 'eliminarCi']);
//Guardar Citas
Route::name('editarCi')->get('editarCi/{id}',[ControllerCitas::class, 'editarCi']);
Route::name('salvarCi')->put('salvarCi/{id}',[ControllerCitas::class, 'salvarCi']);

//------------------------------------------------------------------------------------------------
//Rutas de Carrito
Route::name('carrito')->get('carrito', [ControllerCarrito::class, 'carrito']);
//Rutas de CRUD Carrito
//Agregar Carrito
Route::name('agregarCa')->post('agregarCa', [ControllerCarrito::class, 'agregarCa']);
//Eliminar Carrito
Route::name('eliminarCa')->delete('eliminarCa/{id}', [ControllerCarrito::class, 'eliminarCa']);
Route::name('eliminarCa')->get('eliminarCa/{id}', [ControllerCarrito::class, 'eliminarCa']);
//Guardar Carrito
Route::name('editarCa')->get('editarCa/{id}',[ControllerCarrito::class, 'editarCa']);
Route::name('salvarCa')->put('salvarCa/{id}',[ControllerCarrito::class, 'salvarCa']);

//------------------------------------------------------------------------------------------------
//Rutas de Login
Route::name('login')->get('login', function () {
    return view('sesiones/login');
});
//Rutas de Registros
Route::name('registro')->get('registro', function () {
    return view('usuarios/registro');
});
Route::get('registro_u',[ControllerUsuario::class,'registro_u'])->name('registro_u');
Route::POST('registro_usuarios',[ControllerUsuario::class,'registro_usuarios'])->name('registro_usuarios');

Route::name('valida')->post('valida', [Login::class, 'valida']);
Route::name('logout')->get('logout', [Login::class, 'logout']);
Route::name('agregarCiInicio')->post('agregarCiInicio', [ControllerCitas::class, 'agregarCiInicio']);