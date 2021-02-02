
let down = document.getElementById("btn1");
let up = document.getElementById("btn2");

let section1 = document.querySelector(".section1");
let section3 = document.querySelector(".section3");

down.addEventListener("click", go_down);
up.addEventListener("click", go_up);

function go_down(e){
    let distance =  section1.offsetTop + section3.offsetTop;
    scrollBy({top:distance, behavior: "smooth"});
}

function go_up(e){
    let distance =  -(section1.offsetTop + section3.offsetTop);
    scrollBy({top:distance, behavior: "smooth"});
}

// const body = document.body;
// const jsScroll = document.getElementsByClassName(".container")[0];
// const height =  jsScroll.getBoundingClientRect().height -1;
// const speed =  0.25;

// var offset =  0;

// body.style.height =  Math.floor(height) + "px";
// function smoothScrolling(){
//     offset =  (window.pageYOffset - offset) + speed;
//     var scroll =  "translateT(-"+offset+"px) translateZ(0)";
//     jsScroll.style.transform = scroll;

//     raf =  requestAnimationFrame(smoothScrolling);
// }

// smoothScrolling();