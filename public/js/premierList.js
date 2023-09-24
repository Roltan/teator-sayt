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

function PremierList1(obg){
    var i = obg.name

    var idB = 'premierBut1'+i;
    var idT = 'premierText1'+i
    var But = document.getElementById(idB);
    var TextList = document.getElementById(idT);
    console.log(idB)

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

function buyTicket(obj){
    var i = obj.name
}