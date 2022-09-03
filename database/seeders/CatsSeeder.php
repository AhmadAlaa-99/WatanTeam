<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cats;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cats::create(['name'=>'ثقافية']);
        Cats::create(['name'=>'علمية']);
        Cats::create(['name'=>'تقنية']);
        Cats::create(['name'=>'برمجية']);
        Cats::create(['name'=>'نفسية']);
        Cats::create(['name'=>'هندسية']);
        Cats::create(['name'=>'فنية']);
        Cats::create(['name'=>'سينمائية']);
        Cats::create(['name'=>'تاريخية']);
        Cats::create(['name'=>'رياضية']);
    }
}
