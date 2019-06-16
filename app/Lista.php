<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model {

    // Especificando o nome verdadeiro do nosso banco, pois o laravel sempre deixa em PLURAL
    protected $table = 'lista';
    // create_at OU update_at
    public $timestamps = false;
}