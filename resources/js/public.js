document.querySelector(".submit_form").addEventListener("click", function(e) {
  const target_form = e.target.getAttribute("target"); 
  e.preventDefault();
  document.querySelector(`#${target_form}`).dispatchEvent(new Event("submit"));
});