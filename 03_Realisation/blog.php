<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php include_once('php/header.php'); ?>
    <?php include_once('php/nav.php'); ?>
  </head>
  <body>
    <?php include_once('php/articleScript.php'); ?>
    <section id="main" class="contColumn bg31">
      <h1>Les Nouveautés</h1>
    </section>
    <section id="articlesRecents" class="contRow">
      <?php include_once('php/articles/article1.php'); ?>
      <?php include_once('php/articles/article2.php'); ?>
      <?php include_once('php/articles/article3.php'); ?>
      <?php include_once('php/articles/article4.php'); ?>
    </section>
    <section id="derniersCasques"></section>
    <section id="rss"></section>
  </body>
  <?php include_once('php/footer.php'); ?>
</html>
