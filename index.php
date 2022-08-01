<?php
require_once('functions/manage.php');
get_header();
?>

<section class="home-slider owl-carousel">
   <?php 
    $selBanner="SELECT * FROM cs_banner ORDER BY banner_id DESC";
    $Qb=mysqli_query($con,$selBanner);
    while($banner=mysqli_fetch_assoc($Qb)){
    ?>
    <div class="slider-item" style="background-image:url(admin/uploads/<?= $banner['ban_img']; ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4"><?= $banner['ban_title']; ?></h1>
                    <p><?= $banner['ban_subtitle']; ?></p>
                    <p><a href="<?= $banner['ban_url']; ?>" class="btn btn-primary px-4 py-3 mt-3"><?= $banner['ban_button']; ?></a></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
           <?php 
                    $selFtr="SELECT * FROM cs_feture ORDER BY future_id ASC LIMIT 0,4";
                     $ftrQe=mysqli_query($con,$selFtr);
                    while($feature=mysqli_fetch_assoc($ftrQe)){
                    ?>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate <?= $feature['feture_bg']; ?>">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="<?= $feature['feture_icon']; ?>"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading"><?= $feature['feture_title']; ?></h3>
                        <p><?= $feature['feture_subtitle']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
                   <?php 
                     $selCon1="SELECT * FROM cs_content WHERE content_id=1";
                     $ConQe1=mysqli_query($con,$selCon1);
                     $content1=mysqli_fetch_assoc($ConQe1);
                    ?>
        <div class="row d-flex">
            <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                <div class="img" style="background-image:url(admin/uploads/<?= $content1['content_img'];?>);border"></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4"><?= $content1['content_title'];?></h2>
                <p><?= $content1['content_subtitle'];?></p>
                <div class="row mt-5">
                   <?php 
                    $selOffer="SELECT * FROM cs_offer ORDER BY offer_id ASC LIMIT 0,4";
                     $offerQe=mysqli_query($con,$selOffer);
                    while($offer=mysqli_fetch_assoc($offerQe)){
                    ?>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="<?php echo $offer['offer_icon']; ?>"></span></div>
                            <div class="text pl-3">
                                <h3><?= $offer['offer_title']; ?></h3>
                                <p><?= $offer['offer_subtitle']; ?></p>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url(images/xbg_3.jpg.pagespeed.ic.jTVL4IaShH.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
                  <?php 
                     $selCon2="SELECT * FROM cs_content WHERE content_id=4";
                     $ConQe2=mysqli_query($con,$selCon2);
                     $content2=mysqli_fetch_assoc($ConQe2);
                    ?>
        <div class="row justify-content-center mb-5 pb-2 d-flex">
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image:url(images/xabout-2.jpg.pagespeed.ic.WZ3QXRP_6S.jpg)">
                    <div class="video justify-content-center">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                <h2 class="mb-4"><?= $content2['content_title']; ?></h2>
                <?= $content2['content_details']; ?>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Certified Teachers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="401">0</strong>
                                <span>Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                                <span>Awards Won</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container-fluid px-4">
                    <?php 
                     $selCon3="SELECT * FROM cs_content WHERE content_id=5";
                     $ConQe3=mysqli_query($con,$selCon3);
                     $content3=mysqli_fetch_assoc($ConQe3);
                    ?>
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><?= $content3['content_title']; ?></h2>
                <p><?= $content3['content_subtitle']; ?></p>
            </div>
        </div>
        <div class="row">
               <?php 
                    $selCourse="SELECT * FROM cs_courses ORDER BY courses_id ASC LIMIT 0,4";
                     $courseQe=mysqli_query($con,$selCourse);
                    while($course=mysqli_fetch_assoc($courseQe)){
                ?>
            <div class="col-md-3 course ftco-animate">
                <div class="img" style="background-image: url(admin/uploads/<?= $course['courses_img']; ?>);"></div>
                <div class="text pt-4">
                    <p class="meta d-flex">
                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                        <span><i class="icon-table mr-2"></i>10 seats</span>
                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                    </p>
                    <h3><a href="#"><?= $course['courses_title']; ?></a></h3>
                    <p><?= $course['courses_details']; ?></p>
                    <p><a href="#" class="btn btn-primary"><?= $course['courses_button']; ?></a></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Certified Teachers</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
         <?php 
                    $selTeacher="SELECT * FROM cs_teacher ORDER BY teacher_id  ASC LIMIT 0,4";
                     $tchQe=mysqli_query($con,$selTeacher);
                    while($teacher=mysqli_fetch_assoc($tchQe)){
                    ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(admin/uploads/<?= $teacher['teacher_photo']; ?>);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3><?= $teacher['teacher_name']; ?></h3>
                        <span class="position mb-2"><?= $teacher['teacher_designation']; ?></span>
                        <div class="faded">
                            <p><?= $teacher['teacher_details']; ?></p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Request A Quote</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
             <?php 
                if(!empty($_POST)){
                  $firstname=htmlentities($_POST['firstname'],ENT_QUOTES);
                  $lastname=$_POST['lastname'];
                  $course=$_POST['course'];
                  $phone=$_POST['phone'];
                  $mess=$_POST['mess'];
                   //$message='Name: '.$name.'\n'.'Email: '.$email.'\n'.'Subject: '.$subject.'\n'.'Message: '.$mess;
                if(!empty($firstname)){   
                 $insert="INSERT INTO cs_quote(quote_firstname,quote_lastname,slct_course_id,quote_phone,quote_mess)	VALUES('$firstname','$lastname','$course',$phone,'$mess')";
    
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
                    <form action="#" class="appointment-form ftco-animate" method="post" enctype="multipart/form-data">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="firstname">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div> 
                                        <select name="course" id="" class="form-control">
                                            <option value="">Select Your Course</option>
                                        <?php
                                             $selr="SELECT * FROM quote_course ORDER BY slct_course_id ";
                                             $Qr=mysqli_query($con,$selr);
                                             while($urole=mysqli_fetch_assoc($Qr)){
                                          ?>
                                         <option value="<?= $urole['slct_course_id']; ?>"><?= $urole['course_name']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="mess" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
                <?php 
                    $selBlog="SELECT * FROM cs_blog ORDER BY blog_id ASC LIMIT 0,4";
                     $blogQe=mysqli_query($con,$selBlog);
                    while($blog=mysqli_fetch_assoc($blogQe)){
                ?>
     
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('admin/uploads/<?= $blog['blog_img']; ?>');">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#"><?= $blog['blog_title']; ?></a></h3>
                        <p><?= $blog['blog_details']; ?></p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary"><?= $blog['blog_btn']; ?><span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Student Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
                
            <div class="col-md-12">
               
                <div class="carousel-testimony owl-carousel">
                   <?php 
                    $selAbout="SELECT * FROM cs_about ORDER BY about_id ASC LIMIT 0,4";
                     $aboutQe=mysqli_query($con,$selAbout);
                    while($about=mysqli_fetch_assoc($aboutQe)){
                ?>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image:url(admin/uploads/<?= $about['about_img']; ?>)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p><?= $about['about_details']; ?></p>
                                <p class="name"><?= $about['about_name']; ?></p>
                                <span class="position"><?= $about['about_title']; ?></span>
                            </div>
                        </div>
                    </div>
                  
                   
                <?php } ?>
                
                </div>
               
            </div>
            
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
           <?php 
                    $selGallery="SELECT * FROM cs_gallery ORDER BY gallery_id ASC LIMIT 0,4";
                     $galleryQe=mysqli_query($con,$selGallery);
                    while($gallery=mysqli_fetch_assoc($galleryQe)){
                ?>
            <div class="col-md-3 ftco-animate">
                <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(admin/uploads/<?= $gallery['gallery_img']; ?>)">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
         <?php } ?>
         
           
        </div>
    </div>
</section>
<?php
get_footer();
?>