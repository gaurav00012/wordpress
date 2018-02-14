<?php
/**
 * The template for displaying pages
 * Template Name: Corporates Template
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
	
$fname = $_REQUEST['fname'];
$company = $_REQUEST['company'];
$designation = $_REQUEST['designation'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$address = $_REQUEST['address'];
$requirement = $_REQUEST['requirement'];
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
        We have received one Request from Aarohanhr(Corporates).<br />
        <p>Details are below,</p>
        <p>Name: '.$fname.'<br />
        Company Name: '.$company.'<br />
        Designation: '.$designation.'<br />
        Email ID: '.$email.'<br />
        Mobile No: '.$contact.'<br />
        Address: '.$address.'<br />
        Requirement: '.$requirement.'</p>
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
        Respected '.$fname.',
        <br  /><p></p>
        We have received Your Request,<br />
        We will contact you soon.<br/>
        <p></p>
        Thanks<br/>
        <a href="'.$siteUrl.'" style="color:#338ad9; text-decoration:none">Aarohanhr</a>
        </td>
        </tr>
        </table>';
       // echo $message;die;
        
        wp_mail($to,$subject,$message,$header);

}

?>

<banner class="breadcrumb-section">
<h1>Your Requirement</h1>
</banner>
<section class="center-section">
<div class="container">
<?php
if(isset($_REQUEST['submit'])){
	echo '<center style="font-size:30px;"><div class="alert alert-success alert-mgs" id="fademgs">Thanks, We have Receive your Request<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div></center>' ;
}
?>
<div class="row">

<div class="col-xs-6 col-sm-6 col-center">
<div class="gray-bg">
<div class="col-xs-12 col-sm-12">
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="registration" id="appointmentbookingform">
<div class="form-group">
<label>Name <span>*</span> </label>
<input type="text" class="form-control"  name="fname" required="required">
</div>
</div>
<div class="col-xs-12 col-sm-12">
<div class="form-group">
<label>Company Name <span>*</span> </label>
<input type="text" class="form-control"   name="company" required>
</div>
</div>
<div class="col-xs-12 col-sm-12">
<div class="form-group">
<label>Designation <span>*</span> </label>
<input type="text" class="form-control" name="designation" required>
</div>
</div>

<div class="col-xs-12 col-sm-12">
<div class="form-group">
<label>Email <span>*</span> </label>
<input type="email" class="form-control" name="email"  required >
</div>
</div>
<div class="col-xs-12 col-sm-12">
<div class="form-group">
<label>Contact <span>*</span></label>
<input type="text" class="form-control AllowOnlyNumber" name="contact"  required>
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Address</label>
<textarea class="form-control" rows="3"  name="address" required></textarea>
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Requirement <span>*</span> </label>
<textarea class="form-control" rows="3" name="requirement"  required></textarea >
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

<?php get_footer(); ?>
