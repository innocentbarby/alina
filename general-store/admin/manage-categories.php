<?php
require_once("../components/admin-top.php");
require_once("../components/tables.php");
$fullpageName = str_replace("Mange","", $pageName);

$title = "";
$image = "";
$msgTitle = "inserted";
$btnTitle = "Created";

if(isset($_GET["id"])&& $_GET["id"]>0){
  $msgTitle = "update";
$btnTitle = "Update";
$id = getSaveValue($conn, $_GET["id"]);
$resSel = mysqli_query ($conn ,"SELECT * FROM `categories` WHERE `id`='$id'");
$row = mysqli_fetch_array($resSel);
$title = $row["title"];
$image = $row["image"];
}

if(isset($_POST["btn_submit"])){
  $title = getSaveValue($conn,$_POST["title"]);
  if(empty($_FILES["image"]["name"])){
    if(isset($_GET["id"]) && $_GET["id"]>0){
      $image = getSaveValue($conn,$_POST["old_image"]);
  }else{
    $image = "dummy img.png";
  }
}else{
    $image = $_FILES["image"]["name"];
  $image = time()."-".$image;
  move_uploaded_file($_FILES["image"]["tmp_name"],"assets/img/categories/$image");
  }

if(isset($_GET["id"]) && $_GET["id"]>0){
  $res = mysqli_query($conn, "UPDATE `categories` SET `title` = '$title',`image`='$image'   WHERE `id` = '$id'"); 
}else{
  $resCheckTitle = mysqli_query($conn,"SELECT * FROM `categories` WHERE `title`='$title'");
  if(mysqli_num_rows($resCheckTitle)>0){
    echo '<div class="alert alert-warning alert-dismissible fade show msg"role="alert">
    <button type= "button" class="btn-close"data-bs-dismiss="alert" aria-lebel="close"></button>
    <strong>warning!</strong>Record Already Exist.</div>';
  //  header("location:".strtolower($pageName));
// die();
  }else{
    $res = mysqli_query($conn, "INSERT INTO`categories`(`title`,`image`)VALUES('$title','$image')");
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
    $sqlDel = "DELETE FROM `categories` WHERE `id` = '$id'"; 
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
                        <li class="breadcrumb-item"><a href = "tables.php">dashbopard</a></li>
                            <li class="breadcrumb-item active">
                            <?php echo $pageName;?>
                            </li>
                        </ol>
     <div class="card mb-4 mx-auto col-10">
     <div class="card-header text-end">
     <a href="categories.php" class="btn btn-sm btn-primary"><i class="fas fa-plus me-1"></i>View<?php $pageName; ?></a>
      </div>
      <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="col-12">
  <div class="row">
  <div class="col-md-6">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="title" required name="title" placeholder="title" value="<?php echo $title;?>"/>
    <label for="title">title</label>
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
