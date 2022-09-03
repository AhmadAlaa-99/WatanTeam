<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run() 
{
    $user = User::create([
        'username'=> 'ahmad',
        'role'=> '1',
        'email'=> 'ahmad@gmail.com',
        'password'=> bcrypt('123456'),
        'c_password'=>bcrypt('123456'),
           ]); 
$role = Role::create(['name' => 'Admin']);

$permissions = Permission::pluck('id','id')->all();

$role->syncPermissions($permissions);

$user->assignRole([$role->id]);

$role = Role::create(['name' => 'Partner']);

$role = Role::create(['name' => 'Coache']);

$role = Role::create(['name' => 'missionary']);
$permissions = Permission::pluck('id','id')->get(
    'لوحة التحكم','الأخبار','عن الفريق',
);
$role->syncPermissions($permissions);
}
}
