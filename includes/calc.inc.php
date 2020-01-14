<?php 

  include 'class-autoload.inc.php';

  $oper =$_POST['oper'];
  $num1 =$_POST['num1'];
  $num2 =$_POST['num2'];

  $calc = new Calc($oper, $num1, $num2);
  echo $calc->calculator();

  header("location: {$_SERVER['HTTP_ORIGIN']}/simple-calc-oop-php/index.php?result={$calc->calculator()}");