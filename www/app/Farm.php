<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    //
      // Table Name
      protected $table = 'farms';
      // Primary Key
          public $primaryKey = 'farm_id';
      // Timestamps 
          public $timestamp = true;
}
