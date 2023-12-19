<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributesModel extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(ProductsModel::class, 'product_id', 'id');
    }
}
