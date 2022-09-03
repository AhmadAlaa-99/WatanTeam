<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Activity;
use App\Models\Coach;
use App\Models\Course;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Trainer;
use App\Models\Number;
class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Numbers=Number::create(
              ['name'=>'عدد الشركاء','value'=>Partner::get()->count()]
             ,['name'=>'عدد الكورسات','value'=>Course::get()->count()]
            , ['name'=>'عدد الأنشطة','value'=>Activity::get()->count()]
            , ['name'=>'عدد المدربين','value'=>Coach::get()->count()]
            , ['name'=>'عدد البرامج','value'=>Program::get()->count()]
            , ['name'=>'عدد المتدربين','value'=>User::where('role','4')->count()]
           );
    }
}
