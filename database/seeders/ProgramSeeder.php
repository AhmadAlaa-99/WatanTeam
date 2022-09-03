<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i <6; $i++) {
        Program::create([
            
            'name'=>'برنامج تدريب الخريجين',
            'goals'=>'تحقيق فرص العمل',
            'topics'=>'حل مشكلة طلب الخبرة',
              'audince'=>'الطلاب الخريجين',
             'cat_id'=>'1',
             'note'=>'للطلاب الخريجين فقط',
            'imageUrl'=>'programs-1661767085',
            'active'=>'1',
        ]);
    }

    }
}
