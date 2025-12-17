document.addEventListener("DOMContentLoaded", sfondo_div);
function sfondo_div() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    let colora2=document.getElementsByClassName("colora2");
    let colora3=document.getElementsByClassName("colora3");
    while (i<colora1.length){
        colora1[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;}
    i=0;
    while (i<colora2.length){
        colora2[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;}
    i=0;
    while (i<colora3.length){
        colora3[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;
}
};



function primo_rosso() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'red';
        i++;
}
};
function secondo_rosso() {
    let i=0;
    let colora=document.getElementsByClassName("colora2");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'red';
        i++;
    }
};
function terzo_rosso() {
    let i=0;
    let colora=document.getElementsByClassName("colora3");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'red';
        i++;
}
};
function tutti_rosso() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    let colora2=document.getElementsByClassName("colora2");
    let colora3=document.getElementsByClassName("colora3");
    while (i<colora1.length){
        colora1[i].style.backgroundImage = 'none';
        colora1[i].style.backgroundColor = 'red';
        i++;}
    i=0;
    while (i<colora2.length){
        colora2[i].style.backgroundImage = 'none';
        colora2[i].style.backgroundColor = 'red';
        i++;}
    i=0;
    while (i<colora3.length){
        colora3[i].style.backgroundImage = 'none';
        colora3[i].style.backgroundColor = 'red';
        i++;
}
};
function primo_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'blue';
        i++;
}
};
function secondo_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora2");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'blue';
        i++;
}
};
function terzo_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora3");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'blue';
        i++;
}
};
function tutti_blu() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    let colora2=document.getElementsByClassName("colora2");
    let colora3=document.getElementsByClassName("colora3");
    while (i<colora1.length){
        colora1[i].style.backgroundImage = 'none';
        colora1[i].style.backgroundColor = 'blue';
        i++;}
    i=0;
    while (i<colora2.length){
        colora2[i].style.backgroundImage = 'none';
        colora2[i].style.backgroundColor = 'blue';
        i++;}
    i=0;
    while (i<colora3.length){
        colora3[i].style.backgroundImage = 'none';
        colora3[i].style.backgroundColor = 'blue';
        i++;
}
};
function primo_giallo() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'yellow';
        i++;
}
};
function secondo_giallo() {
    let i=0;
    let colora=document.getElementsByClassName("colora2");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'yellow';
        i++;
}
};
function terzo_giallo() {
    let i=0;
    let colora=document.getElementsByClassName("colora3");
    while (i<colora.length){
        colora[i].style.backgroundImage = 'none';
        colora[i].style.backgroundColor = 'yellow';
        i++;
}
};
function tutti_giallo() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    let colora2=document.getElementsByClassName("colora2");
    let colora3=document.getElementsByClassName("colora3");
    while (i<colora1.length){
        colora1[i].style.backgroundImage = 'none';
        colora1[i].style.backgroundColor = 'yellow';
        i++;}
    i=0;
    while (i<colora2.length){
        colora2[i].style.backgroundImage = 'none';
        colora2[i].style.backgroundColor = 'yellow';
        i++;}
    i=0;
    while (i<colora3.length){
        colora3[i].style.backgroundImage = 'none';
        colora3[i].style.backgroundColor = 'yellow';
        i++;
}
};
function reset() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    let colora2=document.getElementsByClassName("colora2");
    let colora3=document.getElementsByClassName("colora3");
    while (i<colora1.length){
        colora1[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;}
    i=0;
    while (i<colora2.length){
        colora2[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;}
    i=0;
    while (i<colora3.length){
        colora3[i].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
        i++;
}
};

function sorry() {
    const img = document.createElement('img');
    img.src = 'https://info.grantmcgregor.co.uk/hubfs/we-are-sorry-microsoft-blue-screen-sad-smiley.jpg';
    img.classList.add('immagine-fullscreen');
    img.id = 'immagine-display';

    const btnChiudi = document.createElement('button');
    btnChiudi.textContent = 'X';
    btnChiudi.classList.add('btn-chiudi');
    btnChiudi.id = 'btnChiudi';
};


function sorry() {
    const img = document.getElementById("myImage");

    // 1. Rendiamo l'immagine visibile
    img.style.display = "block";

    // 2. Attiviamo il fullscreen
    if (img.requestFullscreen) {
        img.requestFullscreen();
    } else if (img.webkitRequestFullscreen) { // Safari
        img.webkitRequestFullscreen();
    } else if (img.msRequestFullscreen) { // IE11
        img.msRequestFullscreen();
    }
}