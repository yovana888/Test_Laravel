<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table='personne';

 protected $primaryKey='id';

 public $timestamps=false;


 protected $fillable =[
   'nom',
   'prenom',
   'email'

 ];

}
