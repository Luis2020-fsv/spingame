<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class TranzactionsExport implements FromCollection, WithHeadings
{

    public function headings(): array {
        return [
            'User Email','Transaction ID','Amount Due','Transaction Fee','Created At'
        ];
      }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $records = DB::table('token_buy_history')->select('user_email','txref','amountsettledforthistransaction','appfee','created_at')
        ->orderBy('id', 'asc')->get()->toArray();

        return collect($records);
    }
}
