<?php
require_once('functions/manage.php');
get_header();
?>

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.4zslKVf4er.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Address</h3>
                    <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#0a63646c654a73657f7879637e6f24696567"><span class="__cf_email__" data-cfemail="365f585059764f594344455f42531855595b">[email&#160;protected]</span></a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <?php 
                if(!empty($_POST)){
                  $name=htmlentities($_POST['name'],ENT_QUOTES);
                  $email=$_POST['email'];
                  $subject=$_POST['subject'];
                  $mess=$_POST['mess'];
                   //$message='Name: '.$name.'\n'.'Email: '.$email.'\n'.'Subject: '.$subject.'\n'.'Message: '.$mess;
                if(!empty($name)){   
                 $insert="INSERT INTO cs_contact(con_name,con_email,con_sub,con_mess)VALUES('$name','$email','$subject','$mess')";
    
               if(mysqli_query($con,$insert)){
                //mail('mamun@gmail.com','contact message subject',$message);
               echo "Send message successfully.";
               }else{
               echo "Oopps! Send message failed.";
             }
               }else{
                echo "please enter your name.";
                }      
           }
         ?>
                <form action="#" method="POST" enctype="multipart/form-data">
             
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea name="mess" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>                 