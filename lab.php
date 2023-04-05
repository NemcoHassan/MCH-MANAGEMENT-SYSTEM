<?php 
include ('config.php');
if(isset($_POST['save']))
{
  $ID=$_POST['id'];
  $FullName=$_POST['name'];
  $Age=$_POST['age'];
  $Date=$_POST['date'];
  $Tellphone=$_POST['phone'];
  $Gender=$_POST['gender'];
  $Test_type=$_POST['type'];
  $Disease=$_POST['disease'];
  if(!empty($FullName)&& !empty($Age)&& !empty ($Date)&& !empty 
  ($Tellphone)&& !empty($Gender)&& !empty($Test_type)&& !empty($Disease)){
    $sql="INSERT INTO `lab` (`ID`, `Name`, `Date`, `Age`, `telphone`, `gender`, `typetest`, `disease`) VALUES 
    ('$ID', '$FullName', '$Age', '$Date', '$Tellphone', '$Gender', '$Test_type', '$Disease');";
     $result=mysqli_query($conn,$sql);
     if($result){
       echo '<script>alert("Successfully Added")</script>';
       // header("location:list.php");
     }
     else{
       echo "ll";
   
     }  

  }
  else {
    echo '<script>alert("Blank space not allowed")</script>';

  }
  
   
  }
  
  
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
    <?php include("sidenav.php");?>
    </div>
    <?php include("nav.php");?>
    <!-- Start Welcome area -->
    
            <!-- Mobile Menu start -->
            
            <!-- Mobile Menu end -->
           
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3 style="color:#DD2F6E; font-weight:bold;">LABORATORY</h3>
                    <p style="color:#DD2F6E; font-weight:bold;">Laboratory Form Data </p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="#" id="loginForm" method="POST">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                    <label>ID</label>
                                    <input class="form-control" name="id">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Full Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="age">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tellphone</label>
                                    <input type="tell" class="form-control" name="phone">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <div class="row">
                                                            
                                    <div class="form-group col-lg-6">
                                             <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="gender">
													<option>Male</option>
										            <option>Female</option>
																			
										 </select>
                                       </div>
                                     </div>
                                  </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Type of Test</label>
                                    <div class="row">
                                                            
                                    <div class="form-group col-lg-6">
                                             <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="type">
															<option>Urea</option>
															<option>Blood</option>
                                                             <option>Tool</option>
                                                            <option>Discharge</option>
                                     
																			
																		</select>
                                                                </div>
                                                            </div>
                                                        </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Disease</label>
                                    <input type="text" class="form-control" name="disease">
                                </div>
                               
                               
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" style="background-color:#DD2F6E; font-weight:bold;" name="save">Save</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
     

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>