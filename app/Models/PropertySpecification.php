<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySpecification extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function relationwithPropertySpecification(){
        return $this->belongsTo(Property::class,'property_id');
    }
}
