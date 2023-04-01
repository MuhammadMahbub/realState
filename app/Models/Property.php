<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function relationwithPropertyType(){
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function relationwithPropertyCategory(){
        return $this->belongsTo(PropertyCategory::class,'category_id');
    }
}
