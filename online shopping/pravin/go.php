<html>
<?php
$u=$_POST["name"];
$p=$_POST["pass"];
$com=mysql_connect("localhost","root","");
if($com)
echo "successfully connected";
else
echo "did not connect to mysql";

$temp=mysql_select_db('my_db',$com);

$result=mysql_query("SELECT * FROM sig WHERE Name='$u'");
$row=mysql_fetch_array($result);
if($row["Passwd"]==$p&&$row["Name"]==$u)
header('location:virus4.html');
else
header('location:sign.html'); 

?>
</html>


