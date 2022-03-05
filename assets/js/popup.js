export default function () {
  let btns = document.querySelectorAll('.js-popup__item-button');
  let menu = document.querySelectorAll('.js-popup__dropdown-menu');
  let imgs = document.querySelectorAll('.js_popup-drop--icon');

  btns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      let path = e.currentTarget.getAttribute('data-path');
      menu.forEach(item => {
        if(item.getAttribute('data-menu') === path) {
          item.classList.toggle('active');
        }else {
          item.classList.remove('active');
        };
      });
      imgs.forEach(item => {
        if(item.getAttribute('data-img') === path) {
          item.classList.toggle('active');
        }else {
          item.classList.remove('active');
        }
      });
    })
  })
}