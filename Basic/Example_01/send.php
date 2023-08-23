<?php

$email = $_POST['email'];
$pass = $_POST['senha'];

if($email == "teste@teste.com" && $pass == "12345")
  {
  echo "login e senha correto!";
  }
else
  {
  echo "Login incorreto!";
  }