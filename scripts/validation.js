"use strict";

function loginvalidate() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var error_message = "";
  if (email == "") {
    error_message += "Username is required. ";
  }
  if (password == "") {
    error_message += "Password is required. ";
  }
  if (error_message != "") {
    alert(error_message);
  } else {
    //sending all values to the server
    var form = document.getElementById("myForm");
    form.submit();
  }
}
function signupValidate() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("confirm_password").value;
  var address = document.getElementById("address").value;
  var error_message = "";

  if (name == "") {
    error_message += "Firstname is required. ";
  }
  if (phone == "") {
    error_message += "Phone Number is required. ";
  }
  if (address == "") {
    error_message += "Address is required. ";
  }
  if (email == "") {
    error_message += "Email is required. ";
  }
  if (password == "") {
    error_message += "Password is required. ";
  }
  if (confirm_password == "") {
    error_message += "Confirm Password is required. ";
  }
  if (password != confirm_password) {
    error_message += "Password and Confirm Password do not match.";
  }
  if (error_message != "") {
    alert(error_message);
  } else {
    //sending all values to the server
    var form = document.getElementById("signupForm");
    form.submit("../control/signup_controller.php");
  }
}
