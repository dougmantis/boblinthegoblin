<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $_SESSION['authenticated'] = $dao->userExist($email, $password);

  if ($_SESSION['authenticated']) {
     header('Location: index.php');
     exit;
  } else {
     header('Location: Login.php');
     exit;
  }
