<?php

namespace pasteleria\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products" 
    //explicitos en el nombre de la tabla a donde apunta el modelo

    protected $fillable = ['name', 'description' ,'subcategorie_id', 'price', 'photo_rute'];
}
