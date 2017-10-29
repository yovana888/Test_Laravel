<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\articulo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticuloFormRequest;
use DB;
use Illuminate\Support\Facades\Input; // para imagenes
class ArticuloController extends Controller
{
  public function index()
 {
         $articulos=articulo::all();
         return view('Articulos/index')->with('articulos',$articulos);
 }

 public function create()
  {
         return view("Almacen.create");

  }

  public function store (ArticuloFormRequest $request )
    {
      $articulo=new articulo;
      $articulo->categoria=$request->get('categoria');
      $articulo->stock=$request->get('stock');
      $articulo->precio=$request->get('precio');
      $articulo->nombre=$request->get('nombre');


      if (Input::hasFile('imagen')){
        $file=Input::file('imagen');
        $file->move(public_path().'/img/',$file->getClientOriginalName());
        $articulo->imagen=$file->getClientOriginalName();
      }

        $articulo->save();
        return Redirect::to('Articulos');

    }

    public function show($id)
   {
       //donde el id, es de idarticulo
       $articulos=articulo::all();
       return view('Articulos')->with('articulos',$articulos);
   }

   public function edit($id)
   {
       return view("Articulos.edit",["articulo"=>articulo::findOrFail($id)]);
   }
   public function update(ArticuloFormRequest $request,$id)
   {
       $articulo=articulo::findOrFail($id);
       $articulo->categoria=$request->get('categoria');
       $articulo->stock=$request->get('stock');
       $articulo->precio=$request->get('precio');
       $articulo->nombre=$request->get('nombre');
       if (Input::hasFile('imagen')){
         $file=Input::file('imagen');
         $file->move(public_path().'/img/',$file->getClientOriginalName());
         $articulo->imagen=$file->getClientOriginalName();
       }
       $articulo->update();
       return Redirect::to('Articulos');

   }

      public function destroy($id)
   {
     $articulo=articulo::findOrFail($id);
     $articulo->delete();
     return Redirect::to('Articulos');
   }
}
