<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','quantity','price','bought_day','desc'
    ];
    public function product(){
        return $this->hasOne(productsImage::class);
    }
}
