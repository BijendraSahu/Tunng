<?php
include('include/header_external.php');

session_start();
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
<body class="no-skin">
<div class="container">
  
</div>
        
<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">

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
              </div>

              

              <div class="row">
                  <div class="col-xs-12">
                      <h1 align="center" class="ftitleh"> About </h1>
                      <div class="row jumbotron">
                          <div class="col-md-12">
                                       

                          <p align="left" style="font-size: 18px;color:#000000">
                             With Tunng.co we offer you the opportunity to build your brands on our e-commerce platform with free themes. We provide a cost-effective route to business owners and their representatives to market your goods and services, whether you sell online, in store, on social media or at the trunk of your car Tunng.co got you covered.
                          </p>
                          <h3 align="left" style="color:#800080;font-weight: 900"> Support Topics </h3><br>
                          <h4 align="left" style="color:#800080;font-weight: 900"> Business: </h4>
                          <p align="left" style="font-size: 18px;color:#000000">
                            Members and followers are the best way to promote your account or grow your business on Tunng.co. Building a large base of followers is key to take advantage and drive your business to achieve a positive results. members see your content, engage,buy and share it with others. This help in attracting a larger audience and can help attract even more members eager to know more about what your business has to offer. Don't wait to create an account on Tunng.co, but create account on Tunng.co and wait as it will help in spreading your business gospel. promoting your business is a priority. step 1 creat account
                          </p>
                          <h4 align="left" style="color:#800080;font-weight: 900"> Member: </h4>
                          <p align="left" style="font-size: 18px;color:#000000">
                            Sign up ,follow any kind of business of your choice, you can order, contact or check any kind of goods of your choice. 
                          </p>


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