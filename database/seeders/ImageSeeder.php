<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Contact;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=Image::create(['imageUrl'=>'1.jpg','contact_id'=>'1']);
        $images=Image::create(['imageUrl'=>'2.jpg','contact_id'=>'1']);
        $images=Image::create(['imageUrl'=>'3.jpg','contact_id'=>'1']);
        $images=Image::create(['imageUrl'=>'4.jpg','contact_id'=>'1']);
        $images=Image::create(['imageUrl'=>'5.jpg','contact_id'=>'1']);
    }
}
