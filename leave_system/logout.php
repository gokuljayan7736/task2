<?php
  session_start();
  //  session_destroy();
  unset($_SESSION['admin']);
  unset($_SESSION['managing_team']);
  unset($_SESSION['staff']);
  unset($_SESSION['training']);
  header("location:login.php");


