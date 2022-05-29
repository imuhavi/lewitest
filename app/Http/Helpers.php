<?php

use App\Models\Category;
use Illuminate\Support\Str;

if (!function_exists('uploadImage')) {
  function uploadImage($image, $size = 100)
  {
    $ext = $image->getClientOriginalExtension();
    $imageFile = time() . '_' . Str::random() . '.' . $ext;
    $destination = public_path('backend/uploads');

    if ($ext == 'pdf') {
      $image->move($destination, $imageFile);
    } else {
      $imgFile = Image::make($image->getRealPath());
      $imgFile->resize($size, $size, function ($constraint) {
        $constraint->aspectRatio();
      })->save($destination . '/' . $imageFile);
    }

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

if (!function_exists('hasFile')) {
  function hasFile($file)
  {
    if (!empty($file) && file_exists(public_path('backend/uploads/' . $file))) {
      return true;
    }
    return false;
  }
}

if (!function_exists('set_env')) {
  function set_env(string $key, string $value, $env_path = null)
  {
    $value = preg_replace('/\s+/', '', $value); //replace special ch
    $key = strtoupper($key); //force upper for security
    $env = file_get_contents(isset($env_path) ? $env_path : base_path('.env')); //fet .env file
    $env = str_replace("$key=" . env($key), "$key=" . $value, $env); //replace value
    /** Save file eith new content */
    $env = file_put_contents(isset($env_path) ? $env_path : base_path('.env'), $env);
  }
}

if (!function_exists('getCategories')) {
  function getCategories()
  {
    return Category::whereType('Deleteable')->orderBy('updated_at', 'desc')->get();
  }
}