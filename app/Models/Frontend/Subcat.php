<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcat extends Model
{
    use HasFactory;
    protected $fillable =[
        'cat_id',
        'name',
        'des',
        'image',
        'status'
    ];
    public function catName(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
