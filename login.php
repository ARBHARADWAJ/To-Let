<?php
$con=mysqli_connect("localhost","root","","profile_details");
if(!$con){
	echo "Eroor at databadw connection";
}
if(isset($_REQUEST['ue'])){
	$unam=$_REQUEST['ue'];
	$pas=$_REQUEST['pa'];
	$squ="select Email,Password from login_c;";
	$res=mysqli_query($con,$squ);
	$case=0;
	if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				if($row["un"]==$unam && $row['Pa']==$pas){
					//header("Location:done.php");
                    echo "done";
			}
			else{
		echo "kindly get register\n";
		}
	}}
	else{
		echo "404 :error in page";
	}
}


//echo "jai shree ram";
?>