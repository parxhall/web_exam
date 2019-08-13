var form  = document.getElementById("request");
    
for(var i = 0; i < form.extras.length; i++) {
    if (form.extras[i].checked){
       //this block of code is executed 
       console.log("You selected" + form.extras[i].value);  
    }
}
