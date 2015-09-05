<?php require BASE_VIEW . "header.php" ?>

<div class="main">
  <div class="container">
    <div id="news" class="news">
      <h2 class="section-header">Edit Artikel</h2>

      <?php if(Session::exists('errors')) { ?>
        <div class="alert alert-danger">
          <ul>
              <?php
              foreach(Session::flash('errors') as $error) {
                echo "<li>{$error}</li>";
              }
               ?>
          </ul>
        </div>
      <?php }  ?>

      <form class="#" action="<?php echo $router->generate('post-update', ['id' => $post->id]) ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo Token::generate() ?>">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" value="<?php echo $post->title ?>" placeholder="Awesome Title Goes Here">
        </div>

        <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control" placeholder="Content Goes Here"><?php echo $post->body ?></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-default">Update</button>
        </div>
      </form>

    </div>

    <?php include BASE_VIEW . "sidebar.php" ?>
  </div>
</div>
<!-- Body End -->

<?php require BASE_VIEW . "footer.php" ?>
