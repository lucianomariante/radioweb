// Behaviors extracted from Elementor HTML widgets
// to keep interactivity centralized.

(function(){
  var accordion = document.getElementById('rw-acc1');
  if(!accordion) return;

  var items = accordion.querySelectorAll('.rw-acc__item');
  if(!items.length) return;

  function activate(item){
    items.forEach(function(node){ node.classList.toggle('is-active', node === item); });
  }

  items.forEach(function(item, index){
    item.addEventListener('click', function(){ activate(item); });
    if(index === 0) activate(item);
  });
})();

(function(){
  var testimonials = document.getElementById('rw-testimonials');
  if(!testimonials) return;

  var slides = testimonials.querySelectorAll('.rw-slide');
  if(!slides.length) return;

  var prev = testimonials.querySelector('.rw-prev');
  var next = testimonials.querySelector('.rw-next');
  var counter = testimonials.querySelector('#rw-count');
  var current = 0;

  function show(index){
    current = (index + slides.length) % slides.length;
    slides.forEach(function(slide, idx){
      slide.classList.toggle('is-active', idx === current);
    });
    if(counter) counter.textContent = (current + 1) + ' / ' + slides.length;
  }

  if(prev) prev.addEventListener('click', function(){ show(current - 1); });
  if(next) next.addEventListener('click', function(){ show(current + 1); });

  show(0);
})();
