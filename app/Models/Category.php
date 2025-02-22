<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{


    protected $fillable = ['name', 'slug'];

    public function products(): hasMany
    {
        return $this->hasMany(Product::class);
    }
}
