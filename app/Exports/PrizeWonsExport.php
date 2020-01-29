<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class PrizeWonsExport implements FromCollection, WithHeadings
{
    public function headings(): array {
        return [
            'First Name','Last Name','Email','Prize','Win','Date'
        ];
      }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query="SELECT users.firstname,users.lastname,users.email,prizes.prize_name, user_prize_won.spin_index, user_prize_won.created_at
                    FROM user_prize_won INNER JOIN users ON(user_prize_won.user_id=users.id) INNER JOIN prizes ON(user_prize_won.prize_id=prizes.id) WHERE user_prize_won.created_at <> '' ORDER BY user_prize_won.id DESC";

        $records = DB::select($query);
        return collect($records);
    }
}
