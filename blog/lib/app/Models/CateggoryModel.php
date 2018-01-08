<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateggoryModel extends Model
{
    //
    protected $table='vp_categories';
    protected $primaryKey = "cateid";
    protected $guarded=[];
}
