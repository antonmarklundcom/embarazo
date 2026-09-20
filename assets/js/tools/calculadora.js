/* Controller lifted from the calculator preview; copy/data and app URL come from PHP. */
(function () {
  "use strict";
  var { parseISO, lmpFromDueDate, getRawWeek, MAX_WEEK, MIN_WEEK, getCurrentWeek, getCompletedGestation, getDueDate, getDaysRemaining, formatCompletedGestation, getTrimester, toISO } = Pregnancy;
  var copy = ToolsShared.config();
  var sizes = {};
  fetch('/assets/js/tools/semanas.json', { credentials: 'omit', referrerPolicy: 'no-referrer' })
    .then(function (response) { if (!response.ok) throw new Error('weeks'); return response.json(); })
    .then(function (data) {
      sizes = data;
      var week = document.getElementById('r-week').textContent;
      if (sizes[week]) document.getElementById('r-size').textContent = sizes[week].name;
    }).catch(function () { /* Date arithmetic remains available without size data. */ });
  /* ---- "hoy", overridable for testing --------------------------------- */

  var params = new URLSearchParams(location.search);
  var TODAY = ToolsShared.today();

  /* ---- DOM ------------------------------------------------------------ */

  var mode = "fum";
  var input = document.getElementById("calc-fecha");
  var field = document.getElementById("field-fecha");
  var label = document.getElementById("calc-label");
  var hint = document.getElementById("calc-hint");
  var panel = document.getElementById("panel-fecha");
  var errBox = document.getElementById("calc-error");
  var errText = document.getElementById("calc-error-text");
  var result = document.getElementById("calc-result");
  var go = document.getElementById("calc-go");
  var tabs = Array.prototype.slice.call(document.querySelectorAll(".calc__mode"));

  var COPY = copy.modes;

  function setMode(next) {
    mode = next;
    tabs.forEach(function (t) {
      t.setAttribute("aria-selected", String(t.dataset.mode === next));
      t.tabIndex = t.dataset.mode === next ? 0 : -1;
    });
    panel.setAttribute("aria-labelledby", next === "fum" ? "tab-fum" : "tab-fpp");
    label.textContent = COPY[next].label;
    hint.textContent = COPY[next].hint;
    clearError();
    result.hidden = true;
  }

  function showError(msg) {
    errText.textContent = " " + msg;
    errBox.hidden = false;
    field.setAttribute("data-invalid", "true");
    input.setAttribute("aria-invalid", "true");
    result.hidden = true;
  }
  function clearError() {
    errBox.hidden = true;
    field.removeAttribute("data-invalid");
    input.removeAttribute("aria-invalid");
  }

  function calculate() {
    var entered = parseISO(input.value);
    if (isNaN(entered)) {
      showError(copy.dateError);
      return;
    }

    var lmp = mode === "fum" ? entered : lmpFromDueDate(entered);

    if (mode === "fum") {
      if (entered > TODAY) {
        showError(copy.futureError);
        return;
      }
      if (getRawWeek(lmp, TODAY) > MAX_WEEK) {
        showError(copy.oldFumError);
        return;
      }
    } else {
      var raw = getRawWeek(lmp, TODAY);
      if (raw < MIN_WEEK) {
        showError(copy.futureFppError);
        return;
      }
      if (raw > MAX_WEEK) {
        showError(copy.oldFppError);
        return;
      }
    }

    clearError();

    var week = getCurrentWeek(lmp, TODAY);
    var completed = getCompletedGestation(lmp, TODAY);
    var fpp = getDueDate(lmp);
    var left = getDaysRemaining(lmp, TODAY);

    document.getElementById("r-week").textContent = String(week);
    document.getElementById("r-completed").textContent = formatCompletedGestation(completed);
    document.getElementById("r-fpp").textContent = Market.fmtDate(fpp);
    document.getElementById("r-tri").textContent = copy.trimesters[getTrimester(week) - 1];
    document.getElementById("r-size").textContent = sizes[week] ? sizes[week].name : copy.sizeUnavailable;
    document.getElementById("r-left").textContent =
      left === 0 ? copy.dueReached : (left + " " + (left === 1 ? copy.day : copy.days));

    var cta = document.getElementById("r-cta");
    var destination = new URL(cta.dataset.base);
    destination.searchParams.set('fpp', toISO(fpp));
    destination.searchParams.set('w', String(week));
    cta.href = destination.href;

    var link = document.getElementById("r-weeklink");
    link.textContent = copy.weekLink.replace('{n}', String(week));
    link.href = '/semana/' + week + '/';

    result.hidden = false;
  }

  tabs.forEach(function (t) {
    t.addEventListener("click", function () { setMode(t.dataset.mode); });
  });
  tabs.forEach(function (tab, index) {
    tab.addEventListener('keydown', function (event) {
      if (['ArrowLeft','ArrowRight','Home','End'].includes(event.key)) {
        event.preventDefault();
        var next = event.key === 'Home' ? 0 : event.key === 'End' ? 1 : 1 - index;
        setMode(tabs[next].dataset.mode);
        tabs[next].focus();
      }
    });
  });
  go.disabled = false;
  go.addEventListener("click", calculate);
  input.addEventListener("input", function () { clearError(); result.hidden = true; });
  input.addEventListener("keydown", function (e) {
    if (e.key === "Enter") { e.preventDefault(); calculate(); }
  });

  /* Prefill + auto-run from the query string, so the exit-criteria vector is
     one URL away and so /semana/<n> can link here with a date already set. */
  var preFum = params.get("fum"), preFpp = params.get("fpp");
  if (preFpp) { setMode("fpp"); input.value = preFpp; calculate(); }
  else if (preFum) { setMode("fum"); input.value = preFum; calculate(); }
})();
