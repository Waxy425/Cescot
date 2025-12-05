
var bottone = document.getElementById("colora");
var bottona = document.getElementById("coloraGiallo");
var div = document.getElementsByClassName("div");


bottone.addEventListener('click', colora);
bottona.addEventListener('click', coloraGiallo);

function coloraRosso(){
    div[0].style.backgroundColor = 'red';
    div[1].style.backgroundColor = 'red';
    div[2].style.backgroundColor = 'red';
    div[3].style.backgroundColor = 'red';
    div[4].style.backgroundColor = 'red';
    div[5].style.backgroundColor = 'red';
    div[6].style.backgroundColor = 'red';
    div[7].style.backgroundColor = 'red';
    div[8].style.backgroundColor = 'red';
    div[9].style.backgroundColor = 'red';
    div[10].style.backgroundColor = 'red';
    div[11].style.backgroundColor = 'red';
    div[12].style.backgroundColor = 'red';
    div[13].style.backgroundColor = 'red';
    div[14].style.backgroundColor = 'red';
    div[15].style.backgroundColor = 'red';
    div[16].style.backgroundColor = 'red';
    div[17].style.backgroundColor = 'red';
    div[18].style.backgroundColor = 'red';
    div[19].style.backgroundColor = 'red';
    div[20].style.backgroundColor = 'red';
}



function coloraGiallo(){
    div[0].style.backgroundColor = 'yellow';
    div[1].style.backgroundColor = 'yellow';
    div[2].style.backgroundColor = 'yellow';
    div[3].style.backgroundColor = 'yellow';
    div[4].style.backgroundColor = 'yellow';
    div[5].style.backgroundColor = 'yellow';
    div[6].style.backgroundColor = 'yellow';
    div[7].style.backgroundColor = 'yellow';
    div[8].style.backgroundColor = 'yellow';
    div[9].style.backgroundColor = 'yellow';
    div[10].style.backgroundColor = 'yellow';
    div[11].style.backgroundColor = 'yellow';
    div[12].style.backgroundColor = 'yellow';
    div[13].style.backgroundColor = 'yellow';
    div[14].style.backgroundColor = 'yellow';
    div[15].style.backgroundColor = 'yellow';
    div[16].style.backgroundColor = 'yellow';
    div[17].style.backgroundColor = 'yellow';
    div[18].style.backgroundColor = 'yellow';
    div[19].style.backgroundColor = 'yellow';
    div[20].style.backgroundColor = 'yellow';
}

function coloraBlu(){
    div[0].style.backgroundColor = 'blue';
    div[1].style.backgroundColor = 'blue';
    div[2].style.backgroundColor = 'blue';
    div[3].style.backgroundColor = 'blue';
    div[4].style.backgroundColor = 'blue';
    div[5].style.backgroundColor = 'blue';
    div[6].style.backgroundColor = 'blue';
    div[7].style.backgroundColor = 'blue';
    div[8].style.backgroundColor = 'blue';
    div[9].style.backgroundColor = 'blue';
    div[10].style.backgroundColor = 'blue';
    div[11].style.backgroundColor = 'blue';
    div[12].style.backgroundColor = 'blue';
    div[13].style.backgroundColor = 'blue';
    div[14].style.backgroundColor = 'blue';
    div[15].style.backgroundColor = 'blue';
    div[16].style.backgroundColor = 'blue';
    div[17].style.backgroundColor = 'blue';
    div[18].style.backgroundColor = 'blue';
    div[19].style.backgroundColor = 'blue';
    div[20].style.backgroundColor = 'blue';
}

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
        div[i].style.backgroundColor = 'red';
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