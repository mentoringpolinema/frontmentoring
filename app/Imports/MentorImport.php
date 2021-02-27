<?php

namespace App\Imports;

use App\Models\Mentor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MentorImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $row ){
            // if($key >= 2){
                Mentor::create([
                    'nama_mentor' => $row[0],
                    'email_mentor' => $row[1],
                    'alamat_mentor' => $row[2],
                    'notelp_mentor' => $row[3],
                    'status_mentor' => $row[4]
                ]);
            // }
        }
    }
}
