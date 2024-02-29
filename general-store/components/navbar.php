 <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="fw-bold text-uppercase text-dark">MOBILE COMPANY</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="about.php">about</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
                </li>
                
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="">categories</a>
                  
                 
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="profile.php">contact us</a>
                </li>
                
                  <!-- <?php
                 //$rowcategories = mysqli_query($conn,"SELECT * FROM `categories` WHERE 'status' = '1'");
                  //if(mysqli_num_rows($res)){
                    //while($rowcategories = mysqli_fetch_assoc($rowcategories)){
                      ?>
                      <a class="dropdown-item border-0 transition-link" href="categories.php?id<?php echo $rowcategories["id"]?>
                  //<?php ucwords($rowcategories["title"]);?>"></a>
                  //<?php
                   // }

                  //}else{
                    //echo '<a class="dropdown-item border-0 transition-link" href="categories.php?id<?php echo $rowcategories["id"]?>
                    //<?php ucwords($rowcategories["title"]);?>"></a>'
                  }

                  ?> -->
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a class="dropdown-item border-0 transition-link" href="categories.php">Category</a><a class="dropdown-item border-0 transition-link" href="detail.php">Product detail</a><a class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">               
                <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (0)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>