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


// accordian script

const accordianButton = document.querySelectorAll(".accordian_button")
const accordianContent = document.querySelectorAll(".accordian_content")
let currAccordianButton = null
let currentAccordianElement = null

accordianButton.forEach(button => {
  button.addEventListener("click",(event)=>{
    let targetId = button.getAttribute('data-target')
    const element = document.getElementById(targetId)
    if(currAccordianButton === null)
    {
      button.children[1].classList.toggle('hide')
      button.children[0].classList.toggle('hide')
      element.classList.toggle('active')
      currAccordianButton = button
      currentAccordianElement = element
      
    }
    else if(currAccordianButton === button)
    {
      button.children[1].classList.toggle('hide')
      button.children[0].classList.toggle('hide')
      element.classList.toggle('active')
      currAccordianButton = null
      currentAccordianElement = null
    }
    else{
      currAccordianButton.children[0].classList.toggle('hide')
      currAccordianButton.children[1].classList.toggle('hide')
      button.children[1].classList.toggle('hide')
      button.children[0].classList.toggle('hide')
      element.classList.toggle('active')
      currentAccordianElement.classList.toggle('active')
      currAccordianButton = button
      currentAccordianElement = element


    }
  })
})