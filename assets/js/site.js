(function () {
  'use strict';
  var root = document.querySelector('[data-week-overview]');
  if (!root) return;
  var controls = root.querySelector('[data-week-controls]');
  controls.hidden = false;
  controls.querySelectorAll('[data-week-view]').forEach(function (button) {
    button.addEventListener('click', function () {
      var mode = button.dataset.weekView;
      controls.querySelectorAll('[data-week-view]').forEach(function (choice) {
        choice.setAttribute('aria-pressed', String(choice === button));
      });
      root.querySelectorAll('[data-week-picture]').forEach(function (picture) {
        picture.querySelectorAll('source').forEach(function (source) {
          source.srcset = source.dataset[mode + 'Srcset'];
        });
        var image = picture.querySelector('img');
        image.src = image.dataset[mode + 'Src'];
        image.alt = image.dataset[mode + 'Alt'];
      });
    });
  });
}());

/* Native share is optional: the WhatsApp anchor remains the fallback. */
if (navigator.share) {
  document.querySelectorAll('[data-share]').forEach(link => {
    link.addEventListener('click', async event => {
      event.preventDefault();
      try { await navigator.share({title: link.dataset.shareTitle, url: link.dataset.shareUrl}); }
      catch (error) { if (error.name !== 'AbortError') window.location.assign(link.href); }
    });
  });
}

/* An example in the preview never becomes her pregnancy. Only an explicit
 * selection supplies w; choosing the empty option removes it again. */
(function () {
  'use strict';
  var picker = document.querySelector('[data-home-week]');
  if (!picker) return;
  function update() {
    var week = picker.value;
    var valid = /^(?:[1-9]|[1-3][0-9]|4[0-2])$/.test(week);
    document.querySelectorAll('[data-home-app]').forEach(function (link) {
      var destination = new URL(link.dataset.base);
      if (valid) destination.searchParams.set('w', week);
      else destination.searchParams.delete('w');
      link.href = destination.href;
    });
    document.querySelector('[data-home-guide]').href = valid ? '/semana/' + week + '/' : '/semana/';
    document.querySelector('[data-home-status]').textContent = valid ? picker.selectedOptions[0].textContent : '';
  }
  picker.addEventListener('change', update);
  update();
})();
