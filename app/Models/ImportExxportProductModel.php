<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportExxportProductModel extends Model
{
    use HasFactory;
    protected $table = 'import_export_product';
    protected $guarded = [];

    public function productAttributes()
    {
        return $this->belongsTo(ProductAttributesModel::class, 'product_attributes_id', 'id');
    }

}
