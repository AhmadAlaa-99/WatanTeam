<?php 
namespace App\Traits;
use App\Models\Image;
use App\Model\Program;

Trait ImageTrait 
{
 
       public function updateImages($contact,$request)     
    {
      return 'k';

       foreach($contact->images as $img)
       {
          $img->delete();
       }
       foreach($request as $img)
       {
        $image_name='img-'.$contact->name.'.'.$img->extension();
        $img->move(public_path('/Contacts'),$image_name);
        $image=Image::create(['path'=>$image_name,'contact_id'=>'1']);
        $image->save();
       }
    }
 
}
     




