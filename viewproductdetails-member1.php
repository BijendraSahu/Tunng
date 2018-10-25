<?php
include "include/header_external.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
$srno=$_GET['srno'];
$sql=  mysql_query("SELECT * FROM add_product_business WHERE srno='$srno'");
     $sqlresult= mysql_fetch_assoc($sql); 
     $emailidbus=$sqlresult['emailid'];
        
?>

<div class="main-content">
                <div class="main-content-inner" style="font-size:px;">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <!-- <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a> -->
                            </li>

<!--                            <li>
                                <a href="#">More Pages</a>
                            </li>-->
                            <li class="active"><a href="dashboard.php">Search Business</a></li>
                            <li class="active"><a href="#">View All Products</a></li>
                            <li class="active">Product Review</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>  
                  
                    <div class="well" style="padding:45;background:#ffffff">
                        <div class="page-header">
                            <h1>Product Detail </h1>
                        </div>

                        <style>
                        @media (max-width: 576px){ .sliderstyle {height:200px !important;width:100%;}  }
                        @media (min-width: 576px){ .sliderstyle {height:300px !important;width:100%;}  }
                        @media (min-width: 768px){ .sliderstyle {height:330px !important;width:100%;}  }
                        @media (min-width: 992px){ .sliderstyle {height:280px !important;width:100%;}  }
                        @media (min-width: 1200px){ .sliderstyle {height:300px !important;width:100%;}  }
                        
                        </style>

                        <div class="row">
                        <div class="col-md-6">
                               
                                    <!-- Indicators -->
                                    

                                    <!-- Slides -->
                                    
                                        <div >
                                        <img src="images/businessimg/<?php echo $sqlresult['product_imgone'];?>" class="sliderstyle"/>
                                          
                                        </div>
                                    

                                    <!-- Controls -->
                                
                            </div>
                            <link rel="stylesheet" type="text/css" href="css/style.c">
                            <div class="col-md-6" style="border:0px solid gray;">
                            <center><h2 class="prodh">Product Detail</h2></center>
                            <!-- Datos del vendedor y titulo del producto -->
                              <h4 class="title-price"><b class="prodt">Product Name</b></h4>
                                <h4 style="margin-top:0px;"><?php echo $sqlresult['title'];?></h4>
                                <!-- Precios -->
                                <h4 class="title-price"><b style="font-family: serif;color:#800080;">Price</b></h4>
                                <h4 style="font-family: serif;margin-top:0px;"><?php echo $sqlresult['price'];?></h4>

                                <!-- Detalles especificos del producto -->
                                <h4 class="title-price"><b style="font-family: serif;color:#800080;">Description</b></h4>
                                <h5 style="font-family: serif;margin-top:0px;"><?php echo $sqlresult['detaildiscription'];?></h5>
                             
                                <!-- Botones de compra -->
                                <div  style="padding-bottom:0px;">
                                    <a href="payment.php?srno=<?php echo $srno;?>" class="btn btn-success">
                                        <span style="margin-right:20px" aria-hidden="true"></span> Buy & Procced To Payment
                                    </a>
                                </div>                                        
               
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php echo  "http://tunng.co/viewproductdetails1.php?srno=".$srno; ?>" >
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_google_plus"></a>
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                </div>
     <script async src="//static.addtoany.com/menu/page.js"></script>                           
                            </div>

                        </div>

                    </div>
                    <?php
                    include "include/footer.php";
                    ?>
                </div>
            </div>

          
