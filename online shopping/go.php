<html>
<?php
$u=$_POST["name"];
$p=$_POST["password"];
$com=mysql_connect("localhost","root","");
if($com)
echo "successfully connected";
else
echo "did not connect to mysql";

$temp=mysql_select_db('meghana',$com);

$result=mysql_query("SELECT * FROM customer WHERE name='$u'");

$row=mysql_fetch_array($result);

if($row["password"]!=$p&&$row["name"]!=$u)
{
header('location:signup1.html');
}
else
{
header('location:index.html'); 
}
?>
</html>


