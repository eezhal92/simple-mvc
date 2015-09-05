<?php

class Redirect
{

  /**
   * Redirect menuju halaman tertentu.
   *
   * @param string $location
   * @return response
   */
  public static function to($location)
  {
    if($location) {
      if(is_numeric($location)) {
        switch ($location) {
          case 404:
              header('HTTP/1.0 404 Not Found');
              exit();
            break;
        }
      }
      header('Location: ' . $location);
      exit();
    }

    return false;
  }

  /**
   * Redirect kembali ke halaman sebelumnya.
   *
   * @param array $data
   * @return response
   */
  public static function back($data = [])
  {
    if(count($data)) {
      Session::flash('error', 'sdf');
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
