<?php

namespace App\Imports;

use App\Models\ExelDemo;
use Maatwebsite\Excel\Concerns\ToModel;

class ExelDemoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExelDemo([
            //
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'address' => $row[3],
        ]);
    }
}
