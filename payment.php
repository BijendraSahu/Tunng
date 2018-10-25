<?php
include "include/header.php";
include "include/sidebar.php";
include 'controller/connection.php';
@$srno=$_GET['srno'];
?>

<div class="main-content">
				<div class="main-content-inner" style="">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<!-- <i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a -->>
							</li>

							<li>
								<a href="dashboard.php">Search Business</a>
							</li>
              <li>
								<li class="active">View All Products</li>
							</li>
              <li class="active">Product Review</li>
							<li class="active">Payment</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
					

						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
					

								<div class="widget-box" style="padding:10px">
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">Payment Process</h4>

										
									</div>
                                                                    
                                                                                      
                                                                     
<div class="stepwizard col-md-offset-3">
  <center>
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle"></a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
        <p>Step 3</p>
      </div>
        
    </div>
  </center>
  </div>
  
    <form role="form" action="controller/payment-detail.php" method="POST" onsubmit="return memberpaymentprocessValidation();">
    <div class="row setup-content" id="step-1">
    
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <h3> Step 1</h3>
          
          
          
          <div class="form-group">
              <input type="hidden" id="srno" name="srno" value="<?php echo $srno; ?>">
            <label class="control-label">Full Name</label>
            <input id="fname" name="fname" maxlength="25" type="text" class="form-control" value="<?php if(isset($datafield['datafname'])) echo $datafield['datafname'];?>" placeholder="Enter First Name" required />
          <?php
                                            $stylenm="";
                                                if(isset($errorlist['fname_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsfname" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['fname_null']))
                                                {
                                                    echo $errorlist['fname_null'];
                                                }

                                              ?>
                                         </div>
          </div>
         <div class="form-group">
            <label class="control-label">Mobile</label>
            <input id="mobileno" name="mobileno" maxlength="10" type="text" class="form-control" value="<?php if(isset($datafield['datafname'])) echo $datafield['datafname'];?>" placeholder="Mobile"  required />
          <?php
                                            $stylenm="";
                                                if(isset($errorlist['mobileno_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsmobileno" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['mobileno_null']))
                                                {
                                                    echo $errorlist['mobileno_null'];
                                                }

                                              ?>
                                         </div>
         </div>
           <div class="form-group">
            <label class="control-label">Email</label>
            <input id="emailid" name="emailid" maxlength="100" type="email" required="required" class="form-control" value="<?php if(isset($datafield['dataemailid'])) echo $datafield['dataemailid'];?>" placeholder="Enter Email" />
          <?php
                                            $stylenm="";
                                                if(isset($errorlist['emailid_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsemailid" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['emailid_null']))
                                                {
                                                    echo $errorlist['emailid_null'];
                                                }

                                              ?>
                                         </div>
           </div>
         
          
          <button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
        </div>
     
    </div>
    <div class="row setup-content" id="step-2">
     
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <h3> Step 2</h3>
          <div class="form-group">
            <label class="control-label">Country</label>
             <select id="country" name="country" class="form-control distributor" required>
           <option>Select Country</option>
					  <?php
                                            include './controller/connection.php';
                                            $sql=  mysql_query("SELECT * FROM  countries ORDER BY name asc ");
                                            echo mysql_error();
                                            mysql_close();
                                            while($sqlres=  mysql_fetch_array($sql))
                                            {
                                                
                                                 if(isset($datafield['datacountry']))
                                                    {
                                                        if($datafield['datacountry']==$result[1])
                                                        {
                                                             print "<option style='text-transform: capitalize;' value='$sqlres[2]'>$sqlres[2]</option>";
                                                        }
                                                        else
                                                        {
                                                            print "<option style='text-transform: capitalize;' value='$sqlres[2]'>$sqlres[2]</option>";
                                                        }
                                                    }
                                                    else 
                                                    {
                                                        print "<option style='text-transform: capitalize;' value='$sqlres[2]'>$sqlres[2]</option>";
                                                    }
                                            }
                                            ?>
					</select>
                                         <?php
                                            $stylenm="";
                                                if(isset($errorlist['country_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                                                                <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jscountry" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['country_null']))
                                                {
                                                    echo $errorlist['country_null'];
                                                }

                                              ?>
                                         </div>
           </div>
           <div class="form-group">
            <label class="control-label">State</label>
             <select id="state" name="state" class="form-control distributor" required>
            
            
        </select>
        <?php
                                            $stylenm="";
                                                if(isset($errorlist['state_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                                                                <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsstate" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['state_null']))
                                                {
                                                    echo $errorlist['state_null'];
                                                }

                                              ?>
                                         </div>
           </div>
           <div class="form-group">
            <label class="control-label">City</label>
            <select id="city" name="city" class="form-control distributor" required>
            
        </select>
       <?php
                                            $stylenm="";
                                                if(isset($errorlist['city_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                                                                <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jscity" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['city_null']))
                                                {
                                                    echo $errorlist['city_null'];
                                                }

                                              ?>
                                         </div>
            </div>
          <div class="form-group">
            <label class="control-label">Pin</label>
            <input id="pin" name="pin" maxlength="6" type="text" required="required" class="form-control" value="<?php if(isset($datafield['datapin'])) echo $datafield['datapin'];?>" placeholder="Enter Company Name" required/>
          <?php
                                            $stylenm="";
                                                if(isset($errorlist['pin_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jspin" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['pin_null']))
                                                {
                                                    echo $errorlist['pin_null'];
                                                }

                                              ?>
                                         </div>
          </div>
          <div class="form-group">
            <label class="control-label">Address </label>
            <input id="address" name="address" maxlength="50" type="text" required="required" class="form-control" value="<?php if(isset($datafield['dataaddress'])) echo $datafield['dataaddress'];?>" placeholder="Enter Company Address" required />
           <?php
                                            $stylenm="";
                                                if(isset($errorlist['address_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsaddress" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['address_null']))
                                                {
                                                    echo $errorlist['address_null'];
                                                }

                                              ?>
                                         </div>
          </div>
          <button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
        </div>
    
    </div>
    <div class="row setup-content" id="step-3">
   
        <div class="col-xs-12 col-md-6 col-md-offset-3">
<div class="well" style="background-image: url('images/backacdetail.jpg '); background-size: 100% 100%;background-repeat: no-repeat;color:#F9E8A0;font-size:20px; font-family: cursive; ">
                <h4 style='font-family:cursive;font-weight: bold;text-align: center;'>PYMENT DETAILS</h4>
                <?php
                     include 'controller/connection.php';
                     $sql=  mysql_query("SELECT * FROM add_product_business Where srno='$srno' ");
                     $sqlaccdtlresult=  mysql_fetch_array($sql);
                     $emai_busines=$sqlaccdtlresult['emailid'];
                     $sqlaccdtl=  mysql_query("SELECT * FROM club  where user_emailid='$emai_busines'");
                     $sqlaccdtlresult=  mysql_fetch_array($sqlaccdtl);
                     ?>
                <div >
            <label class="control-label">Bank Name: </label>
            <?php echo $bank_name=$sqlaccdtlresult['bank_name'];?>
               </div>
                <div >
            <label class="control-label">Account Holder Name: </label>
            <?php echo $bank_name=$sqlaccdtlresult['account_holder_name'];?>
               </div>
                <div >
            <label class="control-label">Account Number: </label>
            <?php echo $account_no=$sqlaccdtlresult['account_no'];?>
               </div>
                <div class="form-group">
            <label class="control-label">IFSC Code: </label>
            <?php echo $ifsc_code=$sqlaccdtlresult['ifsc_code'];?>
               </div>
                
            </div>
          <h3> Step 3</h3><hr>
          <!--<label class="radio-inline"><input id="radio_btn" name="radio_btn" type="radio" value="Dabit Card">Dabit Card</label>-->
          <label class="radio-inline"><input id="radio_btn" name="radio_btn" type="radio" value="Net Banking" >Net Banking</label>
          <label class="radio-inline"><input id="radio_btn" name="radio_btn" type="radio" value="Cash on Delivery" >Cash on Delivery</label><hr>
 <?php
                                            $stylenm="";
                                                if(isset($errorlist['radio_null']))
                                                {
                                                    $stylenm="display:block";
                                                }
                                                else 
                                                {
                                                    $stylenm="display:none";
                                                }
                                             ?>
                                               <div class="clearfix"></div>
                                         <div class="col-md-12 alert alert-danger" id="jsradio_btn" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                            <?php
                                                if(isset($errorlist['radio_null']))
                                                {
                                                    echo $errorlist['radio_null'];
                                                }

                                              ?>
                                         </div>
         <button class="btn btn-primary nextBtn btn-sm pull-right" type="submit" >Submit</button>
           </div>
    
    </div>
          </form>
       <div class="row setup-content" id="step-4">
      
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <h3> Step 4</h3><hr>
          <a href="https://www.sbi.co.in/" target="_blank">
              State Bank of India
          </a><br/>
          <a href="https://www.icicibank.com/" target="_blank">
              ICICI Bank
          </a><br/>
          <a href="https://www.axisbank.com/" target="_blank">
              Axis Bank
          </a><br/>
          <a href="http://www.kotak.com/" target="_blank">
              Kotak Mahindra Bank
          </a><br/>
          <a href="http://www.indusind.com/" target="_blank">
              IndusInd Bank
          </a><br/>
          <a href="http://www.bankofbaroda.co.in/" target="_blank">
              Bank of Baroda
          </a><br/>
          <a href="https://www.yesbank.in/" target="_blank">
              Yes Bank
          </a>
          
          </div>
     
    </div>

  
                                                                    
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
              <?php
                include "include/footer.php";
              ?>
				</div>
			</div><!-- /.main-content -->










<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <style type="text/css">
   

@media(max-width: 576px){ .stepwizard { display: table;width: 100%; position: relative; } }
@media(min-width: 576px){ .stepwizard { display: table;width: 100%; position: relative; } }
@media(min-width: 768px){ .stepwizard { display: table;width: 100%; position: relative; } }
@media(min-width: 992px){ .stepwizard { display: table;width: 50%; position: relative; } }
@media(min-width: 1200px){ .stepwizard { display: table;width: 50%; position: relative; } }


.stepwizard-step p {
    margin-top: 0px;
    font-weight: bold;
    text-transform: uppercase;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
/*.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}*/
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 6px 0;
    margin:10px 10px 2px 10px;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 100%;
}
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
        </script>
        <script type="text/javascript">
    $(document).ready(function(){
        
        // Getting subcategories-----------------
        $('#categories').change(function(){
            var category=$(this).val();
            $.ajax({
                url:'controller/get-sub-categories.php',
                method:'POST',
                data:'category='+category,
                success: function(res) 
                {
                    $('#subcategories').empty().append(res);
                }
            });
        });
        //get states
         $('#country').change(function(){
            var country=$(this).val();
            $.ajax({
                url:'controller/get-states.php',
                method:'POST',
                data:'country='+country,
                success: function(res) 
                {
                    $('#state').empty().append(res);
                }
            });
        });
         //get city
         $('#state').change(function(){
            var state=$(this).val();
            $.ajax({
                url:'controller/get-cities.php',
                method:'POST',
                data:'state='+state,
                success: function(res) 
                {
                    $('#city').empty().append(res);
                }
            });
        });
        
        
    });
</script>