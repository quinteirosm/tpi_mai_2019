<!DOCTYPE html>
<html>
<?php include_once('php/header.php'); ?>
<?php include_once('php/loader.php'); ?>
<?php include_once('php/nav.php'); ?>
<body>
  <!-- Landing Page --------------------------------------------------------------->
  <section id="landingPageIndex" class="contColumn bg11">
    <img src="imgs/logo.svg" class="logo" alt="logoVirtuali">
    <a href="vr.php">
      <h1>La VR</h1>
    </a>
    <a href="blog.php">
      <h1>Le blog</h1>
    </a>
    <a href="association.php">
      <h1>L'association</h1>
    </a>
    <a href="association.php#contact">
      <h1>Contact</h1>
    </a>
    <a href="#pages" id="chevronBas" class="fas fa-chevron-down fa-5x"></a>
  </section>
  <!-- Section de redirection --------------------------------------------------------------->
  <section id="pages">
    <section class="contRow redirectBloc">
      <div class="blocTxt">
        <a href="vr.php"><p>La VR</p></a>
      </div>
      <div class="blocIcon">
        <i class="fas fa-vr-cardboard icon"></i>
      </div>
      <div class="blocTxt">
        <a href="association.php"><p>L'association</p></a>
      </div>
      <div class="blocIcon">
        <i class="fas fa-users icon"></i>
      </div>
    </section>
    <section class="contRow redirectBloc">
      <div class="blocIcon">
        <a class="far fa-newspaper icon"></a>
      </div>
      <div class="blocTxt">
        <a href="blog.php"><p>Le blog</p></a>
      </div>
      <div class="blocIcon">
          <a class="far fa-envelope icon"></a>
      </div>
      <div class="blocTxt">
        <a href="association.php#contact"><p>Contact</p></a>
      </div>
    </section>
  </section>
  <!-- Section association --------------------------------------------------------------->
  <section id="association" class="contRow assoMain">
    <section class="contColumn assoTxt">
      <i class="fas fa-angle-double-up icon iconAsso"></i>
      <div class="textBox">
        <p>
          Le but principal de l’association est de promouvoir la
          VR au travers de son site, de ses communications ainsi
          que de ses évènements.
        </p>
      </div>
      <i class="fas fa-hands-helping icon iconAsso"></i>
      <div class="textBox">
        <p>
          Virtuali souhaiter aider les nouvelles personnes
          s’intéressant à la VR au travers de ses évènements
          visant à la compréhension de cette dernière.
        </p>
      </div>
      <i class="fas fa-chart-line icon iconAsso"></i>
      <div class="textBox">
        <p>
          L’association souhaite faire évoluer la VR en aidant sa
          connaissance et sa démocratisation.
        </p>
      </div>
      <i class="fas fa-link icon iconAsso"></i>
      <div class="textBox">
        <p>
          Virtuali a pour but de connecter la communauté de la
          VR au travers de meetings autant pour des
          développeurs que pour des investisseurs.
        </p>
      </div>
    </section>
    <section class="contRow">
      <img class="assoImg" src="imgs/bureau.jpg" title="White flower" alt="Something">
    </section>
  </section>
  <?php include_once('php/scripts.php'); ?>
</body>
<!-- Footer --------------------------------------------------------------->
<?php include_once('php/footer.php'); ?>
</html>
