<?php

if (!function_exists('uploadImage')) {
  function uploadImage($image, $size = 10)
  {
    $imageFile = time() . '_' . $image->getClientOriginalName();

    $destination = public_path('backend/uploads');

    // $imgFile = Image::make($image->getRealPath());
    // $imgFile->resize($size, $size, function ($constraint) {
    //     $constraint->aspectRatio();
    // })->save($destination.'/'.$imageFile); // Here this code's isn't working

    $image->move($destination, $imageFile);

    return back()->with('success', 'Image has successfully uploaded.')
      ->with('fileName', $imageFile);
  }
}

if (!function_exists('removeImage')) {
  function removeImage($image)
  {
    $destination = public_path('backend/uploads/');
    unlink($destination . $image);

    return back()->with('success', 'Image has successfully removed.');
  }
}


if (!function_exists('routePrefix')) {
  function routePrefix()
  {
    return strtolower(auth()->user()->role);
  }
}