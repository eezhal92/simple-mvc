<?php require BASE_VIEW . "header.php" ?>

<?php

  if(Session::exists('error')) {
    die(Session::get('error'));
  }
 ?>
<div class="main">
  <div class="container">
    <div id="news" class="news">
      <h2 class="section-header">Buat Artikel</h2>

      <form class="#" action="<?php echo $router->generate('post-store') ?>" method="post">

        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" placeholder="Awesome Title Goes Here">
        </div>

        <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control" placeholder="Content Goes Here"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-default">Publish</button>
        </div>
      </form>

    </div>

    <?php include BASE_VIEW . "sidebar.php" ?>
  </div>
</div>
<!-- Body End -->

<?php require BASE_VIEW . "footer.php" ?>
