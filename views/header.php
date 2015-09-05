<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Foo</title>
    <link rel="stylesheet" href="<?php echo assets('assets/css/styles.css') ?>" charset="utf-8">
  </head>
  <body>

    <div class="header">
      <div class="container">
        <header>
          <h1 id="title"><a href="#">Blogku</a></h1>
          <nav id="primary-nav" class="inline">
            <ul>
              <li><a href="<?php echo $router->generate('home') ?>">Beranda</a></li>
              <li><a href="<?php echo $router->generate('about') ?>">Tentang</a></li>
              <li><a href="<?php echo $router->generate('contact') ?>">Kontak</a></li>
            </ul>
          </nav>
        </header>
      </div>
    </div>
