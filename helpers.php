<?php

if(!function_exists('env'))
{

  /**
   * Mengambil data dari dbcredentials.json
   *
   * @param string $key
   * @return string
   */
  function env($key)
  {
    if(!is_string($key)) {
      throw new \InvalidArgumentException;
    }

    $json = file_get_contents('env.json');
    $data = (array) json_decode($json);

    if(!array_key_exists($key, $data)) {
      throw new \ErrorException;
    }

    return $data[$key];
  }

}

if(!function_exists('dd'))
{
  /**
   * Dump kemudian die sebuah argumen. Berguna untuk debugging.
   *
   * @param mixed $arg
   * @return void
   */
  function dd($arg = ""){
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    die();
  }
}

if(!function_exists('escape'))
{
  /**
   * Escape string
   *
   * @param string $string
   * @return string
   */
  function escape($string)
  {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
  }
}

if(!function_exists('view'))
{

  /**
   * Menampilkan view
   *
   * @param string $view_path
   * @param array $data
   * @return void
   */
  function view($view_path, $data = [])
  {
    if($view_path) {
      $path = explode('.', $view_path);
    }

    $router = $GLOBALS['router'];

    foreach($data as $key => $value)
    {
      if(!is_string($key)) {
          throw new Exception("Please provide string for key of the data.");
      }

      $$key = $value;
    }

    $path = 'views/' . implode('/', $path) . '.php';

    if(!file_exists($path)) {
      throw new Exception("File not exists ini path: {$path}");
    }
    require_once $path;
  }
}

if(!function_exists('assets'))
{

  /**
   * Mengembalikan path asset public
   *
   * @param string $path
   * @return string
   */
  function assets($path)
  {
    return BASE_URL . $path;
  }
}
