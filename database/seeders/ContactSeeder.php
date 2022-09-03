<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Image;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $contact=Contact::create([
        'email'=>'watan@gmail.com',
        'phone'=>'963',
        'facebook'=>'www.facebook.com',
        'insta'=>'www.instagram.com',
        'twitter'=>'www.twitter.com',
        'youtube'=>'www.youtube.com',
        'telegram'=>'www.telegram.com',
        'skype'=>'www.skype.com',
        'linkedin'=>'www.linkedin.com',
     ]);
    }
}
