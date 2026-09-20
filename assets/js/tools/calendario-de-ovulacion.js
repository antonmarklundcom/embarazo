(function () {
  'use strict';
  var p = Pregnancy, copy = ToolsShared.config(), today = ToolsShared.today();
  var input = document.getElementById('calc-fecha');
  var cycle = document.getElementById('calc-cycle');
  var result = document.getElementById('calc-result');
  var error = document.getElementById('calc-error');
  var go = document.getElementById('calc-go');
  function calculate() {
    result.hidden = true;
    error.hidden = true;
    input.removeAttribute('aria-invalid');
    cycle.removeAttribute('aria-invalid');
    var date = p.parseISO(input.value), length = Number(cycle.value);
    var invalidDate = Number.isNaN(date) || date > today;
    if (invalidDate || !Number.isInteger(length) || length < 21 || length > 35) {
      error.textContent = invalidDate ? copy.dateError : copy.cycleError;
      error.hidden = false;
      (invalidDate ? input : cycle).setAttribute('aria-invalid', 'true');
      return;
    }
    var dates = p.getFertileWindow(date, length);
    ['ovulation', 'start', 'end'].forEach(function (key) {
      document.getElementById('r-' + key).textContent = Market.fmtDate(dates[key]);
    });
    result.hidden = false;
  }
  go.disabled = false;
  go.addEventListener('click', calculate);
  [input,cycle].forEach(function (field) {
    field.addEventListener('input', function () { result.hidden = true; error.hidden = true; });
    field.addEventListener('keydown', function (event) {
      if (event.key === 'Enter') { event.preventDefault(); calculate(); }
    });
  });
})();
