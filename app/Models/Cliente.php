<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // protected $fillable = ['name', 'lastname', 'document', 'email', 'phone'];
    protected $guarded = [];
    use HasFactory;
    
}
