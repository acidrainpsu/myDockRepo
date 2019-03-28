<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cowbreeder extends Model
{
    //
        //
        // Table Name
        protected $table = 'cowbreeders';
        // Primary Key
            public $primaryKey = 'c_id';
        // Timestamps 
            public $timestamp = true;
}
