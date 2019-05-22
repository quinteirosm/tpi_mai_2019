<!DOCTYPE html>
<html lang="fr">
<?php include_once('php/header.php'); ?>
<?php include_once('php/nav.php'); ?>
<body>
  <section id="main" class="contColumn bg21">
    <h1>La VR</h1>
  </section>
  <section id="description">
    <?php include_once('php/description.php'); ?>
  </section>
  <section id="vrEn2018" class="contRow">
    <div class="left bg22">

    </div>
    <div class="right">
      <?php include_once('php/vrEn2018.php'); ?>
    </div>
  </section>
  <section id="vrEn2019">
    <h1>
      Les espérances pour 2019
    </h1>
    <div class="contRow topAlign">
      <div class="left2019">
        <?php include_once('php/vrEn2019Left.php'); ?>
      </div>
      <div class="right2019">
        <?php include_once('php/vrEn2019Right.php'); ?>
      </div>
    </div>
  </section>
</body>
<?php include_once('php/footer.php'); ?>
</html>
