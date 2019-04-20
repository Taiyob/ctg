<?php
    /*
    function metersToFeetInches($meters, $echo = true)
{
	$m = $meters;
	$valInFeet = $m*3.2808399;
	$valFeet = (int)$valInFeet;
	$valInches = round(($valInFeet-$valFeet)*12);
	$data = $valFeet."&prime;".$valInches."&Prime;";
	if($echo == true)
	{
		echo $data;
	} else {
		return $data;
	}
}
metersToFeetInches(3435);
*/

?>
<html>
    <head>
        <title>FORMS</title>
    </head>
    <body>
        <form action="go.php" method="POST">
            <input type="text" name="first_name">
            <input type="text" name="last_name">
            <input type="text" name="number1" value="1">
            <input type="text" name="number2" value="2">
            <input type="text" name="number3" value="3">
            <input type="text" name="number4" value="2">
            <input type="submit" name="submit" value="GO">
            
            


        </form>
        
        <br/>
        
        <form action="" method="POST">
            Username<input type="text" name="username">
            Password<input type="password" name="password">
            <input type="submit" name="submit" value="GO">
        </form>
        
        <?php
        /*
        $name="taiyob";
        $password="1234";
        if(isset($_POST['submit'])){
                if(($_POST['username'])== $_POST['name'])
                {
                    if(($_POST['password'])==$_POST['password']){
                        echo "You logged in";
                    }else{
                        echo "WRONG";
                    }
                }else{
                    echo "Wrong";
                }
        }
        */
        ?>
        
        <?php
            if(isset($_POST['submit'])){
                $tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp, "photos/j.jpeg");
            }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/jpeg,image/x-png">
            <input type="submit" name="submit" value="GO">
        </form>
        
        
        
        
        
        
        
        
    </body>
</html>