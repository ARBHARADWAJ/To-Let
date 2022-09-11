<?php
$con=mysqli_connect("localhost","root","","profile_details");
if(!$con){
	echo "Eroor at database connection";
}
if(isset($_REQUEST['em'])){
    $em=$_REQUEST['em'];
    $text=$_REQUEST['tx'];
    $message=$_REQUEST['texta'];
    $squ="insert into table5 values('$em','$text','$message');";
    if(mysqli_query($con,$squ)){
        echo "message is sent";
    }
    else{
        echo "message not sent";
    }

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
</head>
<body>

<h1>Enter your feed back</h1>
<hr><hr>

    <form action="" method="post">
        <input type="email" name="em" id="em" placeholder="example@gmail.com"><br><br>
        <input type="text" name="tx" id="tx" placeholder="submit"><br><br>
        <textarea name="texta" id="texta"  cols="30" rows="10" placeholder="message"></textarea>
        <br><br>
        <input type="submit" name="s" id="s" value="submit">



    </form>
</body>
</html>