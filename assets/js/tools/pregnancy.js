// Pure arithmetic lifted from design/preview/calculadora.html. UTC dates; no dependencies.
(function (root) {
  "use strict";
  var GESTATION_DAYS = 280;
  var MIN_WEEK = 1, MAX_WEEK = 42;
  var MS_PER_DAY = 86400000;

  /* ---- pure math (port of lib/pregnancy.ts) ---------------------------- */

  function clampWeek(w) {
    if (isNaN(w)) return MIN_WEEK;
    if (w < MIN_WEEK) return MIN_WEEK;
    if (w > MAX_WEEK) return MAX_WEEK;
    return Math.floor(w);
  }
  function getCurrentWeek(lmp, now) {
    var days = Math.floor((now - lmp) / MS_PER_DAY);
    return clampWeek(Math.floor(days / 7) + 1);
  }
  function getRawWeek(lmp, now) {
    return Math.floor(Math.floor((now - lmp) / MS_PER_DAY) / 7) + 1;
  }
  function getTrimester(week) {
    var w = clampWeek(week);
    return w <= 13 ? 1 : (w <= 27 ? 2 : 3);
  }
  function getDueDate(lmp) { return lmp + GESTATION_DAYS * MS_PER_DAY; }
  function lmpFromDueDate(fpp) { return fpp - GESTATION_DAYS * MS_PER_DAY; }
  function getDaysSinceLMP(lmp, now) {
    var d = Math.floor((now - lmp) / MS_PER_DAY);
    return d < 0 ? 0 : d;
  }
  function getDaysRemaining(lmp, now) {
    var r = Math.ceil((getDueDate(lmp) - now) / MS_PER_DAY);
    return r < 0 ? 0 : r;
  }
  function getCompletedGestation(lmp, now) {
    var total = getDaysSinceLMP(lmp, now);
    return { weeks: Math.floor(total / 7), days: total % 7 };
  }
  function formatCompletedGestation(g) {
    return g.weeks + (g.weeks === 1 ? " semana" : " semanas") + " y " +
           g.days + (g.days === 1 ? " día" : " días");
  }

  /* ---- dates, always at UTC midnight ---------------------------------- */

  function parseISO(s) {
    var m = /^(\d{4})-(\d{2})-(\d{2})$/.exec(s || "");
    if (!m) return NaN;
    var t = Date.UTC(+m[1], +m[2] - 1, +m[3]);
    var d = new Date(t);
    // reject 2026-02-31 and friends
    if (d.getUTCMonth() !== +m[2] - 1 || d.getUTCDate() !== +m[3]) return NaN;
    return t;
  }
  function toISO(t) { return new Date(t).toISOString().slice(0, 10); }


  // Cycle day 1 is the first bleeding day; day N is N-1 elapsed days.
  function getFertileWindow(lmp, cycleLength) {
    var ovulation = lmp + (cycleLength - 14 - 1) * MS_PER_DAY;
    return { ovulation: ovulation, start: ovulation - 5 * MS_PER_DAY, end: ovulation + 5 * MS_PER_DAY };
  }
  root.Pregnancy = Object.freeze({ GESTATION_DAYS, MIN_WEEK, MAX_WEEK, MS_PER_DAY, clampWeek, getCurrentWeek, getRawWeek, getTrimester, getDueDate, lmpFromDueDate, getDaysSinceLMP, getDaysRemaining, getCompletedGestation, formatCompletedGestation, parseISO, toISO, getFertileWindow });
})(globalThis);
