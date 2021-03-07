<?php

namespace App\Exports;

use App\Models\Mentor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MentorExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mentor::all();
    }
    public function map($data_mentor): array
    {
        return [
            $data_mentor->nama_mentor,
            $data_mentor->email_mentor,
            $data_mentor->notelp_mentor,    
            $data_mentor->alamat_mentor
        ];
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'No Telp',
            'Alamat',
        ];
    }
}
