<?php $link =mysql_connect("localhost", "cl21_tunngdb", "HCqk}E97B!dV");
mysql_select_db('cl21_tunng');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

?>