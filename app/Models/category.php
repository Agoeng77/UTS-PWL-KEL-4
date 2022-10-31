<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['Headset', 'Mouse', 'Keyboard'];
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }
}
