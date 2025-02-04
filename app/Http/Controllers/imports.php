<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'GENERIC_NAME'     => $row['name'],
            'PHARMACOLOGICAL_CLASS'    => $row['title'],
            'CATEGORY'    => $row['category'],
            'DOSAGE_FORM'    => $row['dosage'],
            'STRENGTH'    => $row['strength'],
            'BATCH_NO'    => $row['batch_no'],
            'EXPIRY_DATE'    => $row['expiry'],
            'PACKSIZE'    => $row['packsize'],
            'PACKS'    => $row['packs'],
            'TOTAL_QUANTITY'    => $row['quantity'],
            'BP_PER_PACK'    => $row['bpperpack'],
            'TOTAL_COST'    => $row['price'],
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function rules(): array
    // {
    //     return [
    //         'name' => 'required',
    //         'password' => 'required|min:5',
    //         'email' => 'required|email|unique:products'
    //     ];
    // }
}
