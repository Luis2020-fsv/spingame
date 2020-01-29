<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{

    public function headings(): array {
        return [
           "Firstname","Lastname","Email", "Password", "Telephone", "Token_Count"
        ];
      }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(User::getUsers());
    }
}
