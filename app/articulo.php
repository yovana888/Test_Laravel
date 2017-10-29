<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
  protected $table='articulo';

 protected $primaryKey='id';

 public $timestamps=false;


 protected $fillable =[
   'nombre',
   'precio',
   'stock',
   'imagen',
   'categoria'

 ];
}
