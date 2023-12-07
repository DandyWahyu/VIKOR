<?php
include'functions.php';
if(empty($_SESSION['login']))
  header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Aplikasi Sistem Pendukng Keputusan Penilaian Guru Terbaik
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="?m=home" class="simple-text logo-normal">
          VIKOR
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php if ($mod == "home") echo "class='nav-item active'"; ?> class="nav-item  ">
            <a class="nav-link" href="?m=home">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php if ($mod == "kriteria") echo "class='nav-item active'"; ?> class="nav-item ">
            <a class="nav-link" href="?m=kriteria">
              <i class="material-icons">
                line_weight
              </i>
              <p>Kriteria</p>
            </a>
          </li>
          <li <?php if ($mod == "alternatif") echo "class='nav-item active'"; ?> class="nav-item ">
            <a class="nav-link" href=".?m=alternatif">
              <i class="material-icons">people</i>
              <p>Alternatif</p>
            </a>
          </li>
          <li <?php if ($mod == "rel_alternatif") echo "class='nav-item active'"; ?> class="nav-item ">
            <a class="nav-link" href=".?m=rel_alternatif">
              <i class="material-icons">person_add</i>
              <p>Nilai Alternatif</p>
            </a>
          </li>
          <li <?php if ($mod == "hitung") echo "class='nav-item active'"; ?> class="nav-item ">
            <a class="nav-link" href=".?m=hitung">
              <i class="material-icons">analytics</i>
              <p>Hitung</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php
    if (file_exists($mod . '.php'))
      include $mod . '.php';
    else
      include 'home.php';
    ?>
    <?php include('inc/footer.php') ?>