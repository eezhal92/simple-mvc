<?php require "header.php" ?>

<div class="main">
  <div class="container">
    <div id="news" class="news">
      <h2 class="section-header">Artikel</h2>
            
      <?php foreach ($posts as $post) { ?>
      <article class="news-item">
        <img src="<?php echo assets('assets/img/gambar_artikel.jpg') ?>" alt="" />
        <h3><a href="<?php echo $router->generate('post-show', ['id' => $post->id]) ?>"><?php echo $post->title ?></a></h3>
        <span class="date"><?php echo $post->created_at ?></span>
        <p>
          <?php echo $post->body ?>
        </p>
        <a href="#" class="btn btn-warning btn-round">Edit</a>
        <a href="#" class="btn btn-danger btn-round">Hapus</a>
      </article>

      <?php } ?>

    </div>
    <div class="sidebar">
      <div class="widget">
        <h2 class="section-header">Kategori</h2>
        <ul>
          <li><a href="#">Uncategorized</a></li>
          <li><a href="#">Foo Bar</a></li>
          <li><a href="#">What Else?</a></li>
        </ul>
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

<?php require "footer.php" ?>
