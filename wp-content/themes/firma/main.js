window.onload = (e) => {
  const loading = document.querySelector('.loading-wrapper');
  if(loading) {
    document.querySelector('body').classList.add('loading')
    const loadText = document.querySelector('#loading-text');
    let percent = 0;
    const interval = setInterval(function() {
      percent += 1;
      loadText.textContent = percent + '%';

      if (percent >= 100) {
        loading.ontransitionend = (e) => {
          loading.style.display = 'none';
          document.querySelector('body').classList.remove('loading')
        };
        loading.style.opacity = 0;
        clearInterval(interval);
      }
    }, 20);
  }
  const menuButton = document.querySelector('.menu-toggle');
  const menuWrapper = document.querySelector('.menu-wrapper');
  menuButton.addEventListener('click', function () {
    menuWrapper.classList.toggle('open');
  })
  const autoplay = (loading) ? {
    delay: 100,
    pauseOnMouseEnter: true,
  } : false;
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    autoplay: autoplay,
    speed: 0, // Remove a animação da transição
    cssMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

// Menu fixo quando scrolla
window.onscroll = (e) => {
}
