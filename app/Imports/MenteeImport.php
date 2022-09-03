<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Mentee;
use Illuminate\Support\Str; 
use App\Models\User;

class MenteeImport implements ToCollection
{
    /**
    * @param Collection $collection
    */

    private $users;

    public function __construct()
    {
        $this->users = User::select('id','name','email')->get();
    }
    
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $row){

            $user = $this->users->where('name',$row[1])->first();

            if($key >= 2){
                Mentee::create([
                    'user_id' => $user->id ?? NULL,
                    'nim_mentee' => $row[0],
                    'nama_mentee' => $row[1],
                    'kelas_id' => $row[2],
                    'kelompok_id' => $row[3],
                    'angkatan_id' => $row[4],
                    'status_mentee' => $row[5],
                    'slug' => Str::slug($user->id . '-' . $row[1])
                ]);
            } 
            
        }
    }
}
