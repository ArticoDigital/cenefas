<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    protected $fillable = ['name', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function scopeForUser($query)
    {
        return $query->where('country_id', auth()->user()->country->id);
    }
}
