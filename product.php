<?php
require_once('Admin/config/config.php');

require_once('Admin/function.php');
$products = db_select('product', ' 1 ORDER BY id ASC ');
$categories = db_select('danhmuc', ' 1 ORDER BY id ASC ');
$check = -1;
$product_by_cate = [];

function db_select_by_cate($cate_id)
{
   $product_by_cate_in = db_select('product', " id_danhmuc =  $cate_id  ORDER BY id_danhmuc ASC ");
   return $product_by_cate_in;
}

function check_cate($check_cate)
{
   if($check_cate == -1) {
      return 0;
   }
   return -1;
}

if(array_key_exists('test6', $_POST)){
   unset ($product_by_cate);
   $product_by_cate = db_select_by_cate('6');
   $check = check_cate($check);
}

if(array_key_exists('test7', $_POST)){
   unset ($product_by_cate);
   $product_by_cate = db_select_by_cate('7');
   $check = check_cate($check);
}

if(array_key_exists('test8', $_POST)){
   unset ($product_by_cate);
   $product_by_cate = db_select_by_cate('8');
   $check = check_cate($check);
}

if(array_key_exists('test9', $_POST)){
   unset ($product_by_cate);
   $product_by_cate = db_select_by_cate('9');
   $check = check_cate($check);
}

if(array_key_exists('test10', $_POST)){
   unset ($product_by_cate);
   $product_by_cate = db_select_by_cate('10');
   $check = check_cate($check);
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#sel1').change(function(){
                var getValue = $(this).val();
               // alert(getValue);
                //Ajax call
                $.post('varible.php', { selectedValue: getValue }, function(data){
                    //alert('check response value:  '+data);
                });
            });
        });
      </script>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style1.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <!-- Libraries Stylesheet -->
      <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="computer.html">Computer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="laptop.html">Laptop</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="product.html">Products</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="register.php">Register</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->


      <!-- products -->
      <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">Tech shop</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Categories</h4>
                                            <ul class="list-unstyled fruite-categorie">
                                            <!-- category -->
                                                <?php foreach ($categories as $key1 => $cate) { ?>
                                                   
                                                    <li onclick="">
                                                        <div class="d-flex justify-content-between fruite-name">
                                                            <a href="#"><i class="fas fa-apple-alt me-2"></i> <?= $cate['tendanhmuc'] ?> </a>
                                                            <span> <?= get_product_amount($cate['id']) ?> </span>
                                                            <form method="post">
                                                                <input type="submit" name="<?php echo 'test'.$cate['id'] ?>" id="<?php echo 'test'.$cate['id'] ?>" value="RUN" /><br/>
                                                            </form>
                                                        </div>
                                                    </li>
                                                <?php } ?>    
                                            <!-- category -->
                                            <script>
                                                function db_category ( id ) {
                                                   $.ajax({
                                                         url:"varible.php",    //the page containing php script
                                                         type: "post",    //request type,
                                                         dataType: 'json',
                                                         data: {registration: "success", category_type: id },
                                                         success:function(result){
                                                            console.log(result.abc);
                                                         }
                                                   });
                                                }
                                                </script>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4 class="mb-2">Price</h4>
                                            <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                            <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="mb-3">Featured products</h4>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/featur-1.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Big Banana</h6>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                                    <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center my-4">
                                            <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">

                                    <?php if($check == -1) {
                                       foreach ($products as $keys => $pro_2) { ?>
                                       <!-- Product -->
                                       <div class="col-md-6 col-lg-6 col-xl-4">
                                          <div class="rounded position-relative fruite-item">
                                             <div class="fruite-img">
                                                   <img src="<?= get_product_thumb($pro_2['hinhanh']) ?>" class="img-fluid w-100 rounded-top" alt="">
                                             </div>
                                             <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"> <?= get_category_name($pro_2['id_danhmuc']) ?> </div>
                                             <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                   <h4> <?= $pro_2['tensanpham'] ?> </h4>
                                                   <p> <?= $pro_2['noidung'] ?> </p>
                                                   <div class="d-flex justify-content-between flex-lg-wrap">
                                                      <p class="text-dark fs-5 fw-bold mb-0"> <?= $pro_2['giasp'] ?> </p>
                                                      <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Product -->
                                    <?php }
                                    } ?> 
                                    
                                    <?php if($check == 0) { ?>
                                       <?php foreach ($product_by_cate as $key => $pro) { ?>
                                       <!-- Product -->
                                       <div class="col-md-6 col-lg-6 col-xl-4">
                                          <div class="rounded position-relative fruite-item">
                                             <div class="fruite-img">
                                                   <img src="<?= get_product_thumb($pro['hinhanh']) ?>" class="img-fluid w-100 rounded-top" alt="">
                                             </div>
                                             <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"> <?= get_category_name($pro['id_danhmuc']) ?> </div>
                                             <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                   <h4> <?= $pro['tensanpham'] ?> </h4>
                                                   <p> <?= $pro['noidung'] ?> </p>
                                                   <div class="d-flex justify-content-between flex-lg-wrap">
                                                      <p class="text-dark fs-5 fw-bold mb-0"> <?= $pro['giasp'] ?> </p>
                                                      <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Product -->
                                    <?php }
                                    } ?>

                                    <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- end products -->

      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="images/logo1.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

