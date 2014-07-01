// shim layer with setTimeout fallback
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          window.oRequestAnimationFrame      ||
          window.msRequestAnimationFrame     ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

(function(win, d) {

  var $ = d.querySelector.bind(d);

  var bubble1 = $('#bubble-1');
  var bubble2 = $('#bubble-2');
  var bubble3 = $('#bubble-3');
  var bubble4 = $('#bubble-4');
  var bubble5 = $('#bubble-5');
  var bubble6 = $('#bubble-6');
  var bubble7 = $('#bubble-7');
  var bubble8 = $('#bubble-8');
  var bubble9 = $('#bubble-9');
  var bubble10 = $('#bubble10');
  var bubble11 = $('#bubble11');
  var bubble12 = $('#bubble12');
  var bubble13 = $('#bubble13');
  var bubble14 = $('#bubble14');

  var mainBG = $('section#content');

  var ticking = false;
  var lastScrollY = 0;

  function onResize () {
    updateElements(win.scrollY);
  }

  function onScroll (evt) {

    if(!ticking) {
      ticking = true;
      requestAnimFrame(updateElements);
      lastScrollY = win.scrollY;
    }
  }

  function updateElements () {

    var relativeY = lastScrollY / 5000;

    mainBG.style.backgroundPosition = 'center ' + pos(0, 0, relativeY, 0) + 'px';

    bubble1.style.top = pos(1254, -1400, relativeY, 0) + 'px';
    bubble1.style.left = 5 + '%';

    bubble2.style.top = pos(1954, -2400, relativeY, 0) + 'px';
    bubble2.style.left = 15 + '%';

    bubble3.style.top = pos(2054, -900, relativeY, 0) + 'px';
    bubble3.style.left = 90 + '%';

    bubble4.style.top = pos(2400, -3900, relativeY, 0) + 'px';
    bubble4.style.left = 85 + '%';

    bubble5.style.top = pos(2730, -2900, relativeY, 0) + 'px';
    bubble5.style.left = 10 + '%';

    bubble6.style.top = pos(3860, -4900, relativeY, 0) + 'px';
    bubble6.style.left = 95 + '%';

    bubble7.style.top = pos(6050, -1900, relativeY, 0) + 'px';
    bubble7.style.left = 20 + '%';

    bubble8.style.top = pos(4300, -700, relativeY, 0) + 'px';
    bubble8.style.left = 80 + '%';

    bubble9.style.top = pos(4700, -6000, relativeY, 0) + 'px';
    bubble9.style.left = 92 + '%';

    bubble10.style.top = pos(5530, -2400, relativeY, 0) + 'px';
    bubble10.style.left = 7 + '%';

    bubble11.style.top = pos(4860, -1800, relativeY, 0) + 'px';
    bubble11.style.left = 18 + '%';

    bubble12.style.top = pos(6550, -9000, relativeY, 0) + 'px';
    bubble12.style.left = 83 + '%';

    bubble13.style.top = pos(6400, -1100, relativeY, 0) + 'px';
    bubble13.style.left = 21 + '%';

    bubble14.style.top = pos(5200, -5000, relativeY, 0) + 'px';
    bubble14.style.left = 87 + '%';


    ticking = false;
  }

  function pos(base, range, relY, offset) {
    return base + limit(0, 1, relY - offset) * range;
  }

  function prefix(obj, prop, value) {
    var prefs = ['webkit', 'moz', 'o', 'ms'];
    for (var pref in prefs) {
      obj[prefs[pref] + prop] = value;
    }
  }

  function limit(min, max, value) {
    return Math.max(min, Math.min(max, value));
  }

  (function() {

    updateElements(win.scrollY);

    bubble1.classList.add('force-show');
    bubble2.classList.add('force-show');
    bubble3.classList.add('force-show');
    bubble4.classList.add('force-show');
    bubble5.classList.add('force-show');
    bubble6.classList.add('force-show');
    bubble7.classList.add('force-show');
    bubble8.classList.add('force-show');
    bubble9.classList.add('force-show');
    bubble10.classList.add('force-show');
    bubble11.classList.add('force-show');
    bubble12.classList.add('force-show');
    bubble13.classList.add('force-show');
    bubble14.classList.add('force-show');
  })();

  win.addEventListener('resize', onResize, false);
  win.addEventListener('scroll', onScroll, false);

})(window, document);