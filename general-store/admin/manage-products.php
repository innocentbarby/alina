<?php
require_once("../components/admin-top.php");
require_once("../components/tables.php");
$fullpageName = str_replace("mange","", $pageName);


$categories_id




 = "";
$title = "";
$qty = "";
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
$resSel = mysqli_query ($conn ,"SELECT * FROM `products` WHERE `id`='$id'");
$row = mysqli_fetch_array($resSel);
$categories_id




 = $row["categories_id




"];
$title = $row["title"];
$qty = $row["qty"];
$mrp = $row["mrp"];
$prize = $row["prize"];
$image = $row["image"];
$shortdes = $row["shortdes"];
$longdes = $row["longdes"];
$rating = $row["rating"];
}

if(isset($_POST["btn_submit"])){
  $categories_id




 = getSaveValue($conn,$_POST["categories_id




"]);
  $title = getSaveValue($conn,$_POST["title"]);
  $qty = getSaveValue($conn,$_POST["qty"]);
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
  move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/products/$image");
  $shortdes = getSaveValue($conn,$_POST["shortdes"]);
  $longdes = getSaveValue($conn,$_POST["longdes"]);
  $rating = getSaveValue($conn,$_POST["rating"]);
  }

if(isset($_GET["id"]) && $_GET["id"]>0){
  $res = mysqli_query($conn, "UPDATE `products` SET `categories_id




` = '$categories_id




',`title` = '$title', qty` = '$qty', `mrp` = '$mrp', `prize` = '$prize', `image` = '$image',`shortdes` = '$shortdes',`longdes` = '$longdes'`rating` = '$rating'   WHERE `id` = '$id'"); 
}else{
  $resCheckTitle = mysqli_query($conn,"SELECT * FROM `products` WHERE `title`='$title'");
  if(mysqli_num_rows($resCheckTitle)>0){
    echo '<div class="alert alert-warning alert-dismissible fade show msg"role="alert">
    <button type= "button" class="btn-close"data-bs-dismiss="alert" aria-lebel="close"></button>
    <strong>warning!</strong>Record Already Exist.</div>';
  //  header("location:".strtolower($pageName));
// die();
  }else{
    $res = mysqli_query($conn, "INSERT INTO`products`(`categories_id




`,`title`,`qty`,`mrp`, `prize`,`image`,`shortdes`,`longdes`,`rating`)VALUES('$categories_id




','$title','$qty','$mrp','$prize','$image','$shortdes','$longdes','$rating')");
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
    $sqlDel = "DELETE FROM `products` WHERE `id` = '$id'"; 
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
     <a href="products.php" class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i>view<?php $pageName; ?></a>
      </div>
      <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="col-12">
  <div class="row">
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="title" required title="title" placeholder="title" value="<?php echo $title;?>"/>
    <label for="title">title</label>
  </div>
  </div>
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <textarea class="form-control" id="categories_id




" required title="categories_id




" placeholder="categories_id




" value="<?php echo $categories_id




;?>"></textarea>
    <label for="categories_id




">categories_id




</label>
  </div>
  </div>
 
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="qty" class="form-control" id="qty" required name="qty" placeholder="qty" value="<?php echo $qty;?>"/>
    <label for="qty">qty</label>
  </div>
  </div>
 
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="mrp" class="form-control" id="mrp" required name="mrp" placeholder="mrp" value="<?php echo $mrp;?>"/>
    <label for="mrp">mrp</label>
  </div>
  </div>
  
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="prize" class="form-control" id="prize" required name="prize" placeholder="mrp" value="<?php echo $prize;?>"/>
    <label for="prize">prize</label>
  </div>
  </div>
  <div class="col-md-3">
  <div class="form-floating mb-3">
  <input type="rating" class="form-control" id="rating" required name="rating" placeholder="rating" value="<?php echo $rating;?>"/>
    <label for="rating">rating</label>
  </div>
  </div>

<div class="col-md-6">
  <div class="form-floating mb-3">
  <input type="file" class="form-control" id="image" name="image"/>
  <input type="hidden" class="form-control" id="" name="old_image" value="<?php echo $image?>"/>
    <label for="image">image</label>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="shortdes" required name="shortdes" placeholder="shortdes" value="<?php echo $shortdes;?>"/>
    <label for="shortdes">shortdes</label>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="longdes" required name="longdes" placeholder="longdes" value="<?php echo $longdes;?>"/>
    <label for="longdes">longdes</label>
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
