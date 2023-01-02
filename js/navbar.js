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

  if (prevScrollpos > currentScrollPos) {
        navShow.setAttribute('data-visible', false);
  } else {
        navShow.setAttribute('data-visible', true);
  } 
  prevScrollpos = currentScrollPos;
}