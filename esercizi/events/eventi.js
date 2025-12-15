
var bottone = document.getElementById("colora");
var bottona = document.getElementById("coloraGiallo");
var div = document.getElementsByClassName("div");


bottone.addEventListener('click', colora);
bottona.addEventListener('click', coloraGiallo);



function color_red(){
    let i =0;
    while (1<=19) {
        div[i].style.backgroundColor = 'red';
        i++;
    }
}
function color_yellow(){
    let i =0;
    while (1<=19) {
        div[i].style.backgroundColor = 'yellow';
        i++;
    }
}
function color_blue(){
    let i =0;
    while (1<=19) {
        div[i].style.backgroundColor = 'blue';
        i++;
    }
}
function color_green(){
    let i =0;
    while (1<=19) {
        div[i].style.backgroundColor = 'green';
        i++;
    }
}
function color_orange(){
    let i =0;
    while (1<=19) {
        div[i].style.backgroundColor = 'orange';
        i++;
    }
}

function alterna(){
    let i=0;
    while (i<19){
        div[i].style.backgroundColor = 'red';
        i++;
        div[i].style.backgroundColor = 'yellow';
        i++;
        div[i].style.backgroundColor = 'blue';
        i++;
    }
}