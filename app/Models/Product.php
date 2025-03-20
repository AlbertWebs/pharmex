<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCats\Sku\HasSku;

class Product extends Model
{
    use HasFactory;
    use HasSku;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name',
        'generic_name',
        'pharmacological_class',
        'category',
        'user_id',
        'dosage',
        'strength',
        'batch_no',
        'expiry',
        'packsize',
        'packs',
        'quantity',
        'price',
        'bpperpack',
        'distribution',
        'meta',
        'UserID'
    ];

}
