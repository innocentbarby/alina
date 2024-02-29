<?php
require_once("../components/admin-top.php");
?>
  <body>
    <div class="page-holder bg-light">
      <!-- navbar-->
      <?php
require_once("../components/admin-navbar.php");
?>

<?php

if(isset($_POST["btn_del"])){
    $id = getSaveValue($conn,$_POST["id"]);
    $sqlDel = "DELETE FROM `user` WHERE `id` = '$id'"; 
    $result = mysqli_query($conn, $sqlDel);

}

if(isset($_GET["action"]) && $_GET["action"]!=""){
    $action = getSaveValue($conn,$_GET["action"]);
    $id = getSaveValue($conn,$_GET["id"]);
    if($action == "active"){
        $sqlUpdate = "UPDATE `user` SET `status` = '0' WHERE `id` ='$id'";
    } 
    if($action == "deactive"){
        $sqlUpdate = "UPDATE `user` SET `status` = '1' WHERE `id` ='$id'";
    }
    $resUpdate = mysqli_query($conn, $sqlUpdate);
    if($resUpdate){
        echo'<div class="alert alert-success msg" role="alert">
            Status updated succesfully!
         </div>';
    }
    else{
       echo '<div class="alert alert-danger msg" role="alert">
       Status is not updated!
  </div>';

}
}


?>
         <?php
require_once("../components/admin-sidebar.php");
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 text-center text-capatilize text-bold">
                        <h1 class="mt-4">user</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item "><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">user</li>
                        </ol>
                        
                        <div class="card mb-4">
                          
                              <a class="nav-link bg-primary col-2 btn-height text-center pt-2" href="manage-user.php">
                              <i class="fas fa-plus"></i>
                        add user
                            </a>
<div class="card-body">
                                <table id="datatablesSimple" class = "table table-bordered table-stripped table-hover text-capitalized text-center">
                                    <thead class = "bg-success text-white text-uppercase">
                                        <tr>
                                            <th>#sr No</th>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>status</th>
                                            <th>created at</th>
                                            <th>image</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                             $i = 1;
                             $sql = "SELECT * FROM `user`";
                             $res = mysqli_query($conn, $sql);
                             if(mysqli_num_rows($res) > 0){
                                while($row = mysqli_fetch_array($res)){
                            ?>
                                        <tr>
                                        <td><?php echo $i?></td>
                                    <td><?php echo $row["id"]?></td>
                                    <td><?php echo $row["name"]?></td>
                                    <td><?php echo $row["email"]?></td>
                                    <td><?php echo $row["password"]?></td>
                                   
                                    <td>
                                <?php
                                if($row["status"] == 1){
                                    echo '<a href="?action=active&id='.$row["id"].'" class="btn btn-sm btn-success" name="active"><span>active</span></a>';
                                }else{
                                    echo '<a href="?action=deactive&id='.$row["id"].'" class="btn btn-sm btn-warning" name="deactive"><span>deactive</span></a>';
                                }
                                ?>
                                </td>
                                 <td>
                                            <?php echo date("D d-M-y", strtotime( $row["created_at"]))?></td>
                                            </td>
                                </td>
                                    <td>
                                    <a href="assets/img/user/<?php
                                if(empty($row["image"])){
                                    echo "dummy img.png";
                                }else{
                                    echo $row["image"];
                                }
                                ?>" target="_blank">
                                <img src="assets/img/user/<?php
                                if(empty($row["image"])){
                                    echo "dummy img.png";
                                }else{
                                    echo $row["image"];
                                }
                                ?>" class=" avatar-icon csimage" alt="">
                                </a>
                                    <!-- <img src="images/admins<?php echo $row["image_db"]?>" class="avatar-icon" alt=".."> -->
                                </td>
                          
                                
                               
                                           
                                            <td>
                                            <a href="manage-user.php?id=<?php echo $row["id"]?>" class="btn btn-sm btn-primary"><span class="fas fa-pen"></span></a>
                                                <form action="" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                                                <button class="btn btn-sm btn-danger" name="btn_del" onclick="return confirm('Are you sure?')"><span class="fas fa-trash"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                $i++;
                                }
                             }
                             else{
                                echo '<div class="alert alert-success msg" role="alert">
                                No record found!
                              </div>';
                             };
                            ?>
                                      
                                    </tbody>
                                </table>
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
