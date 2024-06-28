<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection

    */

    public function headings():array{
        return[
            'id',
            'name',
            'email',
            'phone_number',
            'dob',
            'created_at',
            'updated_at' 
        ];
    } 
    public function collection()
    {
        return Employee::all();
    }
}
