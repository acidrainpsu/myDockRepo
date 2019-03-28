<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
      // Table Name
      protected $table = 'farmers';
      // Primary Key
          public $primaryKey = 'farmer_id';
      // Timestamps 
          public $timestamp = true;
}
