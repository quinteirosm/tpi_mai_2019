<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php include_once('php/loader.php'); ?>
    <?php include_once('php/header.php'); ?>
    <?php include_once('php/nav.php'); ?>
  </head>
  <body>
    <section id="main" class="contColumn bg31">
      <h1>Le blog</h1>
    </section>
    <section id="articlesRecents" class="contRow">
      <?php include_once('php/articles/article1.php'); ?>
      <?php include_once('php/articles/article2.php'); ?>
      <?php include_once('php/articles/article3.php'); ?>
      <?php include_once('php/articles/article4.php'); ?>
      <div class="articleShow articleShow1">
        <?php include('php/articles/article1.php'); ?>
      </div>
      <div class="articleShow articleShow2">
        <?php include('php/articles/article2.php'); ?>
      </div>
      <div class="articleShow articleShow3">
        <?php include('php/articles/article3.php'); ?>
      </div>
      <div class="articleShow articleShow4">
        <?php include('php/articles/article4.php'); ?>
      </div>
    </section>
    <section id="derniersCasques"></section>
    <section id="rss"></section>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
  <?php include_once('php/footer.php'); ?>
</html>
