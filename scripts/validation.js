'use strict'

function loginvalidate(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var error = document.getElementById("error");
    var error_message = "";
    if(email == ""){
        error_message += "Username is required. ";
    }
    if(password == ""){
        error_message += "Password is required. ";
    }
    if(error_message != ""){
        alert(error_message);
    }else{
        //sending all values to the server
        var form = document.getElementById("myForm");
        form.submit();
    }
}
function registerValidate(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    var error = document.getElementById("error");
    var error_message = "";
    if(firstname == ""){
        error_message += "Firstname is required. ";
    }
    if(lastname == ""){
        error_message += "Lastname is required. ";
    }
    if(email == ""){
        error_message += "Email is required. ";
    }
    if(password == ""){
        error_message += "Password is required. ";
    }
    if(confirmpassword == ""){
        error_message += "Confirm Password is required. ";
    }
    if(password != confirmpassword){
        error_message += "Password and Confirm Password do not match. ";
    }
    if(error_message != ""){
        alert(error_message);
    }else{
        //sending all values to the server
        var form = document.getElementById("myForm");
        form.submit();
    }
}