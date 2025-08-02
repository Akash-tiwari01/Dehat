//````````````````````````````about US script ```````````````````````````````

// navtabs

const navButtons = document.querySelectorAll('.aboutarea-nav-btn');
let currentTab = document.querySelector('.tab-pane.active');
let prevButton = navButtons[0]


navButtons.forEach(button => {
button.addEventListener('click', () => {
  const targetId = button.getAttribute('data-target');
  const newTab = document.getElementById(targetId);
  if (newTab !== currentTab) {
    currentTab.classList.remove('active');
    newTab.classList.add('active');
    currentTab = newTab;
    if(prevButton !== button)
    {
        button.classList.add('active')
        prevButton.classList.remove('active')
    }
    prevButton = button
  }
});
});
