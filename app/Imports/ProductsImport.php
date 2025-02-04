<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithValidation;



class ProductsImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Product([
            'brand'     => $row['brand_name'],
            'name'     => $row['generic_name'],
            'title'    => $row['pharmacological_class'],
            'category'    => $row['category'],
        ]);
    }


}
