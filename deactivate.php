<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
$username=$_SESSION['username'];
$deactivate=  mysql_query("Select * from  user_reg where user_name='$username'");
$deactivatedetl= mysql_fetch_array($deactivate);
?>
			<div class="main-content">
				<div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<!-- <i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a> -->
							</li>

<!--							<li>
								<a href="#">More Pages</a>
							</li>-->
							<li class="active"><a href="deactivate.php">Deactivate</a></li>
						</ul><!-- /.breadcrumb -->

						
					  </div>
					<center><h2 style="color:#800080;font-weight:normal;">Deactivate</h2></center>
        
       
                    <div class="col-md-12">
                        <div class="card" style="min-height:300px">                        
                            <div class="content">
                            
<!--                                <input tyep="hidden" name="deluser" value="<?php // echo htmlspecialchars($login_session); ?>" -->
                                <center>
                                  <div>
                                     <?php
                                         if(isset($_SESSION['account_deactivate']) && $_SESSION['account_deactivate']!="")
                                        {
                                      ?>
                                       <div class="alert alert-success">
                                          <strong>Success!</strong> Your account has been deleted.
                                       </div>

                                     <?php
                                       unset($_SESSION['account_deactivate']);
                                        }
                                       ?>
                                  </div>
                                </center>
                                <p>
                                  <strong  style="font-size: 17px;">Are you really want to deactivate your account?</strong> Your Entire Details and comments will be deleted!
                                </p>

                                <form name="delete" id="delete" method="POST" action="controller/member-deactivate.php">
                                    <input type="hidden" id="txt_uid_hid_delete" name="txt_uid_hid_delete" value="<?php echo $deactivatedetl['user_name'];?>"/>
                                    <button type="submit" class="btn btn-success btn-md" name="btndelete" onclick="deleteuser();">
                                    	Yes
	          		                    </button>
                                    <a href="member-timeline.php" class="btn btn-danger"> No </a>
                                </form>
                                
                            </div>
                        </div> 
                        <?php
                    include "include/footer.php";
                    ?>                   
                    </div>

        </div>
      </div>
