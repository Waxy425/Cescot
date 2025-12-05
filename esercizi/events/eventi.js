
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