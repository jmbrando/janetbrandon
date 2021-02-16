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


// web scripts

var webA = document.querySelectorAll('.item-open').forEach(webOpen => {

  webOpen.addEventListener('click', function(){

    $(this).siblings().toggleClass('show-details');
    $(this).parents('.web-item').toggleClass('add-bg');

  });

});

var webB = document.querySelectorAll('.close-btn').forEach(webClose => {

  webClose.addEventListener('click', function(){

    $(this).parents('.closing-area').siblings('.item-open').siblings().toggleClass('show-details');
    $(this).parents('.web-item').toggleClass('add-bg');

  });

});

// var web1b = document.querySelector('#web1 .close-btn');
//
// web1b.addEventListener('click', function(){
//
//   $('#web1 .item-open').siblings().toggleClass('show-details');
//   $('#web1 .close-btn').parents('section.web-item').toggleClass('add-bg');
//
// });
//
// // item 2
//
// var web2a = document.querySelector('#web2 .item-open');
//
// web2a.addEventListener('click', function(){
//
//   $('#web2 .item-open').siblings().toggleClass('show-details');
//   $('#web2').toggleClass('add-bg');
//
// });
//
// var web2b = document.querySelector('#web2 .close-btn');
//
// web2b.addEventListener('click', function(){
//
//   $('#web2 .item-open').siblings().toggleClass('show-details');
//   $('#web2 .close-btn').parents('section.web-item').toggleClass('add-bg');
//
// });
