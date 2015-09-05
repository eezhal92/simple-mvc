<?php require BASE_VIEW . "header.php" ?>

<div class="main">
  <div class="container">
    <div id="news" class="news">

      <article class="news-content">
        <h1 class="title"><?php echo $post->title ?></h1>
        <div class="meta">
          <span class="date">Published: September 1, 2015</span>
        </div>
        <img src="<?php echo assets('assets/img/gambar_konten_artikel.jpg') ?>" alt="" />

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </article>

    </div>
    <div class="sidebar">
      <div class="widget">
        <h2 class="section-header">Tambah Post</h2>
        <a href="<?php echo $router->generate('post-create')?>" class="btn btn-primary">Tambah</a>
      </div>

      <div class="widget">
        <h2 class="section-header">Sosial</h2>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<!-- Body End -->

<?php require BASE_VIEW . "footer.php" ?>
