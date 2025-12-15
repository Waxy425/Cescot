function primo_rosso() {
    let i=0;
    let colora1=document.getElementsByClassName("colora1");
    while (i<11){
        colora1[i].style.backgroundColor = 'red';
        i++;
}
};
function secondo_rosso() {
    let i=0;
    let colora=document.getElementsByClassName("colora2");
    while (i<11){
        colora[i].style.backgroundColor = 'red';
        i++;
}
};
function tutti_rosso() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    let colora1=document.getElementsByClassName("colora2");
    while (i<colora.length){
        colora[i].style.backgroundColor = 'red';
        i++;}
    i=0;
    while (i<colora1.length){
        colora1[i].style.backgroundColor = 'red';
        i++;
}
};
function primo_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    while (i<11){
        colora[i].style.backgroundColor = 'blue';
        i++;
}
};
function secondo_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora2");
    while (i<11){
        colora[i].style.backgroundColor = 'blue';
        i++;
}
};
function tutti_blu() {
    let i=0;
    let colora=document.getElementsByClassName("colora1");
    let colora1=document.getElementsByClassName("colora2");
    while (i<colora.length){
        colora[i].style.backgroundColor = 'blue';
        i++;}
    i=0;
    while (i<colora1.length){
        colora1[i].style.backgroundColor = 'blue';
        i++;
}
};