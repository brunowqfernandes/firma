window.onload = (e) => {
  const menuButton = document.querySelector('.menu-toggle');
  const menuWrapper = document.querySelector('.menu-wrapper');
  menuButton.addEventListener('click', function () {
    menuWrapper.classList.toggle('open');
  })
}

// Menu fixo quando scrolla
window.onscroll = (e) => {
}
