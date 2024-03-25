window.onload = (e) => {
  var image = document.getElementsByClassName('parallax');

  new simpleParallax(image, {
      delay: 1,
      transition: 'cubic-bezier(0,0,0,1)',
      orientation: 'up right'
  });
}

// Menu fixo quando scrolla
window.onscroll = (e) => {
  const header = document.querySelector('header')
  if(window.scrollY > 100)
      header.classList.add('fixed')
  else
      header.classList.remove('fixed')
}
