<?php
require 'dbconfig.php';
function checkuser($fuid,$ffname,$femail){
    	$check = mysql_query("select * from user_reg where Fuid='$fuid'");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO user_reg (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE user_reg SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysql_query($query);
	}
	//ALTER TABLE `user_reg` ADD `UID` INT NULL FIRST, ADD `Fuid` VARCHAR(100) NULL DEFAULT NULL AFTER `UID`, ADD `Ffname` VARCHAR(60) NULL DEFAULT NULL AFTER `Fuid`, ADD `Femail` VARCHAR(60) NULL DEFAULT NULL AFTER `Ffname`;
}?>


