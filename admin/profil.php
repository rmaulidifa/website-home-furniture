<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">50</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">@rmdifa</p>
                                        <span class="content-text">Hello, I want to order</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">@stud1project</p>
                                        <span class="content-text">Ready kak?</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2"
                                        aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">@dehabbits</p>
                                        <span class="content-text">Mau custom furniture</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="./images/user/user.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="./images/user/user.png" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1">Admin</p>
                                    <small>Admin@info.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="../index.php">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                                
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="./images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">Admin</p>
                    <small class="text-white">Admin@info.com</small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="index.php">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Dashboard
                    </a>
                    <a class="nav-link px-3" href="profil.php">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="product.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Product
                    </a>
                    <a class="nav-link px-3" href="category.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Category
                    </a>
                    <a class="nav-link px-3" href="brand.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Brand
                    </a>
                    <a class="nav-link px-3" href="stock.php">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Stock
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="recap.php">
                        <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Recap Order
                    </a>
                    <a class="nav-link px-3" href="faq.php">
                        <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>FAQ
                    </a>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="act_logout.php">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

    <div style="margin-left:20%">
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div style="margin-top:5%">
                    <h1 class="card-title"><center>DAFTAR PENGGUNA</center></h1>
                    <!-- <p class="card-description"> Add class <code>.table-dark</code> -->
                    </p>
                    <table class="table table-hover"> 
       <thead> 
         <tr> 
           <!-- <th scope="col">ID</th>  -->
           <th scope="col">Username</th> 
           <th scope="col">Email</th> 
           <th scope="col">Level</th> 
         </tr> 
       </thead> 
       <tbody> 
                      <!-- panggil isi tabel --> 
       <?php 
               include "koneksi.php"; 
               $query = "select * from pengguna"; 
               $output = $connect->query($query); 

               while ($data = $output->fetch_array()) { 
             ?> 
             <tr> 
             <td scope="row"><?php echo $data['username']?></td> 
             <td scope="row"><?php echo $data['email']?></td> 
             <td scope="row"><?php echo $data['level']?></td> 
             <td> 
             <div class="text-center"> 
         
         <button type=" button" class=" btn-danger btn-sm"><a href="delete_profil.php?id=<?php echo $data['username'] ?>" class="text-white">Hapus</a></button>
        <button type=" button" class=" btn-danger btn-sm"><a href="view_profil.php?id=<?php echo $data['username'] ?>" class="text-white">Edit</a></button>
         
       </div> 
             </td> 
             </tr> 
              
             <?php }?> 
          
       </tbody> 
     </table> 
     <!-- End Table with stripped rows --> 
   </div> 
 </div>   

    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./dist/js/index.js"></script>
    
</body>

</html>