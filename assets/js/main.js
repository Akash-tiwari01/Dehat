//```````````````````````````````navbar js``````````````````````````````
  const openMenu = document.getElementById('openMenu');
  const closeMenu = document.getElementById('closeMenu');
  const slideNav = document.getElementById('slideNav');

  openMenu.addEventListener('click', () => {
    slideNav.classList.add('open');
  });

  closeMenu.addEventListener('click', () => {
    slideNav.classList.remove('open');
  });

  // Optional: close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!slideNav.contains(e.target) && !openMenu.contains(e.target)) {
      slideNav.classList.remove('open');
    }
  });





  window.addEventListener("load", function () {
    const loader = document.getElementById("preloader");
    const content = document.getElementById("main-content");
    console.log(content);
    loader.style.display = "none";
    content.style.display = "block";
  });




