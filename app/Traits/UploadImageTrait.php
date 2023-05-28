<?php 

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadImageTrait
{
    public function UploadImage(Request $request,$folderName){
        $paths = [];
        if($request->file('works')){
            foreach($request->file('works') as $img){
                $image = $img->getClientOriginalName();
                $path = $img->storeAs($folderName,$image,'abdo');
                $paths[] = $path;
            }
        }
        return $paths;
    }
    public function UploadImageProfile(Request $request,$folderName){
        $image = $request->img_profile->getClientOriginalName();
        $path = $request->img_profile->storeAs($folderName,$image,'abdo');
        return $path;
    }
}