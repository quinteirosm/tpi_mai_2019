// loader
window.onload = function() {
  $(".conteneur").css("display", "none");
};
$("#articlesRecents").load("php/aticles/article1.php");
// Swiper
var swiper = new Swiper('.swiper-container', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
