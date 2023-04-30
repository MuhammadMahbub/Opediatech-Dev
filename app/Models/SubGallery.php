<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGallery extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function relationWithGallery()
    {
        return $this->hasOne(Gallery::class,'id','gallery_id');
    }

    public function relationWithImages()
    {
        return $this->hasMany(MultipleImage::class,'sub_gallery_id');
    }
}
