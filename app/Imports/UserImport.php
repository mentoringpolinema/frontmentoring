<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);

        foreach ($collection as $key => $row){

            if($key >= 2){
                User::create([
                    'name' => $row[1],
                    'role' => "Mentee",
                    'email' => $row[0]."@student.polinema.ac.id",
                    'password' => Hash::make($row[0])
                ]);
            } 
            
        }
    }
}
