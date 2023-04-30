<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function relationWithSubGallery()
    {
        return $this->hasMany(SubGallery::class, 'gallery_id');
    }
}
