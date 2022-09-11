<?php 
$con=mysqli_connect("localhost","root","", "profile_details");
if(!$con){
    echo "Errorwith the connection with the database;";
}

//$ar=array("profilepage.html",)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
<div class="pic">
<img src="sss.jpg" alt="no img" height="600px" width="100%" >
<h2>Select your option:</h2>
</div>



<form action="search.php" method="post">
    <Label>Sort By :</Label>
    <select name="select" class="selectc">
        <option value="new">Most recent</option>
        <option value="lth">Price low to high</option>
        <option value="htl">price high to low</option>
    </select>
   
    <Label>menbers in room : </Label>
    <select name="select2" class="selectcv">
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="8">8</option>
</select>
        <input type="submit" name="submit" class="submit" value="Search">
</form>
<br>



<?php
$sql="select *from profile;";
$res=mysqli_query($con,$sql);
while($a=mysqli_fetch_assoc($res)){  ?>
    <div class="detals">
        <div style="display: inline-flex; ">
        <h3 style="margin-left:10px; color:rgb(32, 59, 234)"><?php echo $a["Owner_name"]??"" ?></h3>
        <a href="<?php echo $a['link']; ?>" class="rating2">see more details</a>
        </div>
        <hr>
        <div style="display: inline-flex; ">
        <p style="margin-right:20px; margin-left:10px;">Availability :<?php echo $a["Availability"]??"" ?></p>
        <p>price: <?php echo $a['price']??""  ?></p>
        
        <p class="rating">Rating: <?php echo $a["rating"]??""   ?></p></div>
    </div>
<?php

}


?>
    
</body>
</html>