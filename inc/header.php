<?php
include "lib/SignSession.php";
SignSession::signinit();
include 'lib/Database.php';
$db = new Database();
include 'classes/ApplicationFrom.php';
include "classes/Clients.php";
$client = new Clients();

if (isset($_GET['signinAction']) && $_GET['signinAction'] == 'clientLogOut') {
    $getSignInAction = mysqli_real_escape_string($db->link, $_GET['signinAction']);
    if ($getSignInAction) {
      SignSession::signdestroy();
      header("Location:index.php");
    }else{
      header("Location:contact.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Private Detective Ltd in Bangladesh</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Private Detective Ltd in Bangladesh">
  <meta name="keywords" content="Private Detective in Bangladesh,pdl, pdl007, pdl007.com">
  <meta name="author" content="Private Detective Ltd">
  <!-- <link rel="icon" href="dist/img/icon.png"> -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css/style_inherit.css">
  <!-- country-calling-code-cicker-jquery-ccpicker -->
  <link rel="stylesheet" href="bower_components/country-calling-code-cicker-jquery-ccpicker/css/jquery.ccpicker.css">
  <!-- Social Media site -->
  <link rel="stylesheet" type="text/css" href="css/social.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>