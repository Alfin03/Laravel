<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class data extends Model
{  
        public $table = 'data';
        use HasFactory;    
        public $timestamps=false;
}