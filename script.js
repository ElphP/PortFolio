// création d'une table de valeur aléatoire pour le delay entre lettres
var tab = [];
for (i = 0; i < 54; i++) {
    tab[i] = Math.floor(Math.random() * 120 + 50);
}
// temps "d'arrêts"
tab[6] = 580;
tab[21] = 550;
tab[29] = 320;
tab[37] = 920;
tab[54] = 850;
var i = 0;

const text1 = "Salut, c'est L-FÈJ.P,";
const text2 = "je suis ";
const text3 = "musicien";
const text4 = "développeur web!";
var cond2 = text1.length + text2.length;
var cond3 = text1.length + text2.length + text3.length;

function type() {
    if (i < text1.length) {
        document.getElementById("animText1").innerHTML += text1.charAt(i);
        i++;
        setTimeout(type, tab[i]);
    } else if (i < cond2) {
        document.getElementById("animText2").innerHTML += text2.charAt(
            i - text1.length
        );
        i++;
        setTimeout(type, tab[i]);
    } else if (i < cond3) {
        document.getElementById("animText3").innerHTML += text3.charAt(
            i - (text1.length + text2.length)
        );
        i++;
        setTimeout(type, tab[i]);
    } else if (i == cond3) {
        document.getElementById("animText3").style.textDecoration =
            "line-through";
        setTimeout(type, 1200);
        i++;
    } else if (i == cond3 + 1) {
        setTimeout(reset, 400);
        setTimeout(type, 550);
        i++;
    } else if (i < cond3 + text4.length + 2) {
        document.getElementById("animText3").innerHTML += text4.charAt(
            i - (text1.length + text2.length + text3.length + 2)
        );
        i++;
        setTimeout(type, tab[i]);
    }
}

function reset() {
    document.getElementById("animText3").innerHTML = "";
    document.getElementById("animText3").style.textDecoration = "none";
    document.getElementById("animText3").style.color = "red";
}

type();

// Horloge
var span = document.getElementsByClassName("sec");

setInterval(affichDH, 1000);

function affichDH() {
    var d = new Date();
    var date = "";
    var heure = "";
    switch (d.getDay()) {
        case 0:
            date = "Dimanche ";
            break;
        case 1:
            date = "Lundi ";
            break;
        case 2:
            date = "Mardi ";
            break;
        case 3:
            date = "Mercredi ";
            break;
        case 4:
            date = "Jeudi ";
            break;
        case 5:
            date = "Vendredi ";
            break;
        case 6:
            date = "Samedi ";
            break;
        default:
            date = "Erreur ";
            break;
    }

    date += d.getDate();
    switch (d.getMonth()) {
        case 0:
            date += " janvier ";
            break;
        case 1:
            date += " février ";
            break;
        case 2:
            date += " mars ";
            break;
        case 3:
            date += " avril ";
            break;
        case 4:
            date += " mai ";
            break;
        case 5:
            date += " juin ";
            break;
        case 6:
            date += " juillet ";
            break;
        case 7:
            date += " août ";
            break;
        case 8:
            date += " septembre ";
            break;
        case 9:
            date += " octobre ";
            break;
        case 10:
            date += " novembre ";
            break;
        case 11:
            date += " décembre ";
            break;
        default:
            date += " Erreur ";
            break;
    }

    date += d.getFullYear();
    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();

    // gestion des 0 de l'heure

    if (h < 10) {
        h = "0" + h;
    }

    if (m < 10) {
        m = "0" + m;
    }
    if (s < 10) {
        s = "0" + s;
    }
    heure = h + " : " + m + " : " + s;
    document.getElementById("date").innerHTML = date;
    document.getElementById("heure").innerHTML = heure;

    //    gestion des petits carrés lumineux

    if (s == 1) {
        for (j = 0; j < 60; j++) {
            span[j].style.visibility = "hidden";
        }
        span[s - 1].style.visibility = "visible";
    } else if (s == 0) {
        span[59].style.visibility = " visible";
    } else {
        span[s - 1].style.visibility = "visible";
    }
}

// fenetre modale dialog

const openModal= document.querySelector(".openModal");
const closeModal= document.querySelector(".closeModal");
const modal= document.getElementById('modal');


openModal.addEventListener('click', () => {
    modal.showModal();  
})
closeModal.addEventListener('click', ()=> {
    modal.close();
})

//toggle menu burger

function ToggleMenu() {
    const burger = document.querySelector(".burger");
    const nav_mobile = document.querySelector(".menuDeroul");
    
     burger.addEventListener("click", () => {
         burger.classList.toggle("appnav");
     });
    
    burger.addEventListener("click", () => {
        nav_mobile.classList.toggle("appnav2");
    });
}
ToggleMenu();

function changeStyleForm() {
    document.getElementById("website").style.display = "none";
}

