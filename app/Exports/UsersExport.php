<?php

namespace App\Exports;

use App\Models\User as ModelsUser;

use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsUser::all();
    }
}
