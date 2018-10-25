<?php
include "include/header_bus.php";
include "include/sidebar_bus.php";
include 'controller/connection.php';
$searchtxt=trim($_GET['searchtxt']);

?>
		<div class="main-content">
				<div class="main-content-inner">
                                    
     <?php
     if($searchtxt!='')
     {
       
        $serchdata= $searchtxt;
       $arr=@split(" ",$serchdata);
       $result=  sizeof($arr);
       $queryvar="";
       for($i=0;$i<=$result;$i++)
       {// splitting the array 
           @$queryvar .="(club_name LIKE '%$arr[$i]%') AND ";
       }
       $queryvar=substr($queryvar, 0, -5);
    $search="";
    $rs_result="";
 //pagination==================================
 
     $adjacents = 3;
     $sqlc = mysql_query("Select * from club where $queryvar");
     
     $total_pages=  mysql_num_rows($sqlc);
     $targetpage = "searchresult.php?searchtxt=$searchtxt";
     $limit =10;
     @$page = $_GET['page'];
    if($page) 
            $start = ($page - 1) * $limit; 
    else
            $start = 0;
    $rs_result = mysql_query("Select * from club where  $queryvar LIMIT $start, $limit");
     mysql_close();
     if ($page == 0) $page = 1;
    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total_pages/$limit);
    $lpm1 = $lastpage - 1;
    $pagination = "";
    if($lastpage > 1)
    {	
        $pagination .= "<div class=\"pagination\">";
        if ($page > 1) 
            $pagination.= "<a href=\"$targetpage&page=$prev\"><< previous</a>";
        else
            $pagination.= "<span class=\"disabled\"><< previous</span>";
        if ($lastpage < 7 + ($adjacents * 2))
        {	
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class=\"current\">$counter</span>";
                else
                    $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))		
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
            }
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
                }
                $pagination.= "...";
                $pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                $pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
            }
            else
            {
                $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
                $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
                $pagination.= "...";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<span class=\"current\">$counter</span>";
                    else
                        $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
                }
            }
        }
        if ($page < $counter - 1) 
            $pagination.= "<a href=\"$targetpage&page=$next\">next >></a>";
        else
            $pagination.= "<span class=\"disabled\">next >></span>";
        $pagination.= "</div>\n";		
    }   
   
// echo "fgfhfgh".$total_rec;
 
 ?>
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
							<li class="active">Search Results</li>
						</ul>

						
					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								<div class="hr hr5 hr-dotted"></div>

								<div class="row">
									<!-- Conversation posts -->
                                                                         <?php
                                                                    if(mysql_num_rows($rs_result)>0)
                                                                    {
                                                                        while ($sqlresultbus=mysql_fetch_array($rs_result))
                                                                        {

                                                                    ?>
                                                                                                                            <div class="col-xs-12">
															<div class="media search-media" style="padding-right: 0px !important">
															<div class="col-xs-12 col-sm-3 col-md-3">
																<div class="media-left">
																	<a href="#">
                                                                                                                                            
                                                                                                                                                   <?php
                                                                                                                                            if($sqlresultbus['club_image']=="")
                                                                                                                                            {
                                                                                                                                                ?>
                                                                                                                                            <img src="images/default.png" alt="..." style="height:150px;width: 150px;">
                                                                                                                                             <?php
                                                                                                                                            }
                                                                                                                                         else {
                                                                                                                                             ?>
                                                                                                                                           <img alt="image" class="img-responsive"  src="images/club_photo/<?php echo $sqlresultbus['club_image'];?>"></a>
                                                                                                                                            <?php
                                                                                                                                               }
                                                                                                                                            ?>
                           

																	</a>
																</div>
																</div>
																<div class="col-xs-12 col-sm-9 col-md-9">
																<div class="media-body">
																	<div>
																	<h4 class="media-heading blue"><?php echo $sqlresultbus['club_name'];?></h4>
																	<p class="bolder"><?php echo $sqlresultbus['club_country'];?> | <?php echo $sqlresultbus['club_city'];?></p>
																	<p><span class="bolder">Email Id :</span> <?php echo $sqlresultbus['user_emailid'];?></p>
																	<p><span class="bolder">Address :</span> <?php echo $sqlresultbus['club_address'];?></p>
																	<p><span class="bolder">Date :</span> <?php echo date( 'd M Y',strtotime($sqlresultbus['add_date']));?></p>
																	</div>
																	
																	<!-- <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>
																	<span class="grey">$</span>
																	<span class="grey bolder bigger-125">250</span> -->
																</div>
																</div>
															</div>
														</div>
                                                                          <?php
                                                                       } 
                                                                    }
                                                                       else {
                                                                           ?>
                                                                                <div class="row" >
                                                            <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading c-list">
                                                                        <span class="title">No Result Found</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                                        <?php
                                                                       }
                                                         }
                                                                    ?>
                                                                        
								</div>
								<!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
                                                 <div class="col-md-12">
                                                        <?php  echo $pagination;?>
                                                    </div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php
    include "include/footer.php";
?>