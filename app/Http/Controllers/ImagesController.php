<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    public function user_avatar($id, $size)
    {
        $user = User::findOrFail($id);

        if(is_null($user->avatar)){
            $img = Image::make('storage/users/unknown.png')->fit($size)->response();
        }elseif (strpos($user->avatar, 'http')!== false) {
            $img = Image::make($user->avatar)->fit($size)->response();
        }else{
            $avatar_path = asset('storage/users/' . $id . '/avatars/' . $user->avatar);
            $img = Image::make($avatar_path)->fit($size)->response();
        }
        return $img;


    }
}
