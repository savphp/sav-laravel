<?php

namespace SavLaravel;

class Base {

  static public function Install ($sav, $ctx, $opts)
  {
    static $plugins = array();
    $cls = get_called_class();
    if (!isset($plugins[$cls])) {
      $plugins[$cls] = array();
    }
    $arr = &$plugins[$cls];
    if (in_array($ctx, $arr)) {
      return;
    }
    $arr[] = $ctx;
    static::bind($sav, $ctx, $opts);
  }
}
