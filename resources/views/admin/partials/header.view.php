<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ChessVicky | Dashboard</title>

  <!-- Site Icons -->
  <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png'); ?>">
  <link rel="icon" href="<?= url('assets/img/icon.ico'); ?>">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Framework -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.min.css'); ?>">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="<?= url('assets/icons/entypo.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/flag-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/material-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/icons/weather-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/plugins/summernote/summernote.min.css'); ?>">


  <!-- Plugins -->
  <link rel="stylesheet" href="<?= url('assets/css/plugins.css'); ?>">

  <!-- Main Template CSS -->
  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.custom.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= url('assets/css/helper.css'); ?>">

  <link rel="stylesheet" href="<?= url('assets/css/chessboard.css'); ?>" />
</head>


<body>

  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="rs-wrapper">

<?php view("partials/nav", compact('page')); ?>


  
  