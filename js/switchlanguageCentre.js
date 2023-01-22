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

/*thecentre.php */
const CentreEl = document.querySelector('.Centre');//element
const aboutCentreEl = document.querySelector('.aboutCentre');//element
const rentRoomEl=document.querySelector('.rentRoom');//element
const businessEl=document.querySelector('.business');//element
const hourEl=document.querySelector('.hour');//element
const hourEl2=document.querySelector('.hour2');//element
const fullDetailEl=document.querySelector('.fullDetail');//element
const fullDetailEl2=document.querySelector('.fullDetail2');//element
const charitieEl=document.querySelector('.charitie');//element



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
    
   
    CentreEl.textContent = data[attr].Centre;
    aboutCentreEl.textContent = data[attr].aboutCentre;
    rentRoomEl.textContent = data[attr].rentRoom;
    businessEl.textContent = data[attr].business;
    hourEl.textContent=data[attr].hour;
    hourEl2.textContent=data[attr].hour2;
    fullDetailEl.textContent=data[attr].fullDetail;
    fullDetailEl2.textContent=data[attr].fullDetail2;
    charitieEl.textContent=data[attr].charitie;
      
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
   
   
    CentreEl.textContent = data[attr].Centre;
    aboutCentreEl.textContent = data[attr].aboutCentre;
    rentRoomEl.textContent = data[attr].rentRoom;
    businessEl.textContent = data[attr].business;
    hourEl.textContent=data[attr].hour;
    hourEl2.textContent=data[attr].hour2;
    fullDetailEl.textContent=data[attr].fullDetail;
    fullDetailEl2.textContent=data[attr].fullDetail2;
    charitieEl.textContent=data[attr].charitie;
});


var data={
    "english":{
        "home" :"Home",
        "calendar":"Calendar",
        "picture":"Picture",
        "centre":"The Centre",
        "contact":"Contact",
        "subscribeText":"Subcribe",
        

        "Centre":"Welsh Centre",
        "aboutCentre":"The intention is to provide a focus for Welsh speakers, learners and supporters of the language and culture. There are many events including Welsh and English entertainment, Welsh lessons or a leisurely time with friends.",
        "rentRoom":"Rent a room",
        "business":"Business",
        "hour":"/ hour",
        "hour2":"/ hour",
        "charitie":"Charitites",
        "fullDetail":"Full Details",
        "fullDetail2":"Full Details",
    },
    
    "welsh": {
        "home" :"Cartref",
        "calendar":"Calendr",
        "picture":"Llun",
        "centre":"Y Ganolfan",
        "contact":"Cysylltwch",
        "subscribeText":"Tanysgrifio",
        

        "Centre":"Ganolfan Gymraeg",
        "aboutCentre":"Y bwriad yw rhoi ffocws i siaradwyr Cymraeg, dysgwyr a chefnogwyr yr iaith a diwylliant. Mae llawer o ddigwyddiadau gan gynnwys adloniant Cymraeg a Saesneg, gwersi Cymraeg neu amser hamddenol gyda ffrindiau.",
        "rentRoom":"Rhentu ystafell",
        "business":"Busnes",
        "hour":"/ awr",
        "hour2":"/ awr",
        "charitie":"Elusennau",
        "fullDetail":"Manylion Llawn",
        "fullDetail2":"Manylion Llawn",
    },
};
