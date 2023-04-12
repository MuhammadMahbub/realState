<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function relationwithPropertyType(){
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function relationwithPropertyCategory(){
        return $this->belongsTo(PropertyCategory::class,'category_id');
    }

    public function relationwithPropertySpecification(){
        return $this->hasMany(PropertySpecification::class,'property_id','id');
    }

    public function relationwithMultipleImage(){
        return $this->hasMany(MultiplePropertyImage::class,'property_id','id');
    }


    public function relationWithUser(){
        return $this->belongsTo(User::class,'role_id');
    }
    
}
