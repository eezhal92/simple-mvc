<?php

class PostController
{

  protected $post;

  public function __construct()
  {
      $this->post = new Post;
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store()
  {
    if(!Token::match(Input::get('_token'))) {
      return Redirect::back();
    }

    $v = new Validator;

    $v->validate(Input::all(), [
        'title' => 'required|min:3',
        'body' => 'required'
    ]);

    if(!$v->passed()) {
      return Redirect::back(['key' => 'errors', 'values' => $v->errors()]);
    }

    $post = $this->post->create([
      'title' => Input::get('title'),
      'body' => Input::get('body')
    ]);

    if($post) {
      return Redirect::to('/');
    }
  }

  public function show($args)
  {
    $id = $args['id'];

    $post = $this->post->find($id);

    return view('posts.show', ['post' => $post]);
  }

}
