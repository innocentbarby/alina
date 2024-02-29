<?php
require_once("../components/admin-top.php");
require_once("../components/tables.php");
$fullpageName = str_replace("mange","", $pageName);


$product_id
 = "";
$title = "";
$reviews
 = "";
$mrp = "";
$prize = "";
$image = "";
$shortdes = "";
$longdes = "";
$rating = "";
$msgTitle = "inserted";
$btnTitle = "created";

if(isset($_GET["id"])&& $_GET["id"]>0){
  $msgTitle = "update";
$btnTitle = "update";
$id = getSaveValue($conn, $_GET["id"]);
$resSel = mysqli_query ($conn ,"SELECT * FROM `reviews
` WHERE `id`='$id'");
$row = mysqli_fetch_array($resSel);
$product_id
 = $row["product_id
"];
$title = $row["title"];
$reviews
 = $row["reviews
"];
$mrp = $row["mrp"];
$prize = $row["prize"];
$image = $row["image"];
$shortdes = $row["shortdes"];
$longdes = $row["longdes"];
$rating = $row["rating"];
}

if(isset($_POST["btn_submit"])){

  $product_id= getSaveValue($conn,$_POST["product_id"]);
  $title = getSaveValue($conn,$_POST["title"]);
  $reviews= getSaveValue($conn,$_POST["review"]);
  $mrp = getSaveValue($conn,$_POST["mrp"]);
  $prize = getSaveValue($conn,$_POST["prize"]);
  if(empty($_FILES["image"]["name"])){
    if(isset($_GET["id"]) && $_GET["id"]>0){
      $image = getSaveValue($conn,$_POST["old_image"]);
  }else{
    $image = "dummy img.png";
  }
}else{
    $image = $_FILES["image"]["name"];
  $image = time()."-".$image;
  move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/reviews
/$image");
  $shortdes = getSaveValue($conn,$_POST["shortdes"]);
  $longdes = getSaveValue($conn,$_POST["longdes"]);
  $rating = getSaveValue($conn,$_POST["rating"]);
  }

if(isset($_GET["id"]) && $_GET["id"]>0){
  $res = mysqli_query($conn, "UPDATE `reviews
` SET `product_id
` = '$product_id
',`title` = '$title', review
` = '$reviews
', `mrp` = '$mrp', `prize` = '$prize', `image` = '$image',`shortdes` = '$shortdes',`longdes` = '$longdes'`rating` = '$rating'   WHERE `id` = '$id'"); 
}else{
  $resCheckTitle = mysqli_query($conn,"SELECT * FROM `reviews
` WHERE `title`='$title'");
  if(mysqli_num_rows($resCheckTitle)>0){
    echo '<div class="alert alert-warning alert-dismissible fade show msg"role="alert">
    <button type= "button" class="btn-close"data-bs-dismiss="alert" aria-lebel="close"></button>
    <strong>warning!</strong>Record Already Exist.</div>';
  //  header("location:".strtolower($pageName));
// die();
  }else{
    $res = mysqli_query($conn, "INSERT INTO`reviews
`(`product_id
`,`title`,`review
`,`mrp`, `prize`,`image`,`shortdes`,`longdes`,`rating`)VALUES('$product_id
','$title','$reviews
','$mrp','$prize','$image','$shortdes','$longdes','$rating')");
  }
}
if($res){
 echo '<div class="alert alert-success alert-dismissible fade show msg"role="alert">
   <button type= "button" class="btn-close"data-bs-dismiss="alert" aria-lebel="close"></button>
   <strong>success!</strong> Record'.$msgTitle.' Successfuly.</div>';
   }else{
     echo '<div class="alert alert-warning alert-dismissible fade show msg"role="alert">
   <button type= "button" class="btn-close"data-bs-dismiss="alert" aria-lebel="close"></button>
   <strong>Error!</strong>Record not '.$msgTitle.'.</div>';
   }
  //  header("location:".strtolower($fullpageName));

}
?>

  <body>
    <div class="page-holder bg-light">
      <!-- navbar-->
      <?php
require_once("../components/admin-navbar.php");
?>
<!-- <?php

if(isset($_POST["btn_del"])){
    $id = getSaveValue($conn,$_POST["id"]);
    $sqlDel = "DELETE FROM `reviews
` WHERE `id` = '$id'"; 
    $result = mysqli_query($conn, $sqlDel);

}


?> -->
         <?php
require_once("../components/admin-sidebar.php");
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h1 class="mt-4"><?php echo $btnTitle." ". $fullpageName; ?></h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href = "index.php">dashbopard</a></li>
                            <li class="breadcrumb-item active">
                            <?php echo $pageName;?>
                            </li>
                        </ol>
     <div class="card mb-4 mx-auto col-10">
     <div class="card-header text-end">
     <a href="reviews.php" class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i>view<?php $pageName; ?></a>
      </div>
      <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="col-12">
  <div class="row">
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <textarea class="form-control" id="product_id
"required title="product_id
"placeholder="product_id
"value="<?php echo $product_id
;?>"></textarea>
    <label for="product_id
">product_id
</label>
  </div>
  </div>


  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="title" required title="title" placeholder="title" value="<?php echo $title;?>"/>
    <label for="title">title</label>
  </div>
  </div>
  
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="rating" class="form-control" id="rating" required name="rating" placeholder="rating" value="<?php echo $rating;?>"/>
    <label for="rating">rating</label>
  </div>
  </div>


  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="text
" class="form-control" id="reviews
" required name="reviews
" placeholder="reviews
" value="<?php echo $reviews
;?>"/>
    <label for="reviews
">reviews
</label>
  </div>
  </div>
 
 
 

<div class="col-md-6">
  <div class="form-floating mb-3">
  <input type="file" class="form-control" id="image" name="image"/>
  <input type="hidden" class="form-control" id="" name="old_image" value="<?php echo $image?>"/>
    <label for="image">image</label>
  </div>
  </div>
 

  <div class="col-12">
  <button class="btn btn-primary" name = "btn_submit"><?php echo $btnTitle?>record</button>  
  
  </div>
  </div>
  </div>
        </form>
</div>
     </div>
     </div>
</main>
     </div>
     </div>






 

<?php
require_once("../components/admin-bottom.php");
?>
    </body>
</html>
