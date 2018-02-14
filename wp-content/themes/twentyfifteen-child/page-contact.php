<?php
/**
 * The template for displaying pages
 * Template Name: Contact us Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php


if (isset($_REQUEST['submit']))
{
	
/*$name = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$skype = $_REQUEST['skype'];
$message = $_REQUEST['message'];

$to      = 'info@aarohanhr.com';
$subject = 'Contact Form';
$message = 'Name : '.$name .' Email : ' . $email .' Contact No : '. $contact .' Skype ID : '. $skype .' Message : '. $message;
$headers = 'From: ';

mail($to, $subject, $message, $headers); */

$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$skype = $_REQUEST['skype'];
$message = $_REQUEST['message'];
$super_admins = get_super_admins();
foreach ($super_admins as $admin) {
          $sadmin = $admin;
	}
		/*--------------mail for Admin---------------*/
		$to = 'sandeepunicode@gmail.com';
        $from = 'From: AarohanHr';
        //echo $from ;die;
        $siteUrl = get_site_url();
        $subject = 'Contact Form';
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        
        $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:"Arial"; font-size:13px; letter-spacing:1px; line-height:22px;">
        <tr>
        <td colspan="2" align="center">
        <div style=" height: 40px; line-height: 40px;">
        <span style="font-size:31px; font-weight:bold;font-style:italic;color:#338ad9;">AarohanHR</span>
        
        </div>
        
        </td>
        </tr>
        <tr>
        <td colspan="2">
        Hi '.$sadmin.',
        <br  /><p></p>
        We have received one Request from Aarohanhr.<br />
        <p>Details are below,</p>
        <p>Name: '.$fname.'<br />
        Mobile No: '.$contact.'<br />
        Email ID: '.$email.'<br />
        Skype ID: '.$skype.'<br />
        Message: '.$message.'</p>
        Thanks<br />
        <a href="'.$siteUrl.'" style="color:#338ad9; text-decoration:none">Aarohanhr</a>
        </td>
        </tr>
        </table>';
        //echo $message;
        
        wp_mail($to,$subject,$message,$header);

        /*--------------mail for User---------------*/

        $to = $email;
        $from = 'From: AarohanHr';
        $subject = 'Thank You';
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        
        $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:"Arial"; font-size:13px; letter-spacing:1px; line-height:22px;">
        <tr>
        <td colspan="2" align="center">
        <div style=" height: 40px; line-height: 40px;">
        <span style="font-size:31px; font-weight:bold;font-style:italic;color:#338ad9;">AarohanHR</span>
        
        </div>
        
        </td>
        </tr>
        <tr>
        <td colspan="2">
        Dear '.$fname.',
        <br  /><p></p>
        We have received Your Request, <br />
        We will contact you soon.<br />
        <p></p>
        Thanks<br />
        <a href="'.$siteUrl.'" style="color:#338ad9; text-decoration:none">Aarohanhr</a>
        </td>
        </tr>
        </table>';
        //echo $message;die;
        
        wp_mail($to,$subject,$message,$header);

}

?>

<banner class="breadcrumb-section">
<h1>Keep In Touch</h1>
</banner>
<section class="center-section">
<div class="container">
<?php
if(isset($_REQUEST['submit'])){
	echo '<center style="font-size:30px;"><div class="alert alert-success alert-mgs" id="fademgs">Thank you for Contact Us   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div></center>' ;
}
?>
<div class="row">
<div class="col-xs-12 col-sm-6">
<div class="small-theme-heading">Address</div>
<div class="address-box">
<span> <i class="fa fa-map-marker"></i> <p><?php echo get_field('value',59,false); ?></p></span>
<span> <i class="fa fa-mobile"></i> <p><a href="tel:+91 <?php echo get_field('value',65,false); ?>">+91 <?php echo get_field('value',65,false); ?></a></p></span>
<span><i class="fa fa-phone"></i><a href="tel <?php echo get_field('value',64,false); ?>"> <p><?php echo get_field('value',64,false); ?></p></a></span>
<span> <i class="fa fa-envelope"></i> <p><a href="mailto:<?php echo get_field('value',67,false); ?>"><?php echo get_field('value',67,false); ?></a>, <p><a href="mailto:<?php echo get_field('value',68,false); ?>"><?php echo get_field('value',68,false); ?></p></a></p></span>
</div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="gray-bg">
<div class="col-xs-12 col-sm-6">
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="registration" id="appointmentbookingform">
<div class="form-group">
<label>Name <span>*</span> </label>
<input type="text" class="form-control" id="fname" name="fname" required="required">
</div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label>Email <span>*</span> </label>
<input type="email" class="form-control" name="email" id="email" required >
</div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label>Contact <span>*</span></label>
<input type="text" class="form-control AllowOnlyNumber" name="contact" id="contact" required>
</div>
</div>
<div class="col-xs-12 col-sm-6">
<div class="form-group">
<label>Skype ID</label>
<input type="text" name="skype" class="form-control">
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Message <span>*</span> </label>
<textarea class="form-control" rows="3" name="message" id="message" required></textarea >
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<div class="g-recaptcha" data-sitekey="6LfibikTAAAAALo7iQGFagVvHhbSvWqhiSWO5BL-"></div>
</div>
</div>

<div class="col-xs-12">
<div class="text-right">
<button class="btn btn-red" type="submit"   id="submit" name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="map-section">
<div class="map-container">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14007.955305356394!2d77.07217916732147!3d28.630096982418785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf74e6f80d%3A0xcefdcc3162f14df4!2sJaina+Tower%2C+Chatrapati+Shivaji+Marg%2C+Janakpuri+District+Center%2C+Janakpuri%2C+Delhi%2C+110058%2C+India!5e0!3m2!1sen!2s!4v1475316797930" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</section>


<?php get_footer(); ?>
