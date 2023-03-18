<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function relationWithService()
    {
        return $this->hasMany(service::class, 'service_category_id');
    }

}
