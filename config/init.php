<?php
session_start();
/*
|--------------------------------------------------------------------------
| Setting Global Constant
|--------------------------------------------------------------------------
*/

/**
 * Path dari file yang digunakan untuk views
 */
 define('BASE_VIEW', __DIR__ . '\..\views\\');


 /**
  * Base URL dari aplikasi
  */
 $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
 define('BASE_URL', $root);
