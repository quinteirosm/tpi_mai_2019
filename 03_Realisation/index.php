<!DOCTYPE html>
<html>
<?php include_once('php/header.php'); ?>
<?php include_once('php/loader.php'); ?>
<?php include_once('php/nav.php'); ?>
<body>
  <!-- Landing Page --------------------------------------------------------------->
  <section id="landingPage" class="contColumn bg11">
    <img src="imgs/logo.svg" class="logo" alt="logoVirtuali">
    <a href="vr.php">
      <h1>Explications</h1>
    </a>
    <a href="blog.php">
      <h1>Le blog</h1>
    </a>
    <a href="association.php">
      <h1>Association</h1>
    </a>
    <a href="#contact">
      <h1>Contact</h1>
    </a>
    <a href="#pages" id="chevronBas" class="fas fa-chevron-down fa-5x"></a>
  </section>
  <!-- Section de redirection --------------------------------------------------------------->
  <section id="pages">
    <section class="contRow">
      <div class="blocTxt">
        <p>VR</p>
      </div>
      <div class="blocIcon">
        <a href="" class="far fa-newspaper icon"></a>
      </div>
      <div class="blocTxt">
        <p>Association</p>
      </div>
      <div class="blocIcon">
        <a href="" class="fas fa-envelope icon"></a>
      </div>
    </section>
    <section class="contRow">
      <div class="blocIcon">
        <a href="" class="fas fa-vr-cardboard icon"></a>
      </div>
      <div class="blocTxt">
        <p>News</p>
      </div>
      <div class="blocIcon">
        <a href="" class="fas fa-users icon"></a>
      </div>
      <div class="blocTxt">
        <p>Contact</p>
      </div>
    </section>
  </section>
  <!-- Section association --------------------------------------------------------------->
  <section id="association" class="contRow">
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
  <!-- Section contact --------------------------------------------------------------->
  <section id="contact" class="contColumn">
    <form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
    <div>
      <label class="nom" for="nom">Nom</label>
      <input class="champ" type="text" id="nom" name="nom" placeholder="Votre nom..">
    </div>
    <div>
      <label class="mail" for="email">E-Mail</label>
      <input class="champ" type="text" id="email" name="email" placeholder="Your last name..">
    </div>
    <div>
      <label class ="message" for="message">Message</label>
      <textarea class="champ" name="message" placeholder="Tapez votre message ici..."></textarea>
    </div>
    <input type="submit" value="envoyer">
  </form>
  </section>
  <?php include_once('php/mailEnvoi.php'); ?>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
<!-- Footer --------------------------------------------------------------->
<?php include_once('php/footer.php'); ?>
</html>
