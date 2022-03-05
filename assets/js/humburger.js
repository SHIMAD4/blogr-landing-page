export default function () {
  let humburger = document.querySelector('.js-humburger');
  let popup = document.querySelector('.js-popup')
  let closeImg = document.querySelector('.js-close');
  let dropdowns = document.querySelectorAll('.js-dropdown');

  humburger.addEventListener('click', () => {
    humburger.classList.remove('humburger');
    closeImg.classList.add('active');
    humburger.classList.add('close');
    popup.classList.add('open');

    closeImg.addEventListener('click', () => {
      closeImg.classList.remove('active');
      humburger.classList.remove('close');
      popup.classList.remove('open');
    });
  });
}