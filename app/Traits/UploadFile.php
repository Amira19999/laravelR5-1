<?php

namespace App\Traits;

trait UploadFile
{
    public function upload($imagFile, $Path){
        $imgExt = $imagFile->getClientOriginalExtension();
        $fileName = time() . '.' .  $imgExt;
        $imagFile -> move($Path, $fileName);
        return  $fileName;
    }
    
}
