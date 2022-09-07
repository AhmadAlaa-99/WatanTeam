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
        $images=Image::create(['imageUrl'=>'1.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'2.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'3.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'4.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'5.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'6.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'7.jpg','desc'=>'media']);
        $images=Image::create(['imageUrl'=>'8.jpg','desc'=>'media']);
    }
}
