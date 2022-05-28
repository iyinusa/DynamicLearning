<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
	if($page_active == 'main'){$main_act='active';}else{$main_act='';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
<title><?php echo $title; ?></title>
<link href="<?php echo base_url(); ?>favicon.png" type="image/x-icon" rel="shortcut icon">
<link href="<?php echo base_url(); ?>assets/css/master.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.3.min.js"></script>
</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"> 
  
  <div id="wrapper"> 
    
    <!-- HEADER -->
    <header class="header">
      <div class="top-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="top-header__contacts"><i class="icon stroke icon-Phone2"></i>(123) 0800 12345</div>
              <div class="top-header__contacts"><i class="icon stroke icon-Mail"></i><a href="mailto:info@1stchoicedynamic.com">info@1stchoicedynamic.com</a></div>
              <!--<div class="top-header__link">
                <button class="btn-header btn-effect">LATEST</button>
                <span>We have added new courses today ...</span> </div>-->
              <div class="header-login"> <a class="header-login__item" href="javascript:void(0);"><i class="icon stroke icon-User"></i>Sign In</a> <a class="header-login__item" href="javascript:void(0);">Register</a> </div>
            </div>
            <!-- end col  --> 
          </div>
          <!-- end row  --> 
        </div>
        <!-- end container  --> 
      </div>
      <!-- end top-header  -->
      
      <div class="container">
        <div class="row">
          <div class="col-xs-12"> <a class="header-logo" href="<?php echo base_url(); ?>"><img class="header-logo__img" src="assets/img/logo.png" height="50" width="195" alt="Logo"></a>
            <div class="header-inner">
              <div class="header-search">
                <div class="navbar-search">
                  <form id="search-global-form">
                    <div class="input-group">
                      <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off" name="s" id="search" value="">
                      <span class="input-group-btn">
                      <button type="reset" class="btn search-close" id="search-close"><i class="fa fa-times"></i></button>
                      </span> </div>
                  </form>
                </div>
              </div>
              <a id="search-open" href="#fakelink"><i class="icon stroke icon-Search"></i></a>
              <nav class="navbar yamm">
                <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>">Home<span class="nav-subtitle">Our World</span></a></li>
                    <li class="dropdown"><a href="<?php echo base_url('about'); ?>">About<span class="nav-subtitle">Know Us</span></a>
                    	<ul role="menu" class="dropdown-menu">
                            <li><a href="<?php echo base_url('management'); ?>">Management</a></li>
                      	</ul>
                    </li>
                    <li><a href="<?php echo base_url('tutors'); ?>">Enroll<span class="nav-subtitle">Find Tutor</span></a></li>
                    <li><a href="<?php echo base_url('contact'); ?>">Contact<span class="nav-subtitle">say us hi</span></a></li>
                  </ul>
                </div>
              </nav>
              <!--end navbar --> 
              
            </div>
            <!-- end header-inner --> 
          </div>
          <!-- end col  --> 
        </div>
        <!-- end row  --> 
      </div>
      <!-- end container--> 
    </header>
    <!-- end header -->