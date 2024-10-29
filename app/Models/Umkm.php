<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{

    protected $table = 'umkm';

    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
