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
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

// Menu fixo quando scrolla
window.onscroll = (e) => {
}
