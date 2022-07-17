<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'path','products_id'
    ];
    public function products(){
        return $this->belongsTo(products::class);
    }
}
