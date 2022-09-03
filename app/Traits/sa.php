<?php 
namespace App\Traits;
use App\Models\Image;
use App\Models\Contact;

Trait ImagesTrait 
{
    public function storeImages($contact,$request)     
    {
       foreach($request as $img)
       {
         
        $image_name=md5(microtime()).'_'.'.'.$img->extension();
        $img->move(public_path('/Contacts'),$image_name);
        $image=Image::create(['path'=>$image_name,'project_id'=>$contact->id]);
        $image->save();
       }
    }
       public function updateImages($contact,$request)     
    {

       foreach($contact->images as $img)
       {
          $img->delete();
       }
       foreach($request as $img)
       {
        $image_name=md5(microtime()).'_'.'.'.$img->extension();
        $img->move(public_path('/Contacts'),$image_name);
        $image=Image::create(['path'=>$image_name,'project_id'=>$contact->id]);
        $image->save();

       }
    }
}


