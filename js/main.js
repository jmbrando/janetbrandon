var a = document.querySelector('.menu-btn');

a.addEventListener('click', function(){

  document.querySelector('nav').classList.toggle('show-nav');
  document.querySelector('body').classList.toggle('fixed');
});

var a = document.querySelector('.exit-btn');

a.addEventListener('click', function(){

  document.querySelector('nav').classList.toggle('show-nav');
  document.querySelector('body').classList.toggle('fixed');

});
