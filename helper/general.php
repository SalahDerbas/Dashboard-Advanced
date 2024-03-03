<?php

if (!function_exists('UploadPhotoUser')) {
    function UploadPhotoUser($file , $type)
    {
        if($type == 'update')  {
            $file_name = time().$file->getClientOriginalName();
            $file->move('Profile/' , $file_name);
            $Image = env('APP_URL').'/Profile/'.$file_name;
            return $Image;
        }
        $file_name = time().$file->getClientOriginalName();
        $file->move('Profile/' , $file_name);
        $Image = env('APP_URL').'/Profile/'.$file_name;
        return $Image;
    }
}
