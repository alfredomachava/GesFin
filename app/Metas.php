<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
   protected $fillable = ['val_inicial', 'val_corrente', 'mes', 'cat_despesa_id', 'created_at', 'updated_at'];
}
