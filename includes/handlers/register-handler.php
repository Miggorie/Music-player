<?php

function sanitizeFormPassword($inputText){
  $inputText = strip_tags($inputText);
  //removing spaces
  return $inputText;
}

function sanitizeFormUsername($inputText){
  $inputText = strip_tags($inputText);
  //removing spaces
  $inputText = str_replace(" ","", $inputText); 
  //Creating first letter as uppercase and the rest as lowercase
  $inputText =ucfirst(strtolower($inputText));
  return $inputText;
}

function sanitizeFormString($inputText){
  $inputText = strip_tags($inputText);
  //removing spaces
  $inputText = str_replace(" ","", $inputText); 
  //Creating first letter as uppercase and the rest as lowercase
  $inputText =ucfirst(strtolower($inputText));
  return $inputText;
}


if(isset($_POST['loginButton'])){
  //login btn was pressed
}
if(isset($_POST['registerButton'])){
  //register btn was pressed
 $username = sanitizeFormUsername($_POST['username']);
 $firstName = sanitizeFormString($_POST['firstName']);
 $lastName = sanitizeFormString($_POST['lastName']);
 $email = sanitizeFormString($_POST['email']);
 $email2 = sanitizeFormString($_POST['email2']);
 $password = sanitizeFormPassword($_POST['password']);
 $password = sanitizeFormPassword($_POST['password2']);

}


?>