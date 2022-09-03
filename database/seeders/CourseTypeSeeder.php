<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseType;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseType::create(['name'=>'علمي']);
        CourseType::create(['name'=>'ثقافي ']);
        CourseType::create(['name'=>'اجتماعي']);
        CourseType::create(['name'=>'توعوي']);
        CourseType::create(['name'=>'تقني']);
        CourseType::create(['name'=>'برمجي']);
        CourseType::create(['name'=>'ديني']);
    }
}
