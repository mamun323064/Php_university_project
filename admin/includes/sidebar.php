<section>
    <div class="container-fluid content_part_full">
        <div class="row">
            <div class="col-md-2 sidebar_part">
                <div class="user_part">
                    <img src="images/avatar.png" alt="avatar">
                    <h4><?= $_SESSION['name']; ?></h4>
                    <p><i class="fa fa-circle"></i> Online<?= $_SESSION['role']; ?></p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                        <?php if($_SESSION['role']==1 || $_SESSION['role']==2){ ?>
                        <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
                        <?php } ?>
                        <?php if($_SESSION['role']==1 || $_SESSION['role']==2){ ?>
                        <li><a href="all-banner.php"><i class="fa fa-bandcamp"></i> Banner</a></li>
                        <?php } ?>
                        <li><a href="all-offer.php"><i class="fa fa-gift"></i> Offers</a></li>
                        <li><a href="all-feature.php"><i class="fa fa-align-justify"></i> Feature</a></li>
                        <li><a href="all-teacher.php"><i class="fa fa-users"></i> Teachers</a></li>
                        <li><a href="all-courses.php"><i class="fa fa-graduation-cap"></i> Courses</a></li>
                        <li><a href="all-request-quote.php"><i class="fa fa-address-book"></i> Request A Quote</a></li>
                        <li><a href="all-blog.php"><i class="fa fa-rss-square"></i> Recent Blog</a></li>
                        <li><a href="all-about.php"><i class="fa fa-address-card"></i> About</a></li>
                        <li><a href="all-gly-img.php"><i class="fa fa-envira"></i> Gallery</a></li>
                        <li><a href="all-content.php"><i class="fa fa-file"></i> Content</a></li>
                        <li><a href="all-message.php"><i class="fa fa-comments"></i> Contact Message</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 content_part">
                <div class="row custom_bread_part">
                    <div class="col-md-12 bread">
                        <ul>
                            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                        </ul>
                    </div>
                </div>