document.querySelector('.logout_button').addEventListener("click", function(e) {
  document.getElementById('logout_form').dispatchEvent(new Event('submit'));
  return false;
});