const primaryNav = document.querySelector('.menu-navigation');
const navToggle = document.querySelector('.mobile-nav-toggle');
const navShow = document.querySelector('.navbar');

navToggle.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = primaryNav.getAttribute('data-visible'); // We listen the attribute of the menu-navigation.

    if(visibility === "false"){
        primaryNav.setAttribute('data-visible', true);
        navToggle.setAttribute('aria-expanded', true);
    }   
    else{
        primaryNav.setAttribute('data-visible', false);
        navToggle.setAttribute('aria-expanded', false);
    }
}); 

primaryNav.addEventListener('scroll', () =>{ // We check if the user scroll.

})

var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) { // If the user scroll down the current will be lower than the previous one.
        navShow.setAttribute('data-visible', false); // The navbar is not display.
  } else {
        navShow.setAttribute('data-visible', true); // The navbar is display.
  } 
  prevScrollpos = currentScrollPos;
}