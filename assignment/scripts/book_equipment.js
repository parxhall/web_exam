//this is the javascript for selecting multiple boxes
var form  = document.getElementById("request");
    
for(var i = 0; i < form.extras.length; i++) {
    if (form.extras[i].checked){
       console.log("You selected" + form.extras[i].value);  
    }
}

//this creates an event listener on my form
var request_form = document.getElementById("request"); 
request_form.addEventListener("send", validateForm);

request_form.person_name.value;
if(request_form.person_name.value == ""){

}
request_form.collect_date.value;
if(request_form.person_name.value == ""){
    
}
request_form.return_date.value;
if(request_form.person_name.value == ""){
    
}


/*

*/