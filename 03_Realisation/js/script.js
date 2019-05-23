window.onload = function(){
  $(".conteneur").css("display", "none");
};

  $(".conteneur").css("display ", "none");
// Article 1
$(".article1").click(function(){
  $(".articleShow1").css("visibility", "visible");
  $("#articlesRecents").blur();
});

$(".articleShow1").click(function(){
  $(".articleShow1").css("visibility", "hidden");
});

// Article 2
$(".article2").click(function(){
  $(".articleShow2").css("visibility", "visible");
});

$(".articleShow2").click(function(){
  $(".articleShow2").css("visibility", "hidden");
});

// Article 3
$(".article3").click(function(){
  $(".articleShow3").css("visibility", "visible");
});

$(".articleShow3").click(function(){
  $(".articleShow3").css("visibility", "hidden");
});

// Article 4
$(".article4").click(function(){
  $(".articleShow4").css("visibility", "visible");
});

$(".articleShow4").click(function(){
  $(".articleShow4").css("visibility", "hidden");
});

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
