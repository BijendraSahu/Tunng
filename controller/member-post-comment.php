<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_SESSION['username'];
    $comment=$_POST['insert_comment'];
    $postid=$_POST['txtpost'];
    $clubid=$_POST['clubid'];
    $clubname=$_POST['clubname'];
  
    
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
               $imgpath="../images/member_post_images/";
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
           if($imgextension=='mp4' || $imgextension=='MP4' || $imgextension=='AVI' || $imgextension=='avi' || $imgextension=='mov' || $imgextension=='mpeg' || $imgextension=='doc' || $imgextension=='docx'|| $imgextension=='pdf' || $imgextension=='PDF')
           {
               $imgname=$photo1['name'];
               $imgfname =md5(time());
               $new_imgnm=$imgfname.$imgname;
               $imgpath="../images/member_post_videos/";
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
    
    if($comment!='' || $fileupload1!='' || $fileuploadv1!='' || $fileuploadd1!=''){
      
         include 'connection.php';
	//$comment=mysql_query("UPDATE club_post SET comment='$comment',commented_user_name='$username' where post='$postid' and user_name='$clubid'");
        $comment=  mysql_query("Insert into club_post(user_name,club_name,post,commented_user_name,comment,member_post_img,member_post_video,member_post_doc) values('$clubid','$clubname','$comment','$username','$postid','$fileupload1','$fileuploadv1','$fileuploadd1')");
	echo mysql_error();
	mysql_close();
        
	header("location:../member-timeline.php");
    }  else {
        
	header("location:../member-timeline.php");
    }
       
         
 }

?>