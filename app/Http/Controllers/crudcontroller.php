<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\UsuarioFormRequest;
use DB;
class crudcontroller extends Controller
{
  public function index()
 {


         $users=Usuario::all();
         return view('Usuarios/index')->with('users',$users);

 }

}
