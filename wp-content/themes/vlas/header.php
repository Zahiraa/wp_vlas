<?php
/** Theme Name: vlas
 *
 * @package WordPress
 * @SubPackage Starkers
 * @since Starkers HTML5 3.0
*/





?>

<html <?php language_attributes(); ?> class="no-js">
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--responsive mobile-->
  <title>VLA S</title>

  <link rel="icon" type="image/x-icon" href="pic/logoo.png" />
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.css" rel="stylesheet"/>
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet"/>

   <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css" rel="stylesheet"/>

  <script src="https://use.fontawesome.com/5a8a7bb461.js"></script>
  <link rel="profile" href="http://gmpg.org/xfn/11">
 
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
    <!--let IE read html5 tags-->
    <!--let IE read html5 tags-->
</head>
<body>
 <header>
 
  <div class="container" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pic/header.png);">
   
      <a href="#" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/pic/logo_hair.png"></a>
      <nav>
        <ul class="list-unstyled">
          <li><a href="#" class="nav">SERVICES</a></li>
          <li><a href="#" class="nav">PRICE</a></li>
          <li><a href="#" class="nav">TEAM</a></li>
          <li><a href="#"  class="nav">BLOG</a></li>
          <li><a href="#" class="nav">CONTACT</a></li>
          <li><button class="btn btn-nav"><a class="button">I WANT TO ORDER &nbsp<i style="font-size:20px" class="fa">&#xf178;</i></a></button></li>
        </ul>
      </nav>




   


    <div class="content text-center">
   <ul>
     <li>
      
       <h3>Madonna was our customer</h3>
       
       <button class="btn btn-nav"><a href="">NEW CUSTOMERS ARE WELCOME &nbsp<i style="font-size:20px" class="fa">&#xf178;</i></a></button>
     </li>
   </ul>

 </div>


  </div>
 </header>
