document.querySelector('.submit_form').addEventListener("click", function(e) {
  document.querySelector('.logout_form').dispatchEvent(new Event('submit'));
  return false;
});