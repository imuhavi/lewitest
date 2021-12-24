<?php

if(!function_exists('resizeAndUploadImage')){
    function resizeAndUploadImage($image){
       $input['file'] = time().'_'.$image->getClientOriginalName();
        
        $destinationPath = public_path('backend/uploads');
    
        // $imgFile = Image::make($image->getRealPath());
    
        // $imgFile->resize(10, 10, function ($constraint) {
        //     $constraint->aspectRatio();
        // })->save($destinationPath.'/'.$input['file']);
    
        $image->move($destinationPath, $input['file']);
    
        return back()
            ->with('success', 'Image has successfully uploaded.')
            ->with('fileName', $input['file']);
    }
}