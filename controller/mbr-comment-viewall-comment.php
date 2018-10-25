<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $memebernm=$_SESSION['username'];
   $business_email=$_POST['business_email'];
   $club_id=$_POST['club_id'];
   $business_nm=$_POST['business_nm'];
   $member_email=$_POST['member_email'];
   $comment=$_POST['comment'];
   $txtemoji=$_POST['txtemoji'];
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
               $imgpath="../images/comment_images/";
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
               $imgpath="../images/comment_videos/";
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
               $imgpath="../assets/img/member_post_doc/";
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
       include 'connection.php';
	$comment=mysql_query("INSERT INTO comment_message(business_emailid,business_nm,member_nm,comment,m_c_notesion,status_member,images,video,emoji,member_emailid,document)values('$business_email','$business_nm','$memebernm','$comment','0','unread','$fileupload1','$fileuploadv1','$txtemoji','$member_email','$fileuploadd1')");
	echo mysql_error();
	mysql_close();
        
	header("location:../view-all-comment-business.php?id=$club_id");
         
 }
?>

