function checkButton() {    
    var btns = document.querySelectorAll('input[type="radio"]')
    for(var i=0;i<btns.length;i++){
      if(btns[i].value=="Hadir")
        btns[i].checked=true;
     }
}