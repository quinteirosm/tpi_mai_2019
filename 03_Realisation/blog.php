<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php include_once('php/header.php'); ?>
    <?php include_once('php/loader.php'); ?>
    <?php include_once('php/nav.php'); ?>
  </head>
  <body>
    <section id="landingPage" class="contColumn bg31">
      <h1>Le blog</h1>
    </section>
    <section id="articlesRecents" class="contRow">
      <?php

      $dossier = "php/articles/";
      if (glob($dossier . "*") != false)
      {
       $count = count(glob($dossier . "*"));
      }else{
        echo "Erreur 404: Le dossier n'existe pas :()";
      }
      for($i = 1; $i <= $count; $i++){
         include_once('php/articles/article'.$i.'.php');
      }
      ?>
    </section>
    <section class="articleShow">
      <section class="articleContent">
        <span class="close">&times;</span>
      </section>
    </section>
    <?php include_once('php/scripts.php'); ?>
  </body>
  <?php include_once('php/footer.php'); ?>
</html>
