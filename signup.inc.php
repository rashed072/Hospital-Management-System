<?php
mysqli_connect("localhost","root","","phplessons");
if (isset($_POST['submit'])) {
$sql="INSERT INTO useful(user_first,user_last,user_uid,user_pwd)
 VALUES('Rashedul','Islam','Rashedul Islam','test');";
 
}




