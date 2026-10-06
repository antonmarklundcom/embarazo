/* Controller lifted from the calculator preview; copy/data and app URL come from PHP. */
(function () {
  "use strict";
  var { parseISO, lmpFromDueDate, getRawWeek, MAX_WEEK, MIN_WEEK, getCurrentWeek, getCompletedGestation, getDueDate, getDaysRemaining, formatCompletedGestation, getTrimester, toISO } = Pregnancy;
  var copy = ToolsShared.config();
  var sizes = window.MiBebeSemanas || {};
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
  function clearStatus() {
    document.getElementById("calc-status").textContent = "";
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

    // F12: the date she typed travels in the fragment, under the key that says
    // which date it is. The browser never sends a fragment to a server, so it
    // reaches the app on her phone and no access log; the app reads it, keeps
    // the method, and drops it from the address bar. Only the week stays in the
    // query (docs/app-facts.md, "Deep-link contract").
    var cta = document.getElementById("r-cta");
    var destination = new URL(cta.dataset.base);
    destination.searchParams.delete('fpp');
    destination.searchParams.delete('fum');
    destination.searchParams.set('w', String(week));
    destination.hash = (mode === "fum" ? "fum=" + toISO(lmp) : "fpp=" + toISO(entered));
    cta.href = destination.href;

    var link = document.getElementById("r-weeklink");
    link.textContent = copy.weekLink.replace('{n}', String(week));
    link.href = '/semana/' + week + '/';

    // Growth plan item 6: share "Estoy de N semanas" with the week page, whose
    // preview is that week's card. The week only: her FUM or FPP never leaves.
    var share = document.getElementById("r-share");
    if (share) {
      var weekUrl = new URL('/semana/' + week + '/', share.dataset.origin).href;
      share.href = 'https://wa.me/?text=' + encodeURIComponent(copy.shareText.replace('{n}', String(week)) + ' ' + weekUrl);
    }

    result.hidden = false;
    // S4: a live region that was `hidden` until now is not reliably announced,
    // so the sentence goes to a status region that is always in the page.
    document.getElementById("calc-status").textContent = copy.resultStatus
      .replace("{n}", String(week))
      .replace("{completed}", formatCompletedGestation(completed))
      .replace("{fpp}", Market.fmtDate(fpp));
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
  input.addEventListener("input", function () { clearError(); clearStatus(); result.hidden = true; });
  input.addEventListener("keydown", function (e) {
    if (e.key === "Enter") { e.preventDefault(); calculate(); }
  });

  /* Prefill + auto-run from the URL, so the exit-criteria vector is one URL
     away. F12: the fragment first (#fum= / #fpp=), which never reaches this
     server's logs; the query still works for old links. */
  var fragment = new URLSearchParams(location.hash.slice(1));
  var preFum = fragment.get("fum") || params.get("fum"), preFpp = fragment.get("fpp") || params.get("fpp");
  if (preFpp) { setMode("fpp"); input.value = preFpp; calculate(); }
  else if (preFum) { setMode("fum"); input.value = preFum; calculate(); }
})();
