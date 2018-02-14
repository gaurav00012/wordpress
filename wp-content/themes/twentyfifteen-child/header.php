<!DOCTYPE html>
<?php 
global $post;
$GLOBALS['brand_page_id']=$post->ID;
?>

<?php
if (isset($_REQUEST['submitSeeker']))
{
  $name = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$message = $_REQUEST['message'];
$to      = 'info@previsionstudio.in';
$subject = 'Appointment Booking Form';
$message = 'Name : '.$name .' Email : ' . $email .' Contact No : '. $contact .' Message : '. $message;
$headers = 'From: previsionstudio.in';
mail($to, $subject, $message, $headers);
}

if (isset($_REQUEST['submitCorporate']))
{
  $name = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$message = $_REQUEST['message'];
$to      = 'info@previsionstudio.in';
$subject = 'Appointment Booking Form';
$message = 'Name : '.$name .' Email : ' . $email .' Contact No : '. $contact .' Message : '. $message;
$headers = 'From: previsionstudio.in';
mail($to, $subject, $message, $headers);
}

?>

<html>

<head>

<script src='https://www.google.com/recaptcha/api.js'></script>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

<title><?php echo get_bloginfo ('name')?></title>

<link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/images/fevicons.png" type="image/png" sizes="32x32">

<link href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/font-awesome.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/mfn-icons.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/animate.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/hover.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/roboto.css" rel="stylesheet" type="text/css">

<!--<link href="<?php echo get_stylesheet_directory_uri();?>/css/simplelightbox.min.css" rel="stylesheet" type="text/css">-->

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/layout.css"> 

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/carrotcell.css"> 

<link href="<?php echo get_stylesheet_directory_uri();?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri();?>/css/custom.css" rel="stylesheet" type="text/css" />



<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

        <script src="<?php echo get_stylesheet_directory_uri();?>/js/html5shiv.js"></script>

        <script src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>

   <![endif]-->

<!--[if lt IE 8]>

      <script src="<?php echo get_stylesheet_directory_uri();?>/js/respond.js"></script>

     <![endif]-->

<!--[Google Webmasters Code]-->

<meta name="google-site-verification" content="mHQUN5Kf4rSuJsz1v2NrtiS0UsPUDOKAuWeqe-8MtZI" />


</head>



<body>


<div id="seekersform" class="modal fade" role="dialog">
  <div class="modal-dialog enquiry-dialog">

    <!-- Modal content-->
      <div class="modal-content enquiry-content">
      
      <div class="modal-body enquiry-body">
      
      <div id="gif" hidden><img src="<?php echo get_stylesheet_directory_uri();?>/images/default.gif"></div>
      <button type="button" class="close enquiry-close" data-dismiss="modal">&times;</button>
      <div id="demo" >
        <div class="heading-2">Apply Now</div>
        
        
        <form action="" method="post" name="registration" id="appointmentbookingform">
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" id="enqName" name="fname" required>
        </div>

        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email ID" id="enqEmail" name="email" required>
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Mobile Number" id="enqContact" name="contact" required>
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Current Job Location" id="corporatename" name="clocation" required>
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="New Job Location" id="corporatename" name="nlocation" required>
        </div>
        
        <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="Your Requirement" id="description" name="message" required></textarea>
        </div>

        
         <div class="form-group">
        <button class="btn btn-explore" type="submit"   name="submitSeeker">Submit</button>
        </div>
        </form>
        </div>
      </div>
      
    </div>

  </div>
</div>



<header>

<div class="container">

 <?php  $data = get_field( "image", get_the_ID() );  ?>

<div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-white.png" alt=""></a></div>

<div class="nav-bars"><span></span></div>

<div class="navigation">

<ul>

<li><a href="<?php echo site_url(); ?>">Home</a></li>

<li><a href="<?php echo get_permalink(2); ?>">About Us</a></li>

<li><a href="<?php echo get_permalink(5); ?>">Jobs Search</a></li>

<li><a href="<?php echo get_permalink(7); ?>">Contact Us</a></li>

</ul>

</div>

</div>
<?php wp_head();?>

</header>

