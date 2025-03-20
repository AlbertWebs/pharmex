<?php

namespace App\Imports;

use App\Models\Expired;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Auth;



class ExpiredsImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        $total = ($row['bp_per_pack'])*($row['packs']);
        return new Expired([
            'brand_name'     => $row['brand_name'],
            'generic_name'     => $row['generic_name'],
            'pharmacological_class'    => $row['pharmacological_class'],
            'category'    => $row['category'],
            'dosage_form'     => $row['dosage_form'],
            'strength'     => $row['strength'],
            'batch_no'    => $row['batch_no'],
            'expiry_date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['expiry_date']),
            'packsize'     => $row['packsize'],
            'packs'     => $row['packs'],
            'user_id' => Auth::User()->id,
            'bp_per_pack'    => $row['bp_per_pack'],
            'total_cost'    => $total,
        ]);
    }


}
