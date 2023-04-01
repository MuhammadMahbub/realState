<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function relationwithPropertyType(){
        return $this->hasOne(PropertyType::class,'id', 'property_type_id');
    }

    public function relationwithPropertyCategory(){
        return $this->hasOne(PropertyCategory::class,'id', 'category_id');
    }
}
