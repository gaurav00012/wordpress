<?php
/**
 * The template for displaying pages
 * Template Name: Jobseekers Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div style="margin-top: 15%;">hello</div>
<?php


if (isset($_REQUEST['submit']))
{
    
$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$clocation = $_REQUEST['clocation'];
$nlocation = $_REQUEST['nlocation'];
$requirement = $_REQUEST['requirement'];
$attachments = array();
$_FILES["file"]["tmp_name"]=$_FILES["file"]["name"];
$attachments = $_FILES['file'];

//$attachments = array( WP_CONTENT_DIR . '/uploads/file_to_attach.zip' );
$super_admins = get_super_admins();

//var_dump($attachments);die;
foreach ($super_admins as $admin) {
          $sadmin = $admin;
    }
        /*--------------mail for Admin---------------*/
        $to = 'sandeepunicode@gmail.com';
        $from = 'From: AarohanHr';
        //echo $from ;die;
        $siteUrl = get_site_url();
        $subject = 'Query From Job Seekers Page '.date("d-m-Y h:i");
        $header  = 'From: AarohanHr <info@aarohanhr.com>' . "\r\n";
        $header .= 'MIME-Version: 1.0' . "\r\n";
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
        We have received one Request from Aarohanhr(Jobseekers).<br />
        <p>Details are below,</p>
        <p>Name: '.$fname.'<br />
        Email ID: '.$email.'<br />
        Mobile No: '.$contact.'<br />
        Current Job Location: '.$clocation.'<br />
        New Job Location: '.$nlocation.'<br />
        Requirement: '.$requirement.'</p>
        Thanks<br />
        <a href="'.$siteUrl.'" style="color:#338ad9; text-decoration:none">Aarohanhr</a>
        </td>
        </tr>
        </table>';

                    //echo $message;
        
        //wp_mail($to,$subject,$message,$header,$attachments);
$tos  = get_option('multi_email_ids');
$tos = explode(",",$tos);

foreach ( $tos as $to) {
 wp_mail($to, $subject, $message, $header,$attachments);
}

        /*--------------mail for User---------------*/

        $to = $email;
        $from = 'From: AarohanHr';
        $subject = 'Thank You';
        $header  = 'From: AarohanHr <info@aarohanhr.com>' . "\r\n";
        $header .= 'MIME-Version: 1.0' . "\r\n";
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
        We have received Your Request,<br />
        We will contact you soon.<br/>
        <p></p>
        Thanks<br/>
        <a href="'.$siteUrl.'" style="color:#338ad9; text-decoration:none">Aarohanhr</a>
        </td>
        </tr>
        </table>';
        //echo $message;die;
        
        wp_mail($to,$subject,$message,$header);

}


?>

<banner class="breadcrumb-section">
<h1>Apply Now</h1>
</banner>
<section class="center-section">
<div class="container">
<?php
if(isset($_REQUEST['submit'])){
    echo '<center style="font-size:30px;"><div class="alert alert-success alert-mgs" id="fademgs">Thanks, We have Received your Request<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div></center>' ;
}
?>
<div class="row">

<div class="col-xs-6 col-sm-6 col-center">
<div class="gray-bg">
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
<div class="col-xs-12 col-sm-12">

<div class="form-group">
<label>Name <span>*</span> </label>
<input type="text" class="form-control"  name="fname" required="required">
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
<input type="text" class="form-control" name="contact"  required>
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Current Job Location</label>
<input class="form-control" type="text" name="clocation" >
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>New Job Location</label>
<input class="form-control" type="text" name="nlocation" >
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Your Requirement <span>*</span> </label>
<textarea class="form-control" rows="3" name="requirement"  required></textarea >
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<label>Upload Your Resume<span></span> </label>
<input type="file" class="form-control" name="file">
</div>
</div>
<div class="col-xs-12">
<div class="form-group">
<div class="g-recaptcha" id="rcaptcha" data-sitekey="6LfBbwgUAAAAAO1uOY4J-pb6rFeQpisVWKP0Em4W"></div>
<span id="captcha" style="margin-left:10px;color:red" />
</div>
</div>

<div class="col-xs-12">
<div class="text-right">
<button class="btn btn-red do" type="submit"  name="submit">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>
