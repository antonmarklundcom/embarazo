(function () {
  'use strict';
  var root = document.querySelector('[data-install-root]');
  if (!root) return;
  var ua = navigator.userAgent;
  var iphone = /iPad|iPhone|iPod/i.test(ua) || (/Macintosh/i.test(ua) && navigator.maxTouchPoints > 1);
  var detected = iphone ? 'iphone' : /Android/i.test(ua) ? 'android' : 'desktop';
  function select(device) {
    root.querySelectorAll('[data-install-device]').forEach(function (button) {
      button.setAttribute('aria-pressed', String(button.dataset.installDevice === device));
    });
    root.querySelectorAll('[data-install-panel]').forEach(function (panel) {
      panel.hidden = panel.dataset.installPanel !== (device === 'desktop' ? 'desktop' : 'phone');
    });
    ['android', 'iphone'].forEach(function (name) {
      var guide = document.getElementById(name);
      if (guide) guide.open = device === 'desktop' || device === name;
    });
  }
  root.querySelectorAll('[data-install-device]').forEach(function (button) {
    button.addEventListener('click', function () { select(button.dataset.installDevice); });
  });
  var requested = location.hash.slice(1);
  select(['android', 'iphone'].includes(requested) ? requested : detected);
  window.addEventListener('hashchange', function () {
    var device = location.hash.slice(1);
    if (['android', 'iphone'].includes(device)) select(device);
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
