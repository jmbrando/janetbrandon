// mouse balls interaction **********************
// 
// $(document).ready(function(){
//
//   var mousePos = {};
//
//  function getRandomInt(min, max) {
//    return Math.round(Math.random() * (max - min + 1)) + min;
//  }
//
//   $(window).mousemove(function(e) {
//     mousePos.x = e.pageX;
//     mousePos.y = e.pageY;
//   });
//
//   $(window).mouseleave(function(e) {
//     mousePos.x = -1;
//     mousePos.y = -1;
//   });
//
//   var draw = setInterval(function(){
//     if(mousePos.x > 0 && mousePos.y > 0){
//
//       var range = 15;
//
//       var color = "background: rgba("+getRandomInt(50,255)+","+getRandomInt(50,255)+","+getRandomInt(50,255)+","+0.25+");";
//
//       var sizeInt = getRandomInt(10, 50);
//       size = "height: " + sizeInt + "px; width: " + sizeInt + "px;";
//
//       var left = "left: " + getRandomInt(mousePos.x-range-sizeInt, mousePos.x+range) + "px;";
//
//       var top = "top: " + getRandomInt(mousePos.y-range-sizeInt, mousePos.y+range) + "px;";
//
//       var style = left+top+color+size;
//       $("<div class='ball' style='" + style + "'></div>").appendTo('body').one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){$(this).remove();});
//     }
//   }, 1);
// });



// nav scripts

var navOpen = document.querySelector('.menu-btn');

navOpen.addEventListener('click', function(){

  document.querySelector('nav').classList.toggle('show-nav');
  document.querySelector('body').classList.toggle('fixed');
});



var menuExit = document.querySelector('.exit-btn');

menuExit.addEventListener('click', function(){

  document.querySelector('nav').classList.toggle('show-nav');
  document.querySelector('body').classList.toggle('fixed');

});


// gallery fade in and up scripts

$(window).scroll(function(){
  inViewport();
});

$(window).resize(function(){
  inViewport();
});

function inViewport(){
  $('.animated').each(function(){
    var divPos = $(this).offset().top,
            topOfWindow = $(window).scrollTop();

    if( divPos < topOfWindow+500 ){
      $(this).addClass('fadeInUp');
    }
  });
}


// graphic scripts

var graphicA = document.querySelectorAll('.graphic-open').forEach(graphicOpen => {

  graphicOpen.addEventListener('click', function(){

    $(this).siblings().toggleClass('show-details');
    $(this).parents('.graphic-item').toggleClass('add-bg');

  });
});

var graphicB = document.querySelectorAll('.graphic-close').forEach(graphicClose => {

  graphicClose.addEventListener('click', function(){

    $(this).parents('.closing-area').siblings('.graphic-open').siblings().toggleClass('show-details');
    $(this).parents('.graphic-item').toggleClass('add-bg');

  });
});


// web scripts

var webA = document.querySelectorAll('.web-open').forEach(webOpen => {

  webOpen.addEventListener('click', function(){

    $(this).siblings().toggleClass('show-details');
    $(this).parents('.web-item').toggleClass('add-bg');

  });
});

var webB = document.querySelectorAll('.web-close').forEach(webClose => {

  webClose.addEventListener('click', function(){

    $(this).parents('.closing-area').siblings('.web-open').siblings().toggleClass('show-details');
    $(this).parents('.web-item').toggleClass('add-bg');

  });
});
