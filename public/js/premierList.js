function disablePr(i){
    var idB1 = 'premierBut1'+i
    var idB2 = 'premierBut2'+i
    var idT1 = 'premierText1'+i
    var idT2 = 'premierText2'+i

    var But1 = document.getElementById(idB1);
    var But2 = document.getElementById(idB2);
    var TextList1 = document.getElementById(idT1);
    var TextList2 = document.getElementById(idT2);


    But1.classList.remove("im-in");
    But2.classList.remove("im-in");

    TextList1.style.display = 'none';
    TextList2.style.display = 'none';
}

function PremierList1(obj){
    var i = obj.name

    var idB = 'premierBut1'+i;
    var idT = 'premierText1'+i
    var But = document.getElementById(idB);
    var TextList = document.getElementById(idT);

    disablePr(i);
    But.classList.add("im-in");
    TextList.style.display = 'block';
}

function PremierList2(obj){
    var i = obj.name

    var idB = 'premierBut2'+i;
    var idT = 'premierText2'+i
    var But = document.getElementById(idB);
    var TextList = document.getElementById(idT);
    disablePr(i);
    But.classList.add("im-in");
    TextList.style.display = 'block';
}

function buyTicket(obj, k){
    var i = obj.name
    var idB = "buyPremier" + i
    var idI = "infoPremier" + i
    var buy = document.getElementById(idB);
    var info = document.getElementById(idI);

    if(k == 1){
        buy.style.display = 'block'
        info.style.display = 'none'
    }
    else{
        buy.style.display = 'none'
        info.style.display = 'block'
    }
}

function picChair(obj){
    if(!obj.classList.contains('engaged')){
        var mesta = document.getElementsByClassName('pic')
        for(let j = 0; j < mesta.length; j++){
            mesta[j].classList.remove('pic')
        }

        obj.classList.add("pic")

        var chair = obj.id
        chair = String(chair)
        var n = chair.length

        var mesta = document.getElementsByClassName('chairText')
        var row = document.getElementsByClassName('payOutRow')
        var column = document.getElementsByClassName('payOutColumn')
        if(n == 2){
            for(let j = 0; j < mesta.length; j++){
                mesta[j].textContent = chair[0] + ' ряд ' + chair[1] + ' место'
                row[j].value = ''+chair[0]
                column[j].value = ''+chair[1]
            }
        }
        if(n == 3){
            for(let j = 0; j < mesta.length; j++){
                mesta[j].textContent = chair[0] + ' ряд ' + chair[1] + chair[2] + ' место'
                row[j].value = ''+chair[0]
                column[j].value = ''+chair[1] + chair[2]
            }
        }
    }
}