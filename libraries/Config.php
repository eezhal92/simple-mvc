<?php

class Config
{

  /**
   * Mengambil value konfigurasi dari file common.php
   *
   * @param string $path
   * @return string
   */
  public static function get($path = null)
  {
    if($path) {
      $config = include __DIR__.'/../config/common.php';

      $path = explode('.', $path);

      //  var_dump($path);
      foreach ($path as $bit) {
        if(isset($config[$bit])) {
          $config = $config[$bit];
        }
      }
      
      return $config;
     }

     return false;
   }

}
