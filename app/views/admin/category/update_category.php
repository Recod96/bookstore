<!doctype html>
<html lang="ar" dir="rtl">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?=SITENAME?> - Categories - Update</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?=URLROOT.'assets/'?>images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?=URLROOT .'assets/'?>css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=URLROOT .'assets/'?>css/dataTables.bootstrap4.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?=URLROOT .'assets/'?>css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?=URLROOT .'assets/'?>css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?=URLROOT .'assets/'?>css/responsive.css">
      <link rel="stylesheet" href="<?=URLROOT ?>assets/css/arabic-font.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <?php require_once APPROOT .'/views/inc/side_bar.php' ?>
         <!-- TOP Nav Bar -->
         <?php require_once APPROOT .'/views/inc/top_nav_admin.php' ?>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">تحديث الفئة</h4>
                           </div>
                        </div>
                        <?php @show_alert(false)?>
                        <div class="iq-card-body">
                           <form method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>اسم الفئة:</label>
                                 <input type="text" class="form-control" name="name" value="<?=$data['category']->name ?>" required>
                              </div>
                              <div class="form-group">
                                 <label>صورة الفئة:</label>
                                 <img class="img-thumbnail mb-2" width="20%" src="<?=URLROOT.'img/category/'.$data['category']->image?>" alt="" srcset="">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="category_image" >
                                    <label class="custom-file-label">تعديل الصورة</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>وصف الفئة:</label>
                                 <textarea class="form-control" rows="4" name="description" required><?=$data['category']->description ?></textarea>
                              </div>
                              
                              <button type="submit" name="update_category" class="btn btn-primary" >تحديث</button>
                              <button type="reset" class="btn btn-danger">إلغاء</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Booksto</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?=URLROOT .'assets/'?>js/jquery.min.js"></script>
      <script src="<?=URLROOT .'assets/'?>js/popper.min.js"></script>
      <script src="<?=URLROOT .'assets/'?>js/bootstrap.min.js"></script>
      <script src="<?=URLROOT .'assets/'?>js/jquery.dataTables.min.js"></script>
      <script src="<?=URLROOT .'assets/'?>js/dataTables.bootstrap4.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/waypoints.min.js"></script>
      <script src="<?=URLROOT .'assets/'?>js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="<?=URLROOT .'assets/'?>js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="<?=URLROOT .'assets/'?>js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?=URLROOT .'assets/'?>js/custom.js"></script>
   </body>
</html>