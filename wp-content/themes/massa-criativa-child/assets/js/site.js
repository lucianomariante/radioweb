// Header sticky + troca de logo
(function(){
  var header = document.querySelector('.mc-header');
  if(!header) return;
  var onScroll = function(){
    if(window.scrollY > 10){ header.classList.add('is-stuck'); }
    else{ header.classList.remove('is-stuck'); }
  };
  onScroll();
  window.addEventListener('scroll', onScroll, {passive:true});
})();

// Toggle menu mobile (espera por elementos opcionais)
(function(){
  var btn = document.querySelector('[data-mc-toggle]');
  var nav = document.querySelector('[data-mc-nav]');
  if(!btn || !nav) return;
  btn.addEventListener('click', function(){
    nav.classList.toggle('open');
    document.body.classList.toggle('menu-open');
  });
})();

// Smooth anchor offset (para header fixo)
(function(){
  var links = document.querySelectorAll('a[href^="#"]');
  var header = document.querySelector('.mc-header');
  var offset = header ? header.offsetHeight + 8 : 0;
  links.forEach(function(a){
    a.addEventListener('click', function(e){
      var id = a.getAttribute('href').slice(1);
      var el = document.getElementById(id);
      if(!el) return;
      e.preventDefault();
      var top = el.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });
})();