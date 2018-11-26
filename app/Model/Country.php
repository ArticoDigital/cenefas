<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

}
