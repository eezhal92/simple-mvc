<?php require "header.php" ?>

<div class="main">
  <div class="container">
    <div id="news" class="news">
      <h2 class="section-header">Artikel</h2>

      <?php if(Session::exists('success')) { ?>
          <div class="alert alert-success">
            <?php  echo Session::flash('success') ?>
          </div>
      <?php } ?>

      <?php foreach ($posts as $post) { ?>
      <article class="news-item">
        <img src="<?php echo assets('assets/img/gambar_artikel.jpg') ?>" alt="" />
        <h3><a href="<?php echo $router->generate('post-show', ['id' => $post->id]) ?>"><?php echo $post->title ?></a></h3>
        <span class="date"><?php echo $post->created_at ?></span>
        <p>
          <?php echo $post->body ?>
        </p>
        <a href="<?php echo $router->generate('post-edit', ['id' => $post->id]) ?>" class="btn btn-warning btn-round">Edit</a>
        <form class="" action="<?php echo $router->generate('post-destroy', ['id' => $post->id, 'action' => 'delete ']) ?>" method="post">
          <button type="submit" class="btn btn-danger btn-round">Hapus</button>
        </form>

      </article>

      <?php } ?>

    </div>

    <?php include "sidebar.php" ?>
  </div>
</div>
<!-- Body End -->

<?php require "footer.php" ?>
