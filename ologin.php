<?php
$con=mysqli_connect("localhost","root","","profile_details");
if(!$con){
	echo "Eroor at databadw connection";
}

if(isset($_REQUEST['un'])){
	$unam=$_REQUEST['un'];
	$pas=$_REQUEST['pa'];
	$squ="select fname,password from table2;";
	$res=mysqli_query($con,$squ);
	$case=0;
	if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				if($row["fname"]==$unam && $row['password']==$pas){
					echo "done login";
			}
			else{
                    header("Location:index.html");
    }
	}
}}
	else{
		echo "404 :error in page";
	}




?>
