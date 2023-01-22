/*     Multi language  Javascript */

/* Button */
const selectionLangList = document.querySelector('.selected-lang');
const langList = document.querySelector('.langWrap'); // Button that contain others languages.
const welsh = document.querySelector(".welsh");
const english = document.querySelector(".english");

/*Navbar */ 
const homeEl = document.querySelector('.home');//element
const calendarEl = document.querySelector('.calendar');//element 
const pictureEl = document.querySelector('.picture');//element
const centreEl = document.querySelector('.centre');//element 
const contactEl = document.querySelector('.contact');//element  
const subscribeEl = document.querySelector('.subscribeText');//element 

const eventEl = document.querySelector('.event');//element  
const calendarEl2 = document.querySelector('.calendar2');//element  
const eventsEl = document.querySelector('.events');//element  







welsh.addEventListener('click', () => {
    
    selectionLangList.innerHTML = '<img src="ressources/logo/united-kingdom.png"> <a>Welsh</a>';
    welsh.classList.add('active');
    english.classList.remove('active');


    const attr = welsh.getAttribute('language');

    console.log(attr);

    homeEl.textContent = data[attr].home;
    calendarEl.textContent = data[attr].calendar;
    pictureEl.textContent = data[attr].picture;
    contactEl.textContent = data[attr].contact;
    centreEl.textContent = data[attr].centre;
    subscribeEl.textContent=data[attr].subscribeText;

    eventEl.textContent=data[attr].event;
    calendarEl2.textContent=data[attr].calendar2;
    eventsEl.textContent=data[attr].events;
  

   

 
});

english.addEventListener('click', () => {
    

    selectionLangList.innerHTML = '<img src="ressources/logo/united-kingdom.png"> <a>English</a>';
    english.classList.add('active');
    welsh.classList.remove('active');

    const attr = english.getAttribute('language');

    console.log(attr);

    homeEl.textContent = data[attr].home;
    calendarEl.textContent = data[attr].calendar;
    pictureEl.textContent = data[attr].picture;
    contactEl.textContent = data[attr].contact;
    centreEl.textContent = data[attr].centre;
    subscribeEl.textContent=data[attr].subscribeText;

    eventEl.textContent=data[attr].event;
    calendarEl2.textContent=data[attr].calendar2;
    eventsEl.textContent=data[attr].events;
  

 
});


var data={
    "english":{
        "home" :"Home",
        "calendar":"Calendar",
        "picture":"Picture",
        "centre":"The Centre",
        "contact":"Contact",
        "subscribeText":"Subcribe",
       
        "event":"Event",
        "calendar2":"Calendar",
        "events":"Events",
      
        
       
    },
    
    "welsh": {
        "home" :"Cartref",
        "calendar":"Calendr",
        "picture":"Llun",
        "centre":"Y Ganolfan",
        "contact":"Cysylltwch",
        "subscribeText":"Tanysgrifio",

        "event":"Digwyddiad",       
        "calendar2":"Calendr",
        "events":"digwyddiadau",
       
        
    
    
    },
};
