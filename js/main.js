
// Header 
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
  header.classList.toggle('shadow', window.scrollY > 0);
});

var swiper = new Swiper(".swiper", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
  centeredSlides:true,
  breakpoints: {
   0: {
    slidesPerview: 0,
   },
   568: {
    slidesPerview: 2,
   },
   768: {
    slidesPerview: 2,
   },
  1020: {
    slidesPerview: 3,
  },
  },
});