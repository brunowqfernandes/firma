window.onload = (e) => {
  const menuButton = document.querySelector('.menu-toggle');
  const menuWrapper = document.querySelector('.menu-wrapper');
  menuButton.addEventListener('click', function () {
    menuWrapper.classList.toggle('open');
  })

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    autoplay: {
      delay: 100,
    },
    pauseOnMouseEnter: true,
    effect: 'fade',
  });
}

// Menu fixo quando scrolla
window.onscroll = (e) => {
}
