<?php

namespace App\Helpers;
use App\User;

class KeyHelper{

  public static function createKey(User $user)
  {
    $user->token_key = KeyHelper::generateKey($user->id);
    $user->save();
  }

  public static function generateKey($id)
  {
    $user = User::find($id);
    $token = $user->remember_token . $user->email . $user->id_role;
    $key = md5($token);

    return $key;
  }

  public static function checkKey($id, $key)
  {
    if($key == KeyHelper::generateKey($id)){
      return true;
    }

    return false;
  }
}
