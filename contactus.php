<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Contact Us </title>
        
        <?php include("include/filescript.php");?>
        
    </head>
    <body>
    
    <?php include("include/header.php");?>
    
    <!-- site content -->
    <div id="main">
        <!--Breadcrumb Section Start Here-->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 style="color:#fff;">Contact Us</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=$urlroot;?>" style="color:#fff;">Home</a>
                            </li>
                            <li class="active" style="color:#fff;">
                                Contact Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        if(isset($_POST['contactusquote']))
        {
            $fullname=$_POST['name'];
            $emailaddress=$_POST['email'];
            $contact=$_POST['phone'];
            $message=$_POST['brief'];
            $topicsubject=$_POST['subject'];
            $serverip=$_SERVER['REMOTE_ADDR'];

            $from = "communication@3planet.org";
            $slace="images/planet-logo.png";
            $imgpath = $urlroot.$slace;
            $subject = 'Quick Contact - '.$fullname.' - Third Planet Foundation';

            $textmail='<p><font face="Arial" size="2"><a target="_blank" href="'.$urlroot.'"><img border="0" src="'.$imgpath.'" width="276" height="70"></a></font></p>';
                    
            $body = "$textmail<hr color='#369'>
            <p><span style='font-family: Arial'><font size='2'><b>Hello Admin</b>,</font></span></p>
            <h1 align='center' style='text-align: left'><font size='2'><span style='font-family: Arial'>You have received <font color='#369'>Quick Contact From Contact Us </font> on Third Planet Foundation: $fullname </span> </font><span style='font-family: Arial'><font size='2'>
            <p><font face='Arial' size='2'>Name: $fullname </font></p>
            <p><font face='Arial' size='2'> E-Mail Address - $emailaddress </font> </p>
            <p><font face='Arial' size='2'> Mobile Number  - $contact </font> </p> 
            <p><font face='Arial' size='2'> Subject  - $topicsubject </font> </p> 
            <p><font face='Arial' size='2'>Message - $message </font> </p>
            <p><font face='Arial' size='2'> IP Address - $serverip </font> </p> 
            <hr color='#369'>";

            $to = "jatindhall@gmail.com";       
            $headers = array(
                'MIME-Version: 1.0',
                'Content-Type: text/html; charset="UTF-8";',
                'Content-Transfer-Encoding: 7bit',
                'Date: ' . date('r', $_SERVER['REQUEST_TIME']),
                'From: ' . $from,
                'Return-Path: ' . $from
            );
            $mailsent = mail($to, $subject, $body, implode("\n", $headers));

            if($mailsent)
            {
                $contmsg="<div class='alert alert-success'><font color='#009900'>Hi $fullname, Thank you for submitting the form. We will contact you soon!</font></div>";    
            }
            else {
                $contmsg="<div class='alert alert-danger'><font color='#cc0000'>Hi $fullname, Sorry Mail Not Sent</font></div>";      
            }
        }
        ?>                
        
        <!--Breadcrumb Section End Here-->
        <div class="content-wrapper" id="page-info" style="padding: 60px 0; max-width: 1400px; margin: 0 auto; width: 90%;">
            <div class="row" style="display: flex; gap: 40px; margin: 0;">
                <!-- Contact Form Section -->
                <div class="col-xs-12 col-sm-6 contact-form" style="padding: 50px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); flex: 1;">
                    <h2 style="color: #698b71; font-size: 28px; font-weight: 700; margin-bottom: 10px;">Send us a Message</h2>
                    <p style="color: #666; margin-bottom: 30px; font-size: 14px; line-height: 1.6;">We'd love to hear from you. Fill out the form below and we'll get back to you soon.</p>
                    
                    <?php if(isset($contmsg)) { echo $contmsg; } ?>
                    
                    <form action="<?php echo $PHP_SELF;?>" method="post" style="margin-top: 20px;">
                        <!-- Name and Email Row -->
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name" style="font-weight: 600; color: #333; margin-bottom: 8px;">Name<span style="color: #e74c3c;">*</span></label>
                                <input type="text" name="name" id="name" required class="form-control" style="padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 15px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#698b71'" onblur="this.style.borderColor='#e0e0e0'">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="email" style="font-weight: 600; color: #333; margin-bottom: 8px;">Email<span style="color: #e74c3c;">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" required style="padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 15px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#698b71'" onblur="this.style.borderColor='#e0e0e0'">
                            </div>
                        </div>
                        
                        <!-- Mobile and Subject Row -->
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone" style="font-weight: 600; color: #333; margin-bottom: 8px;">Mobile No<span style="color: #e74c3c;">*</span></label>
                                <input type="text" class="form-control" name="phone" id="phone" required maxlength="10" style="padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 15px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#698b71'" onblur="this.style.borderColor='#e0e0e0'">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="subject" style="font-weight: 600; color: #333; margin-bottom: 8px;">Subject<span style="color: #e74c3c;">*</span></label>
                                <input type="text" class="form-control" name="subject" id="subject" style="padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 15px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#698b71'" onblur="this.style.borderColor='#e0e0e0'">
                            </div>
                        </div>
                        
                        <!-- Message Row -->
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="brief" style="font-weight: 600; color: #333; margin-bottom: 8px;">Message</label>
                                <textarea class="form-control" name="brief" id="brief" rows="5" style="padding: 12px; border: 2px solid #e0e0e0; border-radius: 5px; font-size: 15px; resize: vertical; transition: border-color 0.3s;" onfocus="this.style.borderColor='#698b71'" onblur="this.style.borderColor='#e0e0e0'"></textarea>
                            </div>
                        </div>
                        
                        <!-- Submit Button Row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" name="contactusquote" class="btn btn-default" id="submitjold" style="background: #698b71; color: #ffffff; padding: 14px 40px; border: none; border-radius: 5px; font-size: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(105, 139, 113, 0.3);" onmouseover="this.style.background='#53785b'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(105, 139, 113, 0.4)'" onmouseout="this.style.background='#698b71'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(105, 139, 113, 0.3)'">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Contact Information Section -->
                <div class="col-xs-12 col-sm-6 contact-address" style="padding: 50px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); flex: 1;">
                    <h2 style="color: #698b71; font-size: 28px; font-weight: 700; margin-bottom: 30px;">Get in Touch</h2>
                    
                    <div style="margin-bottom: 35px;">
                        <h3 style="color: #698b71; font-size: 16px; font-weight: 700; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px;">Address</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8; margin: 0;">
                            Centrum Mall Office No.2, 1st Floor Sultanpur, Mg Road New Delhi 110030, India
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 35px;">
                        <h3 style="color: #698b71; font-size: 16px; font-weight: 700; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px;">Email</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8; margin: 0;">
                            <a href="mailto:<?=$socialdata['email'];?>" style="color: #4a90e2; text-decoration: none;"><?=$socialdata['email'];?></a><br>
                            <a href="mailto:communication@3planet.org" style="color: #4a90e2; text-decoration: none;">communication@3planet.org</a>
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 35px;">
                        <h3 style="color: #698b71; font-size: 16px; font-weight: 700; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px;">Phone</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8; margin: 0;">
                            <?=$socialdata['phone'];?><br>
                            Tel: <?=$socialdata['googleplus'];?>
                        </p>
                    </div>
                    
                    <!-- <div>
                        <h3 style="color: #698b71; font-size: 16px; font-weight: 700; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 0.5px;">Follow Us</h3>
                        <div style="display: flex; gap: 12px;">
                            <a href="<?=$socialdata['facebook'];?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #3b5998; color: #ffffff; border-radius: 50%; font-size: 18px; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"><i class="fa fa-facebook"></i></a>
                            <a href="<?=$socialdata['twitter'];?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #1da1f2; color: #ffffff; border-radius: 50%; font-size: 18px; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"><i class="fa fa-twitter"></i></a>
                            <a href="<?=$socialdata['linkedin'];?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #0077b5; color: #ffffff; border-radius: 50%; font-size: 18px; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"><i class="fa fa-linkedin"></i></a>
                            <a href="<?=$socialdata['instagram'];?>" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #e4405f; color: #ffffff; border-radius: 50%; font-size: 18px; transition: all 0.3s ease; text-decoration: none;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"><i class="fa fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Location Section -->
        <div class="container" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="row">
                <div class="col-xs-12">
                    <h2 style="color: #698b71; font-size: 32px; font-weight: 700; margin-bottom: 30px; text-align: center;">Find Us Here</h2>
                    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.12);">
                        <iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5053991670646!2d77.15700521506834!3d28.49786381479867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1e5cac5fed13%3A0xf56206e6c5cfa99f!2sThe%20Centrum%20Mall%20Office%20No.2%2C%201st%20Floor%20Sultanpur%2C%20Mg%20Road%2C%20New%20Delhi%2C%20Delhi%20110030%2C%20India!5e0!3m2!1sen!2sin!4v1685471000000!5m2!1sen!2sin" 
								width="100%" 
                                height="450" 
                                frameborder="0" 
                                style="border:0;" 
                                allowfullscreen="" 
                                aria-hidden="false" 
                                tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site content ends -->
     
    <?php include("include/footer.php");?>
    </body>
</html>

