<?php

namespace App\Imports;

use App\Models\Webinar;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportWebinar implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Webinar([
            'namaSekolah' => $row[0],
            'alamatSekolah' => $row[1],
            'email' => $row[2],
            'namaKepalaSekolah' => $row[3],
            'notelpKapsek' => $row[4],
            'from' => 'admin',
            'jenjang' => $row[5],
            'kabupaten' => $row[6],
        ]);
    }
}
