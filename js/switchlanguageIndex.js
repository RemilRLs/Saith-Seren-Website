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

/* Index.php*/
const subscribeEl2 = document.querySelector('.subscribeText2');
const titleEl = document.querySelector('.title');//element
const  descriptionEl = document.querySelector('.welshDescrip');//element 
const subscribeSupportEl = document.querySelector('.subscribeSupport');//element 
const descriptionSubscribeEl = document.querySelector('.descriptionSubscribe');//element 

const subscribeNewsLetterEl = document.querySelector('.subscribeNewsLetter');//element 
const descriptionSubscribeNewsLetterEl = document.querySelector('.descriptionSubscribeNewsLetter');//element 

const readmoreEl = document.querySelector('.readmore');//element 
const contactUsEl = document.querySelector('.contactUs');//element
const openingTimeEl = document.querySelector('.openingTime');//element
const openingEl = document.querySelector('.opening');//element




welsh.addEventListener('click', () => {
    
    selectionLangList.innerHTML = '<img src="ressources/icons/wales.png"> <a>Welsh</a>';
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
    subscribeEl2.textContent = data[attr].subscribeText2;

    titleEl.textContent = data[attr].title;
    descriptionEl.textContent = data[attr].welshDescrip;
    subscribeSupportEl.textContent = data[attr].subscribeSupport;
    descriptionSubscribeEl.textContent = data[attr].descriptionSubscribe;


    subscribeNewsLetterEl.textContent = data[attr].subscribeNewsLetter;
    descriptionSubscribeNewsLetterEl.textContent = data[attr].descriptionSubscribeNewsLetter;

    readmoreEl.textContent = data[attr].readmore;
    contactUsEl.textContent = data[attr].contactUs;

    openingTimeEl.textContent = data[attr].openingTime;
    openingEl.textContent = data[attr].opening;

 
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

    titleEl.textContent = data[attr].title;
    descriptionEl.textContent = data[attr].welshDescrip;
    subscribeSupportEl.textContent = data[attr].subscribeSupport;
    descriptionSubscribeEl.textContent = data[attr].descriptionSubscribe;

    subscribeNewsLetterEl.textContent = data[attr].subscribeNewsLetter;
    descriptionSubscribeNewsLetterEl.textContent = data[attr].descriptionSubscribeNewsLetter;

    readmoreEl.textContent = data[attr].readmore;
    contactUsEl.textContent = data[attr].contactUs;

    openingTimeEl.textContent = data[attr].openingTime;
    openingEl.textContent = data[attr].opening;

 
});


var data={
    "english":{
        "home" :"Home",
        "calendar":"Calendar",
        "picture":"Picture",
        "centre":"The Centre",
        "contact":"Contact",
        "subscribeText":"Subcribe",
        "subscribeText2":"Subscribe",
        
        "title" :"Welsh Culture",
        "welshDescrip":"You are proud or interested in Welsh culture then you have come to the right place! Here",
        "subscribeSupport":"Support Us",
        "descriptionSubscribe":"Become a member of Saith Seren for £10 a month, support us in our aim to promote Welsh language and culture",
        
        "subscribeNewsLetter":"Subscribe to our Newsletter!",
        "descriptionSubscribeNewsLetter":"Subscribe to our newsletter to stay informed about news related to Welsh culture.",
       
        "readmore":"Read More",
        "contactUs":"Contact Us",

        "openingTime":"Opening Time",
        "opening":"Open Monday through Friday  4:30 - 11:00 Saturday until midnight",
        
       
    },
    
    "welsh": {
        "home" :"Cartref",
        "calendar":"Calendr",
        "picture":"Llun",
        "centre":"Y Ganolfan",
        "contact":"Cysylltwch",
        "subscribeText":"Tanysgrifio",
        "subscribeText2":"Tanysgrifio",
       
        "title" :"Diwylliant Cymreig",
        "welshDescrip":"Rydych chi'n falch neu â diddordeb yn niwylliant Cymru, yna rydych chi wedi dod i'r lle iawn! Yma",
        "subscribeSupport":"Cefnogwch ni",
        "descriptionSubscribe":"Dewch yn aelod o Saith Seren am £10 y mis, cefnogwch ni yn ein nod o hybu’r iaith Gymraeg a’i diwylliant",
        
        "subscribeNewsLetter":"Tanysgrifiwch i'n Cylchlythyr!",
        "descriptionSubscribeNewsLetter":"Tanysgrifiwch i'n cylchlythyr i gael gwybod am newyddion am ddiwylliant Cymru.",
       
        "readmore":"Darllen Mwy",
        "contactUs":"Cysylltwch â Ni",
        "openingTime":"Amser Agor",
        "opening":"Ar agor o ddydd Llun i ddydd Gwener 4:30 - 11:00 dydd Sadwrn tan hanner nos",
        
       
    
    
    },
};
