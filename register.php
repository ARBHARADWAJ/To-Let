<?php 
$con=mysqli_connect("localhost","root","","profile_details");
$fname=$_REQUEST['fname'];
$d=$_REQUEST['da'];
$number=$_REQUEST['num'];
$a="none";
$pas=$_REQUEST['pa'];
$ins="insert into table2 values('$fname','$d','$number','$a','$pas');";
if(mysqli_query($con,$ins))
{
    echo "<h1>Tenant got registered</h1>";
    echo "<a href='index.html' >Click here to goto home page</a>";


}
else{
    echo "register fial due to improper connection";
}
?>


