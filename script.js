const animText1 = document.querySelector("#animText1");
const animText2 = document.querySelector("#animText2");
const animText3 = document.querySelector("#animText3");



const txt = "Salut, c'est L-FÈJ.P";
const txt2 = "Je suis ";
const txt3 = "musicien";
const txt4 = "développeur web!";


var tab = [
    150, 200, 120, 190, 150, 250, 950, 130, 80, 140, 50, 120, 110, 120, 55, 312,
    260, 386, 120, 135, 168,
];
var tab2 = [
    50, 90, 120, 85, 50, 80, 150, 130, 92, 40, 150, 60, 110, 120, 155,
    312, 260, 386, 120, 135, 168,
];

function typewriter(word, index) {
    if (index < word.length) {
        setTimeout(() => {
            animText1.innerHTML += `<span>${word[index]}</span>`;
            typewriter(txt, index + 1);
        }, tab[index]);
    }
    else  {
        setTimeout(() => {
            typewriter2(txt2, 0);
            }, 600);
    }
}
setTimeout(() => {
    typewriter(txt, 0);
}, 200);



function typewriter2(word, index) {
    if (index < word.length) {
        setTimeout(() => {
            animText2.innerHTML += `<span>${word[index]}</span>`;
            typewriter2(txt2, index + 1);
        }, tab2[index]);
    }
    else  {
       setTimeout(() => {
            typewriter3(txt3, 0);
            }, 500); 
    }
    }

function typewriter3(word, index,text4) {
    if (index < word.length) {
        setTimeout(() => {
            animText3.innerHTML += `<span>${word[index]}</span>`;
            typewriter3(txt3, index + 1);
        }, tab2[index]);
    }
        else  {
            setTimeout(() => {
                erase();
            }, 500); 
        } 
}

function erase() {
    animText3.style.textDecoration = "line-through";
 setTimeout(() => {
     Maj();
 }, 500); 

    
}

function Maj()  {
    animText3.style.textDecoration = "none";
    animText3.innerHTML = "";
    animText3.style.color = "red";
    typewriter4(txt4, 0);
}

function typewriter4(word, index) {
     
     if (index < word.length) {
         setTimeout(() => {
             animText3.innerHTML += `<span>${word[index]}</span>`;
             typewriter4(txt4, index + 1);
         }, tab2[index]);
     }
 }
