<?php
  require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']==1){
  get_header();
  get_sidebar();
  if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $icon=$_POST['icon'];
    $bg=$_POST['feture_bg'];

    if(!empty($title)){
      if(!empty($subtitle)){
        
          $insert="INSERT INTO cs_feture(feture_title,feture_subtitle,feture_icon,feture_bg)
          VALUES('$title','$subtitle','$icon','$bg')";

          if(mysqli_query($con,$insert)){
            echo "Succesfully upload banner information.";
          }else{
            echo "Opps! banner uploads failed!";
          }
      
      }else{
        echo "Please upload offer subtitle!";
      }
    }else{
      echo "Please enter your tite!";
    }
  }
?>
    <div class="col-md-12 main_content">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                          <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Add Feature Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="btn btn-sm btn-dark card_top_btn" href="all-feature.php"><i class="fa fa-th"></i> All Feature</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="card-body">
               <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Feature Title:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="title">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Feature Subtitle:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" id="" name="subtitle">
                   </div>
                 </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Feature Icon</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="icon">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Feature BG</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="feture_bg">
                  </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark submit_btn" name="submit">SUBMIT </button>
            </div>
          </div>
      </form>
    </div>
<?php
    get_footer();
  }else{
   header('Location:index.php');
   }
?>
