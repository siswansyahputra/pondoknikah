<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;
    protected $table = "identity";
    public static function find()
    {
        $data = static::all();
        return $data->firstWhere('active', 'y');
    }
}
