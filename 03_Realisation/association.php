<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php include_once('php/header.php'); ?>
    <?php include_once('php/loader.php'); ?>
    <?php include_once('php/nav.php'); ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section id="landingPageAssoc" class="contColumn bg41">
      <img src="imgs/logo.svg" class="logo" alt="logoVirtuali">
    </section>
    <section id="presentation" class="contColumn">
      <div class="presentationBox">
        <h1>
          Présentation
        </h1>
        <p>
          VirtualiR est une association basée en Suisse. Avantgardiste,
          elle mise sur la VR comme la prochaine
          technologie qui va envahir notre quotidien.
          Menée par un passionné, elle souhaite promouvoir la VR
          en publiant du contenu sur la spéculation des possibilités
          d'évolution de cette technologie dans le futur ainsi que
          des articles de blog sur les nouveautés récentes.
          Afin d'informer le public sur les possibilités d'innovations
          liées à cette technologie, le contenu publié sera de la
          vulgarisation et non du contenu scientifique pour pouvoir
          toucher et initier le plus grand public possible.
        </p>
      </div>
    </section>
    <section id="valeurs" class="cont-Row">
      <section id="promouvoir" class="cont0">
        <i class="fas fa-angle-double-up icon iconAsso2"></i>
        <p>
          Le but principal de l’association est de promouvoir la
          VR au travers de son site, de ses communications ainsi
          que de ses évènements.
        </p>
      </section>
      <section id="aider" class="cont25">
        <i class="fas fa-hands-helping icon iconAsso2"></i>
        <p>
          Virtuali souhaiter aider les nouvelles personnes
          s’intéressant à la VR au travers de ses évènements
          visant à la compréhension de cette dernière.
        </p>
      </section>
      <section id="evoluer" class="cont75">
        <i class="fas fa-chart-line icon iconAsso2"></i>
        <p>
          L’association souhaite faire évoluer la VR en aidant sa
          connaissance et sa démocratisation.
        </p>
      </section>
      <section id="connecter" class="cont100">
        <i class="fas fa-link icon iconAsso2"></i>
        <p>
          Virtuali a pour but de connecter la communauté de la
          VR au travers de meetings autant pour des
          développeurs que pour des investisseurs.
        </p>
      </section>
    </section>
    <section id="membres" class="contRow">
      <section class="leftAsso">
        <div class="membres">
          <div class="portrait">
            <img src="imgs/portraitM.svg" alt="">
          </div>
          <div class="presentationMembre">
            <h2>
              Miguel Quinteiros
            </h2>
            <p>
              Après une formation de
              médiamaticien, il est allé à la
              HEIG-VD et a obtenu son
              diplôme d'Ingénieur HES en
              informatique logicielle.<br><br>
              Le fondateur, âgé de 24 ans,
              est développeur indépendant
              et consacre une attention
              accrue aux nouvellestechnologies
              et plus
              particulièrement à la VR dont
              il est passionné.
            </p>
          </div>
        </div>
      </section>
      <section class="rightAsso">
        <div class="portrait">
          <img src="imgs/portraitT.svg" alt="">
        </div>
        <div class="presentationMembre">
          <h2>
            Thierry Ximenes
          </h2>
          <p>
            Après avoir eu son bac, ce
            membre est venu en Suisse et
            à travaillé 6 ans comme
            développeur indépendant.
            Passionné par la VR, il
            s'adapta très vite et
            commença a développer des
            projets pour cette technologie.<br><br>
            Il a rencontré le fondateur au
            travers d'une conférence sur le
            développement orienté VR
            dans le milieu de la médecine.
          </p>
        </div>
      </section>
    </section>
    <section id="event">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="event1">
              <h1>La VR, les bases</h1>
              <div class="eventInfo">
              <p>
                Vos connaissances sont moindres et
                vous souhaitez vous perfectionner ?
                Cette conférence reprend les bases
                de la VR et vous les explique !
                Cet évènement met en place un cours
                d’une heure suivi de 30min de
                questions/réponses.<br>
                Si vous souhaitez vous améliorer
                d’avantages après cette conférence,
                une deuxième qui fera suite à celle-ci
                sera mise en place prochainement.<br><br>
                Cet évènement n’aura lieu que si 20
                personnes s’y inscrivent.<br><br>
                Théâtre du Chateau<br>
                1580 Avenches
              </p>
              <button type="button" name="button">S'inscrire</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="event1">
              <h1>Développez-vous</h1>
              <div class="eventInfo">
              <p>
                Vous voulez accroître vos connaissances au niveau du développement orienté VR ou juste parler d’optimisation avec d’autres développeurs passionnés ?<br>
                Venez nous rejoindre tous les vendredis de 16h à 20h à nos locaux.<br><br>

                Virtuali <br>
                Route de la Plaine 28 <br>
                1580 Avenches

              </p>
              <button type="button" name="button">S'inscrire</button>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
      </div>
    </section>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
  <?php include_once('php/footer.php'); ?>
</html>
