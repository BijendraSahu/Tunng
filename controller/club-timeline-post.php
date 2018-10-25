<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $username=$_SESSION['username'];
   $clubname=$_SESSION['clubname'];
   $txtemoji=$_POST['txtemoji'];
   $postmessage=$_POST['message'];
   $postsubject=$_POST['subject'];
   
   $username=$_SESSION['username'];
   $clubname=$_SESSION['clubname'];
  
   function uploadImages($photo1)
   {
       if(trim($photo1['tmp_name']!=''))
       {
           $imgextension=substr(strrchr($photo1['name'],"."),1);
           if($imgextension=='jpg' || $imgextension=='JPG' || $imgextension=='JPEG'
                   || $imgextension=='jpeg' || $imgextension=='PNG' || $imgextension=='png' ||
                   $imgextension=='MP4' || $imgextension=='AVI')
           {
               $imgname=$photo1['name'];
               $imgfname =md5(time());
               $new_imgnm=$imgfname.$imgname;
               $imgpath="../images/club_post_images/";
               $img_path1=$imgpath.$imgfname.$imgname;
               $result=move_uploaded_file($photo1['tmp_name'],$img_path1);
               return $new_imgnm;
           }                   
           else
           {
               return "";
           }

       }
   }
   function uploadImages1($photo1)
   {
       if(trim($photo1['tmp_name']!=''))
       {
           $imgextension=substr(strrchr($photo1['name'],"."),1);
           if($imgextension=='mp4' || $imgextension=='MP4' || $imgextension=='AVI' || $imgextension=='avi' || $imgextension=='mov' || $imgextension=='mpeg'|| $imgextension=='doc' || $imgextension=='docx'|| $imgextension=='pdf' || $imgextension=='PDF')
           {
               $imgname=$photo1['name'];
               $imgfname =md5(time());
               $new_imgnm=$imgfname.$imgname;
               $imgpath="../images/club_post_videos/";
               $img_path1=$imgpath.$imgfname.$imgname;
               $result=move_uploaded_file($photo1['tmp_name'],$img_path1);
               return $new_imgnm;
           }                   
           else
           {
               return "";
           }

       }
   }
     function uploadImages2($photo1)
   {
       if(trim($photo1['tmp_name']!=''))
       {
           $imgextension=substr(strrchr($photo1['name'],"."),1);
           if($imgextension=='mp4' || $imgextension=='MP4' || $imgextension=='AVI' || $imgextension=='avi' || $imgextension=='mov' || $imgextension=='mpeg'|| $imgextension=='doc' || $imgextension=='docx'|| $imgextension=='pdf' || $imgextension=='PDF')
           {
               $imgname=$photo1['name'];
               $imgfname =md5(time());
               $new_imgnm=$imgfname.$imgname;
               $imgpath="../images/club_post_doc/";
               $img_path1=$imgpath.$imgfname.$imgname;
               $result=move_uploaded_file($photo1['tmp_name'],$img_path1);
               return $new_imgnm;
           }                   
           else
           {
               return "";
           }

       }
   }
   
   $fileupload=$_FILES['fileuploadimg'];
   $fileupload1=uploadImages($fileupload);
   
    $fileuploadv=$_FILES['fileuploadvideo'];
    $fileuploadv1=uploadImages1($fileuploadv);
    
     $fileuploadd=$_FILES['fileuploaddoc'];
    $fileuploadd1=uploadImages2($fileuploadd);
    if($postmessage!='' || $postsubject!='' || $fileupload1!='' ||$fileuploadv1!='' ||$fileuploadd1!=''){
        include'connection.php';
	$timelinepost=mysql_query("INSERT INTO club_post(user_name,club_name,post,emoji,post_image,post_video,post_doc,subject)values('$username','$clubname','$postmessage','$txtemoji','$fileupload1','$fileuploadv1','$fileuploadd1','$postsubject')");
	echo mysql_error();
	mysql_close();
	header("location:../clubdashboard.php");
    }else{
       header("location:../clubdashboard.php"); 
    }
 }
?>