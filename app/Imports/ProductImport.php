<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Auth;



class ProductImport implements ToModel ,WithHeadingRow
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
            'brand_name'     => $row['brand_name'],
            'generic_name'     => $row['generic_name'],
            'pharmacological_class'    => $row['pharmacological_class'],
            'distribution'=> 'Discounted',
            'category'    => $row['category'],
            'dosage_form'     => $row['dosage_form'],
            'strength'     => $row['strength'],
            'batch_no'    => $row['batch_no'],
            'expiry'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['expiry_date']),
            'packsize'     => $row['packsize'],
            'packs'     => $row['packs'],
            'quantity'    => $row['packs'],
            'UserID' => Auth::User()->id,
            'bpperpack'    => $row['bp_per_pack'],
            'price'    => $row['total_cost'],
        ]);
    }


}
