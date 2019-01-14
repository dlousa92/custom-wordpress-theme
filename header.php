<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo('charset'); ?>">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <?php body_class(); ?>>
</head>

<body>

<div class="blog-masthead">
 <div class="container">
  <?php wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'menu-class' => 'blog-nav list-inline'
  )); ?>
 </div>
</div>

<div class="container">

 <div class="blog-header">
 <h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
 <?php $description = get_bloginfo( 'description', 'display' ); ?>
 <?php if($description) { ?><p class='lead blog-description'><?php echo $description ?></p><?php } ?>
 </div>

 <div class="row">