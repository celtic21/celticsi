<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shorcut icon"  href="<?php echo base_url() ?>assets/img/umk/favicon-16x16.png">
  <title><?php echo $title ?>  &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>vendor/stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">



  <style type="text/css" media="screen">
    :root {
    --primary-color: #302AE6;
    --secondary-color: #536390;
    --font-color: #424242;
    --bg-color: #F4F6F9;
    --heading-color: #292922;
    --bgcardcolor:  #fff;
    --bgheadcolor:  #fff;
    --formbg: #fff;
    --formbc: black;
    --sidebarco: #fff;
    --navbg:#6777ef ;
    --h1: #424242;
    --lia: #78828a;
    --liaktif: #6777ef;
    --fontform: #2b2f33;
}
[data-theme="dark"] {
    --primary-color: #fff;
    --secondary-color: #fff;
    --font-color: #e1e1ff;
    --bg-color: #161625;
    --heading-color: #041d38;
    --bgcardcolor:  #041d38;
    --bgheadcolor:  #041d38;
    --formbg: #183257;
    --formbc: #183257;
    --sidebarco: #041d38;
    --navbg: #161625 ;
    --hoverbg: #567aa3;
    --h1: #fff;
    --lia: #fff;
    --liaktif: #1a2696;
    --fontform: #83b8ec;
}
body {
    background-color: var(--bg-color);
    color: var(--font-color);
    /*styles tambahan*/
    .....
}
h1 {
    color: var(--secondary-color);
    /*styles tambahan*/
    .....
}
a {
    color: var(--primary-color);
    /*styles tambahan*/
    .....
}
.card {
   background-color: var(--bgcardcolor);
}

.section .section-header {
    background-color: var(--bgheadcolor);
}

.navbar {
    background-color: var(--navbgcol);
}

.form-control, .input-group-text, .custom-select, .custom-file-label {
    background-color: var(--formbg);
    border-color: var(--formbc);
}

.main-sidebar  {
    background-color: var(--sidebarco);
}

.navbar-bg {
  background-color: var(--navbg);
  }

.main-sidebar .sidebar-menu li a:hover {
    background-color: var(--hoverbg);
}

.section .section-header h1 {
    color: var(--h1);
}
.main-sidebar .sidebar-menu li a {
    letter-spacing: .3px;
    color: var(--lia);
}
.main-sidebar .sidebar-menu li.active a {
   
    color: var(--liaktif);
    font-weight: 600;
}
.form-control {
    
    color: var(--fontform);
    
}






.theme-switch-wrapper {
  display: flex;
  align-items: center;
  em {
    margin-left: 10px;
    font-size: 1rem;
  }
}
.theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
}
.theme-switch input {
  display:none;
}
.slider {
  background-color: #ccc;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}
.slider:before {
  background-color: #fff;
  bottom: 4px;
  content: "";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: .4s;
  width: 26px;
}
input:checked + .slider {
  background-color: #66bb6a;
}
input:checked + .slider:before {
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
  </style>
  </head>

