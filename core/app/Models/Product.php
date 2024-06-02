<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function review()
    {
        return $this->hasMany(ProductReview::class,);
    }

    public function tier()
    {
        return $this->belongsTo(Tier::class,);
    }


}
