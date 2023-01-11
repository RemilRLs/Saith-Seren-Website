const overview = document.querySelector('.overview-more');
const buttonToggle = document.querySelector('.button-overview');


buttonToggle.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = overview.getAttribute('data-visible'); // We get the attribute of overview div.

    if(visibility === "false"){
        overview.setAttribute('data-visible', true);
    }   
    else{
        overview.setAttribute('data-visible', false);
    }
}); 