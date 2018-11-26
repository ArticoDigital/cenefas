<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'preview', 'file', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
