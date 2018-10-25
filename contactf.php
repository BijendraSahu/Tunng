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
                        <h1 align="center" class="ftitleh"> Contact </h1>
                        <div class="row jumbotron">
                            <div class="col-md-12">
                                         




<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
          <div class="card card-user">
              
          </div>
        </div>
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <?php
                if(isset($_SESSION['successmsg']))
                {
                    ?>
                <center>
                  <div class="alert alert-success"><?php echo $_SESSION['successmsg'];?></div>
                </center>
                  <?php
                }
                ?>
                                  
 <div class="content" style="font-family:serif;font-weight: bold;">
    <form method="POST" action="controller/contactf-us-submit.php" class="form-horizontal">
      <fieldset>
          <div class="form-group">
            <label class="col-md-4 control-label" style="color:#800080;margin-top: -13px;font-size: 16px;" for="blood_group">Subject</label>
              <div class="col-md-4">
                <select id="subject" name="subject" class="form-control" style="border:1px solid #800080">
                    <option value="">Select Subject</option>
                    <option value="Change Order">Change Order</option>
                    <option value="Franchisee">Franchisee</option>
                    <option value="Order Delivery">Order Delivery</option>
                    <option value="Offer Redemption">Offer Redemption</option>
                    <option value="Order Payment/refund">Order Payment/refund</option>
                    <option value="Problem With Item Received/Return">Problem With Item Received/Return</option>
                    <option value="Post Delivery Services">Post Delivery Services</option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" style="color:#800080;margin-top: -13px;font-size: 16px;" for="name">Name</label>  
            <div class="col-md-4">
            <input value="<?php if(isset($datafield['afnamep'])) echo $datafield['afnamep'];?>"id="f_name" name="f_name" type="text" placeholder="Enter your name" class="form-control input-md" >
            </div>
            <?php
            $stylenm="";
                  if(isset($errorlist['f_name_null']) || isset($errorlist['f_name_char']))
                  {
                      $stylenm="display:block";
                  }
                  else
                  {
                      $stylenm="display:none";
                  }
            ?>
            <div class="col-md-3 alert alert-danger" id="namejs" style="padding:4px;<?php echo $stylenm;?>">
              <?php
                  if(isset($errorlist['f_name_null']))
                  {
                      echo $errorlist['f_name_null'];
                  }
                  if(isset($errorlist['f_name_char']))
                  {
                      echo $errorlist['f_name_char'];
                  }
              ?>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" style="color:#800080;margin-top: -13px;font-size: 16px;" for="email">Email</label>  
            <div class="col-md-4">
            <input  value="<?php if(isset($datafield['aemail'])) echo $datafield['aemail'];?>" id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" >
              
            </div>
            <?php
            $stylenm="";
                  if(isset($errorlist['email_vali_null']) ||  isset($errorlist['email_vali']) )
                  {
                      $stylenm="display:block";
                  }
                  else
                  {
                      $stylenm="display:none";
                  }
            ?>
            <div class="col-md-3 alert alert-danger" id="emailjs" style="padding:4px;<?php echo $stylenm;?>">
              <?php
                  if(isset($errorlist['email_vali_null']))
                  {
                      echo $errorlist['email_vali_null'];
                  }
                  if(isset($errorlist['email_vali']))
                  {
                      echo $errorlist['email_vali'];
                  }
              ?>
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" style="color:#800080;margin-top: -13px;font-size: 16px;" for="contact">Contact no.</label>  
           
            <div class="col-md-4">
            <input value="<?php if(isset($datafield['amob_no'])) echo $datafield['amob_no'];?>" id="mob_no" name="mob_no" type="text" placeholder="Enter your contact no." class="form-control input-md" >
            </div>
            <?php
            $stylenm="";
                  if(isset($errorlist['mob_null']) || isset($errorlist['mob_vali']) || isset($errorlist['mob_digit']) )
                  {
                      $stylenm="display:block";
                  }
                  else
                  {
                      $stylenm="display:none";
                  }
            ?>
            <div class=" col-md-3 alert alert-danger" id="mobilejs" style="padding:4px;<?php echo $stylenm;?>">
              <?php
                  if(isset($errorlist['mob_null']))
                  {
                      echo $errorlist['mob_null'];
                  }
                  if(isset($errorlist['mob_vali']))
                  {
                      echo $errorlist['mob_vali'];
                  }
                  if(isset($errorlist['mob_digit']))
                  {
                      echo $errorlist['mob_digit'];
                  }
              ?>
            </div>
          </div>


          <!-- Message Field -->
          <div class="form-group">
            <label class="col-md-4 control-label" style="color:#800080;margin-top: -13px;font-size: 16px;" for="area">Message</label>  
            <div class="col-md-4">
                <textarea value="<?php if(isset($datafield['amessage'])) echo $datafield['amessage'];?>" placeholder="Your Message" name="message" id="message" type="text" class="con_txt_3" tabindex="4"></textarea>
              
            </div>
            <?php
            $stylenm="";
                  if(isset($errorlist['msg_null']) )
                  {
                      $stylenm="display:block";
                  }
                  else
                  {
                      $stylenm="display:none";
                  }
            ?>
            <div class="col-md-3 alert alert-danger" id="messagejs" style="padding:4px;<?php echo $stylenm;?>">
              <?php
                  if(isset($errorlist['msg_null']))
                  {
                      echo $errorlist['msg_null'];
                  }
                 
              ?>
            </div>
          </div>
                 
          <div class="form-group">
              <input type="submit" class="btn btn-primary btn-md" value="Submit">
          </div>
          <br>
            <div class="col-md-12" style="font-family:serif;">
                <div class="company_address">
                    <h4 style="color:#800080;font-weight:bolder;">Address :</h4>
                    <p>9thavenue , wonderboom , pretoria,</p>
                    <p>South Africa</p>
                    <p>Email: <a href="#">contact@tunng.co</a></p>
                </div>
            </div>
      </fieldset>
    </form>
</div>


<style type="text/css">
    #bghover a:hover
    {
        background-color: transparent;
    }
</style> 

<!--footer end-->
             
<style type="text/css">

/*@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);*/
.bg-lightgray
{
    background-color:#800080;
    height: 150px;
}

  .form-horizontal
  {
   border: 0px solid black;
   background-color:#EAECEE;
  }
   h3
   {
    color: black;
   }
   label
   {
    color: #800080;
   }
input[type="text"],
      input[type="tel"],
      input[type="email"],
      input[type="date"],
      input[type="number"],
      select,textarea {
        display: block;
        font-size: 1em;
        padding: 0.5em;
        border:1px solid #800080;
        width:100%;
      }
      input[type="radio"] {
        float: left;
      }
      input[type="radio"] + label {
        display: block;
        margin: 0 0 0.5em 2em;
      }
      input[type="checkbox"] + label {
        display: inline-block;
        margin: 0 1em 0 0.5em;
      }
      input[type="date"]::-webkit-inner-spin-button {
        display: none;
      }
      fieldset {
        border: none;
        padding:1em;
        margin: 1.5em 0 0;
    
      }
    
.form-control input-md{
  border-style: solid;
}
/*.button {
    background-color: #4CAF50;
    border: none;
    color: green;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

  input[type="submit"] 
{
        color: #fff;
    background:#63D8F1;
    font-size: 2em;
    cursor: pointer;
}*/

    input[type="reset"] {
        color: #fff;
    background: #FFD700;
    font-size: 1em;
    cursor: pointer;
      }
      .con_txt_3[type="text"] {
    height: 150px;
   width: 99%;
}
 
</style>

<?php 
unset($_SESSION['datafield']);
unset($_SESSION['errorlist']);
unset($_SESSION['successmsg']);
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
