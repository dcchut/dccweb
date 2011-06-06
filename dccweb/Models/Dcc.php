<?php
namespace dccweb\Models;

class Dcc {
  // my age
  public static function getAge() {
    $y = date("Y") - 1991;
    $m = date("m") - 2;
    $d = date("d") - 14;

    if ($m < 0) $y--;
    elseif ($m == 0 && $d < 0) $y--;

    return $y;
  }
}