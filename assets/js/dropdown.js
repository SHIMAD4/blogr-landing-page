export default function () {
  let dropdowns = document.querySelectorAll('.js-dropdown');
  
  function dropdownToggle (dropdown) {
    dropdown.classList.toggle('active');
  }
  
  dropdowns.forEach(dropdown => {
    dropdown.addEventListener("mouseenter", e => {
      let dropdown = e.target.closest('.js-dropdown');
      dropdownToggle(dropdown);
    });
    dropdown.addEventListener("mouseleave", e => {
      let dropdown = e.target.closest('.js-dropdown');
      dropdownToggle(dropdown);
    });
  });
}