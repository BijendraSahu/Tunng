<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
include 'function/countries.php';
$errorlist="";
$datafield="";
if(isset($_SESSION['errorlist']))
{
    $errorlist=$_SESSION['errorlist'];
}
if(isset($_SESSION['datafield']))
{
    $datafield=$_SESSION['datafield'];
}
$username=$_SESSION['username'];
$club=  mysql_query("select * from club where user_login_id='$username'");
$clubdetl=  mysql_fetch_array($club);

?>

<div class="main-content">
				<div class="main-content-inner">
                                    
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="active">Add Product Details</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									add product details
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
<script type="text/javascript">
   $( document ).ready( getSubcategoryOnPageload );
   
    function getSubcategoryOnPageload()
   {
       var category=$('#categoriesonload').val();
            $.ajax({
                url:'controller/get-sub-categories.php',
                method:'POST',
                data:'category='+category,
                success: function(res) 
                {
                    $('#subcategories').empty().append(res);
                }
            });
   }
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
								<!-- FORM BEGINS -->
								<form method="post" action="controller/add-products.php" onsubmit="return addproductValidation();" enctype="multipart/form-data" role="form" class="form-horizontal">
								<input type="hidden" id="emailadd" name="emailadd" value="<?php echo $clubdetl['user_emailid'];?>"   class="form-control sku">
 	
                                                                    <div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Select Category </label>

										<div class="col-sm-10">
                                                                                    <?php
                                                                                    if(isset($_SESSION['category']) && $_SESSION['category']!='')
                                                                                    {
                                                                                        ?>
                                                                                    <input  id="categoriesonload" name="categories" value="<?php echo $_SESSION['category'];?>" readonly="true"  class="col-xs-10 col-sm-5" type="text"  required>
                                                                                    <?php
                                                                                    }else{
                                                                                        ?>
                                                                                    <select id="categories" name="categories" placeholder="Time" class="col-xs-10 col-sm-5" required="required">
											<option value="">Select Category</option>
											 <?php
                                                                                 $p= getCategories();
                                                                                foreach($p as $category)
                                                                                {

                                                                                           if(isset($datafield['datacategor']))
                                                                                        {
                                                                                            if($datafield['datacategor']==$category)
                                                                                            {
                                                                                                 print "<option style='text-transform: capitalize;' value='$category' selected>$category</option>";
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                print "<option style='text-transform: capitalize;' value='$category'>$category</option>";
                                                                                            }
                                                                                        }
                                                                                        else 
                                                                                        {
                                                                                            print "<option style='text-transform: capitalize;' value='$category'>$category</option>";
                                                                                        }


                                                                                }
                                                                                ?>
											</select>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
											
                                                                                    
										</div>
                                                                                <?php
                                                                                $stylenm="";
                                                                                    if(isset($errorlist['categories_null']))
                                                                                    {
                                                                                        $stylenm="display:block";
                                                                                    }
                                                                                    else 
                                                                                    {
                                                                                        $stylenm="display:none";
                                                                                    }
                                                                                 ?>
                                                                                        <div class="clearfix"></div>
                                                                             <div class="col-md-8 alert alert-danger" id="jscategories" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                                                                <?php
                                                                                    if(isset($errorlist['categories_null']))
                                                                                    {
                                                                                        echo $errorlist['categories_null'];
                                                                                    }

                                                                                  ?>
                                                                             </div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Select Sub-Category </label>

										<div class="col-sm-10">
											<select id="subcategories" name="subcategories" class="col-xs-10 col-sm-5" type="text"  required>
												
											</select>
										</div>
                                                                                 <?php
                                                                                    $stylenm="";
                                                                                        if(isset($errorlist['subcategories_null']))
                                                                                        {
                                                                                            $stylenm="display:block";
                                                                                        }
                                                                                        else 
                                                                                        {
                                                                                            $stylenm="display:none";
                                                                                        }
                                                                                     ?>
                                                                                    <div class="clearfix"></div>
                                                                                 <div class="col-md-12 alert alert-danger" id="jssubcategories" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                                                                    <?php
                                                                                        if(isset($errorlist['subcategories_null']))
                                                                                        {
                                                                                            echo $errorlist['subcategories_null'];
                                                                                        }
                                                                                      ?>
                                                                                 </div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Title </label>

										<div class="col-sm-10">
											<input maxlength="25" id="titles" name="titles" value="<?php if(isset($datafield['datatitle'])) echo $datafield['datatitle'];?>"  placeholder="Enter Product Title" class="col-xs-10 col-sm-5" type="text"  required>
										</div>
                                                                                <?php
                                                                                $stylenm="";
                                                                                    if(isset($errorlist['title_null']))
                                                                                    {
                                                                                        $stylenm="display:block";
                                                                                    }
                                                                                    else 
                                                                                    {
                                                                                        $stylenm="display:none";
                                                                                    }
                                                                                 ?>
                                                                                   <div class="clearfix"></div>
                                                                             <div class="col-md-12 alert alert-danger" id="jstitles" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                                                                <?php
                                                                                    if(isset($errorlist['title_null']))
                                                                                    {
                                                                                        echo $errorlist['title_null'];
                                                                                    }

                                                                                ?>
                                                                             </div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Price </label>

										<div class="col-sm-10">
											<input maxlength="10" id="price" name="price" value="<?php if(isset($datafield['dataprice'])) echo $datafield['dataprice'];?>"  placeholder="Enter Product Price" class="col-xs-10 col-sm-5" type="text"  required>
										</div>
                                                                                <?php
                                                                                    $stylenm="";
                                                                                        if(isset($errorlist['price_null']))
                                                                                        {
                                                                                            $stylenm="display:block";
                                                                                        }
                                                                                        else 
                                                                                        {
                                                                                            $stylenm="display:none";
                                                                                        }
                                                                                     ?>
                                                                                       <div class="clearfix"></div>
                                                                                 <div class="col-md-12 alert alert-danger" id="jsprice" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                                                                    <?php
                                                                                        if(isset($errorlist['price_null']))
                                                                                        {
                                                                                            echo $errorlist['price_null'];
                                                                                        }

                                                                                      ?>
                                                                                 </div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select Country </label>

										<div class="col-sm-10">
											<select id="country" name="country"  class="col-xs-10 col-sm-5" type="text"  required>
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
										</div>
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

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select State </label>

										<div class="col-sm-10">
											<select id="state" name="state" class="col-xs-10 col-sm-5" type="text" required>
												
											</select>
										</div>
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

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Select City </label>

										<div class="col-sm-10">
											<select id="city" name="city" class="col-xs-10 col-sm-5" type="text" required>
												<option value=""></option>
											</select>
										</div>
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

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Product Image </label>

										<div class="col-sm-10">
											<input type="file" id="firstfile" name="firstfile" multiple="multiple" required /><br>
											<input type="file" id="secondtfile" name="secondtfile" multiple="multiple" required /><br>
											<input type="file" id="thirdtfile" name="thirdtfile" multiple="multiple" required /><br>
											<input type="file" id="fourthtfile" name="fourthtfile" multiple="multiple" required /><br>
											<input type="file" id="fifthtfile" name="fifthtfile" multiple="multiple" required /><br>
                                                                                        <?php
                                                                                        $stylenm="";
                                                                                            if(isset($errorlist['Image_One_null']) || isset($errorlist['Image_Two_null']) || isset($errorlist['Image_Three_null']) || isset($errorlist['Image_Four_null']) || isset($errorlist['Image_Five_null']))
                                                                                            {
                                                                                                $stylenm="display:block";
                                                                                            }
                                                                                            else 
                                                                                            {
                                                                                                $stylenm="display:none";
                                                                                            }
                                                                                         ?>
                                                                                          <div class="clearfix"></div>
                                                                                     <div class="col-md-12 alert alert-danger" id="casts" style= "text-align:center;padding:2px;border:2px solid red;<?php echo $stylenm;?> ">
                                                                                        <?php
                                                                                            if(isset($errorlist['Image_One_null']))
                                                                                            {
                                                                                                echo $errorlist['Image_One_null'];
                                                                                            }
                                                                                             if(isset($errorlist['Image_Two_null']))
                                                                                            {
                                                                                                echo $errorlist['Image_Two_null'];
                                                                                            }
                                                                                             if(isset($errorlist['Image_Three_null']))
                                                                                            {
                                                                                                echo $errorlist['Image_Three_null'];
                                                                                            }
                                                                                             if(isset($errorlist['Image_Four_null']))
                                                                                            {
                                                                                                echo $errorlist['Image_Four_null'];
                                                                                            }
                                                                                             if(isset($errorlist['Image_Five_null']))
                                                                                            {
                                                                                                echo $errorlist['Image_Five_null'];
                                                                                            }

                                                                                          ?>

                                                                                     </div>	
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Detail Description </label>

										<div class="col-sm-10">
											<textarea id="description" name="description" placeholder="Write few lines about your product" class="col-xs-10 col-sm-10" type="text"  required></textarea>
										</div>
                                                                                <?php
                                                                                $stylenm="";
                                                                                    if(isset($errorlist['description_null']))
                                                                                    {
                                                                                        $stylenm="display:block";
                                                                                    }
                                                                                    else 
                                                                                    {
                                                                                        $stylenm="display:none";
                                                                                    }
                                                                                 ?>
                                                                                   <div class="clearfix"></div>
                                                                             <div class="col-md-12 alert alert-danger" id="jsdescription" style= "text-align:center;padding:2px;<?php echo $stylenm;?> ">
                                                                                <?php
                                                                                    if(isset($errorlist['description_null']))
                                                                                    {
                                                                                        echo $errorlist['description_null'];
                                                                                    }

                                                                                  ?>
                                                                             </div>
									</div>

									<!-- <div class="clearfix form-actions" style="background:none;"> -->
										<div class="col-md-2"></div>
										<div class="col-md-10">
											<button class="btn btn-info" type="submit">
												<!-- <i class="ace-icon fa fa-check bigger-110"></i> -->
												&nbsp;Add&nbsp;
											</button>

											&nbsp;
											
										</div>
									<!-- </div> -->
								</form>
								<!-- FORM END -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>


<?php
    unset($_SESSION['errorlist']);
    unset($_SESSION['datafield']);
    unset($_SESSION['successmsg']);
    include "include/footerb.php";
?>