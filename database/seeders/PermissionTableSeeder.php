<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [
'لوحة التحكم',
'البرامج',
'الأنشطة',
'المدربين',
'الكورسات',
'الشركاء',
'الأقسام',
'المستندات',
'ادارة صلاحيات الفريق',
'الأخبار',
'الفريق التعريفي',
'عن الفريق',
'الملف الاعلامي',
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}

}
}