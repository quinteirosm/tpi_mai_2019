// loader
window.onload = function() {
  $(".conteneur").css("display", "none");
};
// Swiper
var swiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

$(".article").click(function(){
  $(".articleShow").show(100);
});

$(".close").click(function(){
  $(".articleShow").hide(100);
});

function modal(clicked_id)
{
   $(".articleContent").children().not('.close').remove();
   var copie = $(".article" + clicked_id).clone();
   $(".articleContent").append(copie)
};

$(window).scroll(function() {

    if ($("header").scrollTop()>1)
     {
        $('.nav').css('display', 'inline-block')
     }
    else
     {
       $('.nav').fadeIn();
     }
 });
