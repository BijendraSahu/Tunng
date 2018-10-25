<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']!='')
{
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
$max_file_size = 1024 * 2048; #200kb
$nw = 620; # image with # height
$nh=120;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if ( isset($_FILES['image']) ) {
            $gimg=$_FILES['image'];
            $imgname=$gimg['name'];
            $imgfname =md5(time());
            $imgpath='../images/member_original_img/';  

            $img_path=$imgpath.$imgfname.$imgname;    
            $img_path2=$imgfname.$imgname;
         
		if (! $_FILES['image']['error'] && $_FILES['image']['size'] < $max_file_size) 
                    {
			$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
			if (in_array($ext, $valid_exts)) {
					$username=$_SESSION['username'];

                                        $uniqid=uniqid();
					
					$path ='../images/member_photo/'.$uniqid.'.'.$ext;  
                                        $path2 =$uniqid.'.'.$ext;
                                        //echo $path2;
                                        include('connection.php');
					$sqlc= mysql_query("Update user_reg SET  member_photo='$path2' where user_name='$username'");
					echo mysql_error();
                                        mysql_close();
                                        $size = getimagesize($_FILES['image']['tmp_name']);
                                        
					$x = (int) $_POST['x'];
					$y = (int) $_POST['y'];
					$w = (int) $_POST['w'] ? $_POST['w'] : $size[0];
					$h = (int) $_POST['h'] ? $_POST['h'] : $size[1];

					$data = file_get_contents($_FILES['image']['tmp_name']);
					$vImg = imagecreatefromstring($data);
					$dstImg = imagecreatetruecolor($nw, $nh);
					imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $nw, $nh, $w, $h);
					imagejpeg($dstImg, $path);
					imagedestroy($dstImg);
                                        
                                        move_uploaded_file($gimg['tmp_name'],$img_path);
					header("location:../member-profile.php");
					//echo 'done';
				} else {
					echo 'unknown problem!';
				} 
		} else {
			echo 'file is too large';
		}
	} else {
		echo 'file not set';
	}
} else {
	echo 'bad request!';
}
}
else
{
    header('location:../member-profile.php'); 
}
?>






