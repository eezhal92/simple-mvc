<?php

class HomeController
{

  public function index($args)
  {
    $post = new Post;
    $posts = $post->all();

    return view('home', ['posts' => $posts]);
  }

  public function contact()
  {
    $printer = new Printer("Canon");

    return view('foo', ['nama' => 'Seijuuro', 'printerku' => $printer]);
  }

}
