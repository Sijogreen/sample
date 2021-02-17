<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','sku','description','price'
    ];    

    public function productdetails()
    {
        return $this->hasOne('App\Models\Productdetails','productd_id');
    }

    public function productdetail()
    {
        return $this->hasMany('App\Models\Productdetails','productd_id');
    }
    

    
}
