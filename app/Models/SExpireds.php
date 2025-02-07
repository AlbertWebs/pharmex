<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expired extends Model
{
    protected $fillable = [
        'brand_name',
        'generic_name',
        'pharmacological_class',
        'category',
        'dosage_form',
        'strength',
        'batch_no',
        'expiry_date',
        'packsize',
        'packs',
        'total_quantity',
        'total_cost',
        'bp_per_pack'
    ];
}
