<?php require "header.php" ?>

<div class="main">
  <div class="container">
    <div id="news" class="news">
      <h2 class="section-header">Foo. My name: <?php echo $nama ?>. Printerku : <?php echo $printerku->brand() ?></h2>

      <article class="news-item">

      </article>

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
