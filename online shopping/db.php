<html>
<?php
/////connecting to mysql/////
$con=mysql_connect("localhost","root","");
if($con)
echo "successfully connected";
else
echo "sry cant connect to mysql";
?><br><?php

//////creating database/////
$sql = 'CREATE DATABASE meghana';
if(mysql_query($sql,$con))
echo "unable to create db.";
else
echo "successfully created db";?><BR>

<?php
/////db-selection/////
$temp=mysql_select_db('meghana',$con);
if($temp)
echo "DB Selected";
else
echo "DB No selected"; 


/////creating table/////
$sq="CREATE TABLE IF NOT EXISTS customer(name CHAR(30),password CHAR(15), address CHAR(250),sex CHAR(10),city CHAR(30),state CHAR(30),pincode INTEGER,emailid CHAR(30),dob CHAR(30),mobileno INTEGER);";


$temp=mysql_query($sq,$con);
if($temp)
echo "<br>Table created.";
else
echo "<br>Table not created: ",mysql_error();
echo "<br>";

/////inserting record/////

//$a=$_POST["name"];//
//$d=$_POST["co"];//
//$f=$_POST["email"];//
//$g=$_POST["pswd"];//


$name=$_POST["name"];
$address=$_POST["address"];
$sex=$_POST["sex"];
$city=$_POST["city"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];
$emailid=$_POST["emailid"];
$dob=$_POST["dob"];
$mobileno=$_POST["mobileno"];
$password=$_POST["password"];


$table="INSERT INTO customer VALUES('$name','$password','$address','$sex','$city','$state','$pincode','$emailid','$dob','$mobileno')";
$temp=mysql_query($table,$con);
if($temp)
header( 'Location:index.html' ) ;
else
echo "Record not created: ",mysql_error();

///retrieving a record/////
//$result=mysql_query("SELECT * FROM ceg WHERE Name='$a'");
//$row=mysql_fetch_array($result);
//echo "<br><br><br>Name: ",$row['Name'],"<br>Email id: " ,$row['Email'],".";
//header('location:signin.php');
/////closing mysql connection
//mysql_close($con);
?>
</html>