const imageContainer = document.querySelector(".picture-scroll");
const textContainer = document.querySelector(".description-picture");
const listImages = [];
const listTitle = [];
const listDesc = [];
const previousButton = document.querySelector(".arrow-left");
const nextButton = document.querySelector(".arrow-right");

let index = 0;


// Every five seconds we switch of image.

let intervalId = setInterval(() => {
    nextButton.click();

  }, 5000);


function addImage(src, description, title){
    const img = document.createElement("img");

    img.src = src;
    img.classList.add("image");
    imageContainer.appendChild(img);
    listImages.push(img);

    const h1 = document.createElement("title");
    h1.classList.add("title-picture");
    h1.innerText = title;
    textContainer.appendChild(h1);
    listTitle.push(h1);

    const p = document.createElement("description");
    p.classList.add("title-description");
    p.innerText = description;
    textContainer.appendChild(p);
    listDesc.push(p);




    
}

function showImage(index){
    listImages.forEach(image =>{
        image.classList.remove("active");
    });
    listImages[index].classList.add("active");
}

function showTitle(index){
    listTitle.forEach(title =>{
        title.classList.remove("active");
    });

    listTitle[index].classList.add("active");
}

function showDescription(index){
    listDesc.forEach(description =>{
        description.classList.remove("active");
    });

    listDesc[index].classList.add("active");
}


previousButton.addEventListener("click", () => {

    // We reset the interval.

    clearInterval(intervalId);

    intervalId = setInterval(() => {
      nextButton.click();
    }, 5000);

    index--;

    if(index < 0){
        index = listImages.length - 1;
    }

    showImage(index);
    showTitle(index);
    showDescription(index);
});

nextButton.addEventListener("click", () =>{

    // We reset the interval.

    clearInterval(intervalId);

    intervalId = setInterval(() => {
      nextButton.click();
    }, 5000);

    index++;

    

    if(index >= listImages.length){
        index = 0;
    }

    showImage(index);
    showTitle(index);
    showDescription(index);

    listImages[index].classList.add("transitioning-post");


    setTimeout(() => {
        listImages[index].classList.remove("transitioning-post");
    }, 1000);
});


addImage("ressources/images/test.jpg", "Here is a view from the front of the center. We are waiting for you there!", "The Centre");
addImage("ressources/images/facebook.png", "rezrze", "Ah bon ?");
addImage("ressources/images/twitter.png", "Ceci est un grand test", "BLABLABLABLA");

showImage(index);
showTitle(index);
showDescription(index);

