function disable(){
    textBt1.classList.remove("im-in");
    textBt2.classList.remove("im-in");
    textBt3.classList.remove("im-in");
    textBt4.classList.remove("im-in");

    modalText1.style.display = 'none';
    modalText2.style.display = 'none';
    modalText3.style.display = 'none';
    modalText4.style.display = 'none';
}

function inModal1(){
    disable();
    textBt1.classList.add("im-in");
    modalText1.style.display = 'block';
}

function inModal2(){
    disable();
    textBt2.classList.add("im-in");
    modalText2.style.display = 'grid';
}

function inModal3(){
    disable();
    textBt3.classList.add("im-in");
    modalText3.style.display = 'block';
}

function inModal4(){
    disable();
    textBt4.classList.add("im-in");
    modalText4.style.display = 'block';
}