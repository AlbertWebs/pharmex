<?php

namespace App\Exports;

use App\Models\OrderProducts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderProducts::all();
    }

    public function headingRow(): int
    {
        return 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "TAX", "TOTAL", "PRODUCT ID", "ORDERID","QTY","DATE","DATEUPDATED"];
    }
}
