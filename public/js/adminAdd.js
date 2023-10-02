function lever(obg){
    var i = obg.id;
    if(i != 0){
        var id = 'form' + i;
        var thisForm = document.getElementById(id);
    }
    else{
        var thisForm = document.getElementById("emptyForm");
    }

    var forms = document.getElementsByClassName("form");
    for(i = 0; i < forms.length; i++){
        forms[i].style.display = 'none';
    }
    
    thisForm.style.display = 'block';
}