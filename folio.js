function validasi(form){
    var lolos = true;
    for(i=0; i<3; i++){
    if(form[i].value.trim().lenght<=0){    
        switch (i){
            case 0: errorText= 'Name'; break;
            case 1: errorText= 'Email'; break;
            case 2: errorText= 'Message'; break;
            default:
                
        }
            if(form[i].nextElementSibling.className != 'error'){
        form[i].style.borderColor= 'red';
        form[i].insertAdjacentHTML('aterend', "<div class='error'>"+ errorText + " tidak boleh kosong </div>");
        }
        lolos = false;
        }else{
           if(form[i].nextElementSibling.className == 'error'){
            form[i].style.borderColor= 'grey';
            form[i].nextElementSibling.remove();
        }
    }
    return lolos;
}