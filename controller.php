<?php
$db = mysqli_connect("localhost", "root", "", "dbo2banquet");
$result1 = mysqli_query($db, "SELECT * FROM tblcourosel where id=1");
$result2 = mysqli_query($db, "SELECT * FROM tblcourosel where id=2");
$result3 = mysqli_query($db, "SELECT * FROM tblcourosel where id=3");
$result4 = mysqli_query($db, "SELECT * FROM tblcourosel where id=4");
$result5 = mysqli_query($db, "SELECT * FROM tblcourosel where id=5");



$packageresult1 = mysqli_query($db,"SELECT * FROM tblpackage WHERE id=1");
$packageresult2 = mysqli_query($db,"SELECT * FROM tblpackage WHERE id=2");
$packageresult3 = mysqli_query($db,"SELECT * FROM tblpackage WHERE id=3");

$gallaryresult1 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=1");
$gallaryresult2 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=2");
$gallaryresult3 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=3");
$gallaryresult4 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=4");
$gallaryresult5 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=5");
$gallaryresult6 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=6");
$gallaryresult7 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=7");
$gallaryresult8 = mysqli_query($db,"SELECT * FROM tblgallary WHERE id=8");
?>







  