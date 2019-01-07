<?php

namespace App\Helpers;
use App\User;
use DateTime;

class DateHelper{

  public static function DMYtoYMD($date)
  {
    return date_format(date_create_from_format('d/m/Y', $date), 'Y-m-d');
  }

  public static function YMDtoDMY($date)
  {
    return date_format(date_create_from_format('Y-m-d', $date), 'd/m/Y');
  }

  public static function YMDSubstract($a, $b)
  {
    $aa = new DateTime($a);
    $bb = new DateTime($b);
    return $bb->diff($aa);
  }
}
