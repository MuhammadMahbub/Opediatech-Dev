<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function Category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
