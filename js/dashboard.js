const overview = document.querySelector('.overview-more');
const newsletter = document.querySelector('.newsletter-more');
const calendar = document.querySelector('.calendar-more');
const user = document.querySelector('.user-more');
const image = document.querySelector('.image-more');

const buttonToggle = document.querySelector('.button-overview');
const buttonToggleNewsletter = document.querySelector('.button-newsletter');
const buttonToggleCalendar = document.querySelector('.button-calendar');
const buttonToggleUser = document.querySelector('.button-user');
const buttonToggleImage = document.querySelector('.button-image');

var divOverviewHeading = document.querySelector('.overview h3');
var divNewlsetterHeading = document.querySelector('.newsletter h3');
var divCalendarHeading = document.querySelector('.calendar h3');
var divUserHeading = document.querySelector('.user h3');
var divImageHeading = document.querySelector('.image h3');


buttonToggle.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = overview.getAttribute('data-visible'); // We get the attribute of overview div.

    if(visibility === "false"){
        overview.setAttribute('data-visible', true);
        divOverviewHeading.classList.add('white-text');

        calendar.setAttribute('data-visible', false);
        newsletter.setAttribute('data-visible', false);
        user.setAttribute('data-visible', false);

        divNewlsetterHeading.classList.remove('white-text');
        divCalendarHeading.classList.remove('white-text');
        divUserHeading.classList.remove('white-text');
    }   
    else{
        overview.setAttribute('data-visible', false);
        divOverviewHeading.classList.remove('white-text');
    }
}); 

buttonToggleNewsletter.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = newsletter.getAttribute('data-visible'); // We get the attribute of newsletter div.

    if(visibility === "false"){
        newsletter.setAttribute('data-visible', true);
        divNewlsetterHeading.classList.add('white-text');

        calendar.setAttribute('data-visible', false);
        user.setAttribute('data-visible', false);
        overview.setAttribute('data-visible', false);

        divOverviewHeading.classList.remove('white-text');
        divCalendarHeading.classList.remove('white-text');
        divUserHeading.classList.remove('white-text');
    }   
    else{
        newsletter.setAttribute('data-visible', false);
        divNewlsetterHeading.classList.remove('white-text');
    }
}); 


buttonToggleCalendar.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = calendar.getAttribute('data-visible'); // We get the attribute of newsletter div.

    if(visibility === "false"){
        calendar.setAttribute('data-visible', true);
        divCalendarHeading.classList.add('white-text');

        user.setAttribute('data-visible', false);
        newsletter.setAttribute('data-visible', false);
        overview.setAttribute('data-visible', false);

        divNewlsetterHeading.classList.remove('white-text');
        divOverviewHeading.classList.remove('white-text');
        divUserHeading.classList.remove('white-text');
    }   
    else{
        calendar.setAttribute('data-visible', false);
        divCalendarHeading.classList.remove('white-text');
    }
}); 

buttonToggleUser.addEventListener('click', () => { // We listen if there is a click on the button.
    const visibility = user.getAttribute('data-visible'); // We get the attribute of newsletter div.

    if(visibility === "false"){
        user.setAttribute('data-visible', true);
        divUserHeading.classList.add('white-text');

        calendar.setAttribute('data-visible', false);
        newsletter.setAttribute('data-visible', false);
        overview.setAttribute('data-visible', false);

        divNewlsetterHeading.classList.remove('white-text');
        divOverviewHeading.classList.remove('white-text');
        divCalendarHeading.classList.remove('white-text');
    }   
    else{
        user.setAttribute('data-visible', false);
        divUserHeading.classList.remove('white-text');
    }
}); 



buttonToggleImage.addEventListener('click', () =>{
    const visibility = image.getAttribute('data-visible');

    if(visibility === "false"){
        image.setAttribute('data-visible', true);
        divImageHeading.classList.add('white-text');

        calendar.setAttribute('data-visible', false);
        newsletter.setAttribute('data-visible', false);
        overview.setAttribute('data-visible', false);
        user.setAttribute('data-visible', false);

        
        divNewlsetterHeading.classList.remove('white-text');
        divOverviewHeading.classList.remove('white-text');
        divCalendarHeading.classList.remove('white-text');
        divUserHeading.classList.remove('white-text');
        console.log("JE PASSE A TRUE");
    }
    else{

        console.log("JE PASSE A FALSE");
        image.setAttribute('data-visible', false);
        divImageHeading.classList.remove('white-text');
    }
});