<?php
//session_start();
 
 include '../dbconnect.php';

if(isset($_SESSION['userid'])) {
  $userid = $_SESSION['userid'];
  
} elseif (isset($_COOKIE['userid'])) {
  $userid = $_COOKIE['userid'];
  
} else {
  $userid = '';
  
}

$res= mysql_query("SELECT fullname FROM user WHERE email='$userid' ");
$username = mysql_fetch_object($res)->fullname;

$top = mysql_query("SELECT * FROM topuser WHERE id=13 ");
$topuser=mysql_fetch_object($top);
$topusername = $topuser->name;
$topuseryear = $topuser->year;
$topusertour = $topuser->tour;

$ste = mysql_query("SELECT * FROM steps WHERE email='$userid' ");
$step=mysql_fetch_object($ste);
$calories = $step->calories;
$steps = $step->steps;
$tours = $step->tour;


$res= mysql_query("SELECT steps FROM steps WHERE email='$userid' ");
while($res2 = mysql_fetch_array($res))
    {   $sparkline[] = $res2[0];   }
$sparkline = "[200,135,667,333,526]"


?>