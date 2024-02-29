<?php
require_once("../components/admin-top.php");
require_once("../components/tables.php");
?>
  <body>
    <div class="page-holder bg-light">
     
      <?php
require_once("../components/admin-navbar.php");
?>


  <?php
if(isset($_POST["btn-submit"])){
    $title = getSaveValue($conn,$_POST["name"]);
$image = $_FILES["image"]["name"];
    $image = time()."-".$image;
    $tmpImage = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmpImage, "assets/img/categories/$image");
    
    

    $date = getSaveValue($conn,$_POST["date"]);
$sql = "INSERT INTO `categories`(`title`,`image`,`created_at`) VALUES ('$title','$image','$date')";
$res = mysqli_query($conn,$sql);
    if($res){
      echo '<div class="alert alert-success msg"><strong>Success </strong> Data is inserted </div>';
    }else{
      echo '<div class="alert alert-danger msg"><strong>Error </strong> data is not inserted</div>';
    }

    }


?>
 

  <div class="container-fluid p-3">
                   <div class="col-11 shadow rounded text-center mx-auto py-lg-3 px-lg-5 p-3">
                      <h1 class="text-uppercase">manage categories</h1>
                      <!-- <?php echo $msg ?> -->
                      <a class="nav-link bg-primary col-2 btn-height text-center pt-2" href="categories.php">
                              <i class="fas fa-plus"></i>
                         categories
                            </a>
                    <div class="col-12">
  <form class="row g-3 needs-validation" method="post" action="" enctype="multipart/form-data" novalidate>
  <div class="col-md-6 pt-4">
    <!-- <label for="validationCustom01" class="form-label">title</label> -->
    <input type="text" class="form-control" id="validationCustom01" required name="name" placeholder="Enter name">
    <div class="invalid-feedback">
        Please choose title
      </div>
  </div>
  
 
<div class="col-md-6 pt-4">
    <!-- <label for="validationCustom03" class="form-label">picture</label> -->
    <input type="file" accept=".jpg,.png"  class="form-control" id="validationCustom03" name="image">
    <div class="invalid-feedback">
     
    </div>
</div>
<div class="col-md-6">
    <!-- <label for="validationCustom03" class="form-label">date</label> -->
    <input type="date" class="form-control" id="validationCustom03" name="date">
    <div class="invalid-feedback">
      Please provide date.
    </div>
</div>


  <div class="col-12">
    <button class="btn btn-primary" name="btn-submit" type="submit">Add Tasks</button>
  </div>
</form>

                    </div>


                   </div>
                   
                </div> 
            </div>
            
        </div>

 
      

<?php
require_once("../components/admin-bottom.php");
?>
    </body>
</html>
