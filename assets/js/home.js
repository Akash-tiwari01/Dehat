//```````````````````````````index pahe script`````````````````````

//   bottom bar script 

const bottomBarCarousel = new bootstrap.Carousel(document.querySelector('#bannerCarousel'));
const bottomBarButtons = document.querySelectorAll('.bottom-bar button');

function setSlide(index) {
  bottomBarCarousel.to(index);
  bottomBarButtons.forEach(btn => btn.classList.remove('active'));
  bottomBarButtons[index].classList.add('active');
}

document.querySelector('#bannerCarousel').addEventListener('slid.bs.carousel', function (e) {
  bottomBarButtons.forEach(btn => btn.classList.remove('active'));
  bottomBarButtons[e.to].classList.add('active');
});
