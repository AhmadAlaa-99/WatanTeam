<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'name'=>'فريق وطن',
            'about'=>'
            فريق وطني تطوعي متخصص في التدريب يضم عدداً من المدربين والمدربات، نسعى لنشر ثقافة التدريب التطوعي  ، وتقديم خدمات تدريبية احترافية تسهم في تحقيق رؤية 2030'
            ,
            'mession'=>'
             تقديم تدريب احترافي من خلال استخدام اساليب تدريبيه نوعيه لتنميه مهارات وقدرات الفرد في كافة المجالات المجتمعية'
             ,
            'vision'=>'أن نكون فريقا رائدا في التدريب الوطني التطوعي الاحترافي',
            'values'=>'الاخلاص- التجدد- التعاون - المبادرة-  الاتقان- المواطنة - الصادقة - الالتزام  ',
            'teamLeader'=>'عبد الله محمد',
            'logoUrl'=>'TeamLogo.jpg'
        ]);
    }
}
