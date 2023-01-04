function addEventCalendar(date, title, description, hour){


    // Creation of the container (event class).

    const eventDiv = document.createElement('div');
    eventDiv.classList.add('event');


    // Creation of the sub div.

    const dateDivEvent = document.createElement('div');
    dateDivEvent.classList.add('date-event');

    const descDivEvent = document.createElement('div');
    descDivEvent.classList.add('desc-event');

    const titleDivEvent = document.createElement('div');
    titleDivEvent.classList.add('title-event');

    const descripDivEvent = document.createElement('div');
    descripDivEvent.classList.add('description-event');

    const hourDivEvent = document.createElement('div');
    hourDivEvent.classList.add('hour-event');

    dateDivEvent.innerHTML = `<h3 class="date">${date}</h3>`;
    titleDivEvent.innerHTML = `<h3>${title}</h3>`;
    descripDivEvent.innerHTML = `<p>${description}</p>`;
    hourDivEvent.innerHTML = `<img src="ressources/icons/hour icon.png" alt="hour icon" class="hour-icon"><p>${hour}</p>`;

    eventDiv.appendChild(dateDivEvent);
    eventDiv.appendChild(descDivEvent);
    descDivEvent.appendChild(titleDivEvent);
    descDivEvent.appendChild(descripDivEvent);
    descDivEvent.appendChild(hourDivEvent);

    const calendarList = document.querySelector('.list-event');
    calendarList.appendChild(eventDiv);

}

addEventCalendar('29 <br>Jan', 'Ceci est un test', 'Test Jam Night', '10 AM');

addEventCalendar('29 <br>Jan', 'Ceci est un test', 'Test Jam Night', '10 AM');