<?php
include('include/header_external.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
<body class="no-skin">

<!-- <div class="as_lightbox_wrapper"></div> -->
<!-- <div class="fullonclick">
<div class="col-xs-12 col-md-4"></div>
<div style="background:orange;position: fixed;z-index: 9;top:100px;left:35%">
    <div class="as_lightbox_container" id="Simple_Lightbox">
        <div class="as_lightbox">
		    <div class="as_lightbox_close" id="as_lightbox_close">
                <img src="images/close_flat_icon.png" alt="Close Lightbox" title="Close" height="20px" width="20px"/>
            </div>
            <div class="as_clear"></div>
            <center>
		        <div class="wrap">
                      <h4>Sign Up to get full access</h4><br/>
                     
                        <a class="btn btn-info" style="color:black;" href="clubsignup_view.php">
	                        <i class="fa fa-user"></i> Business Sign Up
	                    </a>
	                    <a class="btn btn-info" style="color:black;" href="usersignup_view.php">
	                        <i class="fa fa-user"></i> Member Sign Up
	                    </a>
                      <br/>
                      <h4>If you already Registered then Login</h4><br/>
                        <a class="btn btn-warning" style="color:black;" href="clublogin_view.php">
	                        <i class="fa fa-user"> </i> Business Login
	                    </a>
	                    <a class="btn btn-warning" style="color:black;margin-left: 25px;" href="login_view.php">
	                        <i class="fa fa-user"> </i> Member Login
	                    </a>
                </div>
            </center>
        </div>
    </div>
</div>
<div class="col-xs-12 col-md-4"></div>
</div> -->

<!-- <div class="as_lightbox_wrapperp"></div> -->
<!-- <div style="width:500px; background-color: #fff;" class="as_lightbox_container" id="Simple_Lightbox">
    <div class="as_lightboxp">
		<div class="as_lightbox_closep" id="as_lightbox_closep">
                    <img src="images/close_flat_icon.png" alt="Close Lightbox" title="Close" height="20px" width="20px"/>
                </div>
        <div class="as_clear"></div>
         <center>
		        <div class="wrapp">
                <h4>Sign Up to get full access</h4><br/>
                    <a class="btn btn-info" href="clubsignup_view.php">
	                      <i class="fa fa-user"></i> Business Sign Up
	                  </a>
	                  <a class="btn btn-info" href="usersignup_view.php">
	                      <i class="fa fa-user"></i> Member Sign Up
	                  </a>
            </div>
        </center>
    </div>
 </div> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  

<div class="container">
  <!-- <h2>Modal Example</h2>
  <button type="button" class="btn btn-info btn-lg">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tunng.co</h4>
        </div>
        <div class="modal-body" style="padding:0px;">
          
          <h4>Sign Up to get full access</h4><br/>
                     
              <a class="btn btn-info" style="color:black;" href="clubsignup_view.php">
                <i class="fa fa-user"></i> Business Sign Up
            </a>
            <a class="btn btn-info" style="color:black;" href="usersignup_view.php">
                <i class="fa fa-user"></i> Member Sign Up
            </a>
            <br/><br>
            <h4>If you already Registered then Login</h4><br/>
              <a class="btn btn-warning" style="color:black;" href="clublogin_view.php">
                <i class="fa fa-user"> </i> Business Login
            </a>
            <a class="btn btn-warning" style="color:black;margin-left: 25px;" href="login_view.php">
                <i class="fa fa-user"> </i> Member Login
            </a>
            <br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <!-- <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button> -->

                <div class="navbar-header pull-left">
                    <a href="index.php" class="navbar-brand">
                        <small>
                            <table border="0">
                                <tr>
                                    <td rowspan="2"><img src="images/tree.png" align="left"></td>
                                    <td>Tunng.co</td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 12px">Empowering Business</span></td>
                                </tr>
                            </table>      
                         </small>
                    </a>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
             <div class="main-content">
                <div class="main-content-inner">
                    

                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">

                            
                        </div><!-- /.ace-settings-container -->

                        

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <!-- <div class="alert alert-info">
                                    <button class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-hand-o-right"></i>
                                    Please note that demo server is not configured to save the changes, therefore you may see an error message.
                                </div> -->
                                <h1 align="center" class="ftitleh"> Search Result </h1>
                                <div class="row jumbotron">
                                    <div id="searchbtnbusi" class="col-md-6">
                                         <h3>Business List</h3>
                                           <?php
                                             $i=1;
                                             $searchtxt=trim($_GET['searchtxt']);
                                             include 'controller/connection.php';
                                             $businessdtl=  mysql_query("SELECT * FROM club where club_name LIKE '%$searchtxt%' order by add_date DESC");
                                             while($sqlresultbus=mysql_fetch_array($businessdtl))
                                               {
                                             ?>
                                            <a href="#" data-toggle="modal" data-target="#myModal">
                                            <div class="well" onmouseover="this.style.border='1px solid orange'" onmouseleave="this.style.border='1px solid #DDDDDD'">
                                                <div class="row">
                                                <div class="col-xs-12 col-md-4">
                                                    <?php
                                                        if($sqlresultbus['club_image']=="")
                                                        {
                                                            ?>
                                                        <img src="images/no_image.jpg" class="img-responsive thumbnail" alt="company logo not found.">
                                                         <?php
                                                        }
                                                     else {
                                                         ?>
                                                         <img src="assets/img/club_photo/<?php echo $sqlresultbus['club_image'];?>" class="img-responsive thumbnail" alt="company logo not found.">
                                                      
                                                        <?php
                                                           }
                                                        ?>
                                                    
                                                   
                                                </div>
                                                <div class="col-xs-12 col-md-8 ftitile">
                                                    <h2> <?php echo $sqlresultbus['club_name'];?> </h2>
                                                    <h3><?php echo $sqlresultbus['club_country'];?> | <?php echo $sqlresultbus['club_city'];?> </h3>
                                                    <p class="fmail"> Email Id : <?php echo $sqlresultbus['user_emailid'];?> </p>
                                                    <p class="fmail"> Address : <?php echo $sqlresultbus['club_address'];?> </p>
                                                    <p class="fmail"> Date : <?php echo date( 'd/m/Y',strtotime($sqlresultbus['add_date']));?> </p>
                                                </div>
                                            </div>

                                            </div>
                                            </a>
                                           <?php
                                            $i++;
                                               }
                                            ?>
                                         
                                    </div>
                                    <div id="searchbtnproduct" class="col-md-6">
                                         <h3>Products List</h3>
                                          <?php
                                             $i=1;
                                             include 'controller/connection.php';
                                             $product=  mysql_query("SELECT * FROM add_product_business where (category LIKE '%$searchtxt%' or subcategory LIKE '%$searchtxt%' or title LIKE '%$searchtxt%') order by subcategory DESC");
                                             while($sqlresult=mysql_fetch_array($product))
                                               {
                                             ?>
                                            <a href="#" data-toggle="modal" data-target="#myModal">

                                            <p class="onribbon_price" style="transform:rotate(-45deg);border:0px solid black;position: absolute;z-index:1;top:18px;font-width:bold !important;"><?php //echo $sqlresult['price'];?></p>
                                            
                                            <div class="well" onmouseover="this.style.border='1px solid orange'" onmouseleave="this.style.border='1px solid #DDDDDD'">

                                                <div class="row">

                                                <div class="col-xs-12 col-md-4">
                                                       <?php
                                                        if($sqlresult['product_imgone']=="")
                                                        {
                                                            ?>
                                                        <img src="images/no_image.jpg" class="img-responsive thumbnail" alt="company image not found.">
                                                         <?php
                                                        }
                                                     else {
                                                         ?>
                                                         <img src="images/businessimg/<?php echo $sqlresult['product_imgone'];?>" class="img-responsive thumbnail" alt="company image not found.">
                                                          <p style="transform:rotate(-45deg);border:0px solid black;position: absolute;z-index:1;top:18px;font-width:bold !important;color:black;font-size:15px"><?php echo $sqlresult['price'];?></p>
                                                          <img src="images/corner_ribbon.png" style="transform: rotate(0deg);position:absolute;width:90px;height:90px;left:5px;top:-7px">

                                                        <?php
                                                           }
                                                        ?>
                                                    
                                                    
                                                </div>
                                                <div class="col-xs-12 col-md-8 ftitile">

                                                    
                                                    <h2> <?php echo $sqlresult['title'];?> </h2>
                                                
                                                    <p class="fmail"> Brand Name: <?php echo $sqlresult['category'];?></p>
                                                    <p class="fmail"> Price: <?php echo $sqlresult['price'];?></p>
                                                    <p class="fmail"> Date:<?php echo date( 'd/m/Y',strtotime($sqlresult['entry_dt']));?> </p>
                                                </div>
                                            </div>
                                            </div>
                                            </a>
                                         <?php
                                        $i++;
                                            }
                                        ?>
                                         
                                    </div>
                                </div>

                                <div id="grid-pager"></div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <?php include('include/footer_external.php'); ?>
        
    </body>
</html>
