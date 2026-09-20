/* Local-only helpers. No analytics, storage or submission. */
(function () {
  'use strict';
  window.Market.fmtDate = function (timestamp) {
    return new Intl.DateTimeFormat(window.Market.locale, {
      day: 'numeric', month: 'long', year: 'numeric', timeZone: 'UTC'
    }).format(new Date(timestamp));
  };
  window.ToolsShared = {
    config: function () { return JSON.parse(document.getElementById('tool-copy').textContent); },
    today: function () {
      var params = new URLSearchParams(location.search);
      var today = Pregnancy.parseISO(params.get('hoy'));
      if (!Number.isNaN(today)) return today;
      var now = new Date();
      return Date.UTC(now.getFullYear(), now.getMonth(), now.getDate());
    }
  };
})();
