$(document).ready(function(){
  // Ajouter une animation de scroll à tous les liens
  $("a").on('click', function(event) {
      // On utilise dès lors animate() pour effectuer l'effet de scroll
      // Le nombre "800" définit la vitesse de l'animation en ms
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
      });
    }
  });
});
