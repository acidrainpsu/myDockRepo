<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //
        // Table Name
        protected $table = 'breeds';
        // Primary Key
            public $primaryKey = 'breed_id';
        // Timestamps 
            public $timestamp = true;
}
