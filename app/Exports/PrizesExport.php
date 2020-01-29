<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class PrizesExport implements FromCollection, WithHeadings
{
    public function headings(): array {
        return [
            'Prize_Name','Prize_Cost','Description','Start_Time','Expire_Time','Winners_Jackpot','Winners_N500', 'Winners_Free_Token',
            'Winners_Half_Token', 'Winners_Mystery_Prize', 'Winners_Free_Spin', 'Winners_Cash', 'Cash_Price', 'Mystery_Prize'
        ];
      }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $records = DB::table('prizes')->select('prize_name','prize_cost','description','start_time','expire_time','winners_jackpot','winners_n500', 'winners_free_token',
                                                'winners_half_token', 'winners_mystery_prize', 'winners_free_spin', 'winners_cash', 'cash_price', 'mystery_prize')
                                                ->orderBy('id', 'asc')->get()->toArray();
        return collect($records);
    }
}
