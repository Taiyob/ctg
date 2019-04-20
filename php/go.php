<?php
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];

    echo $first.$last;

    function add($number1,$number2){
        $number9=$number1+$number2;
        return $number9;
    }
    echo add(10,10);

    echo "<br>";
    
    function add1($number3,$number4){
        $number7=$number3*$number4;
        return $number7;
    }
    echo add1(10,10);



if(isset($_POST['submit'])){
    if(!empty($_POST['username'])){
        echo "".$_POST['username'];
    }
    if(!empty($_POST['password'])){
        echo "".$_POST['password'];
    }
    if(!empty($_POST['email'])){
        echo "".$_POST['email'];
    }
    if(!empty($_POST['web'])){
        echo "".$_POST['web'];
    }if(!empty($_POST['comments'])){
        echo "".$_POST['comments'];
    }
    if(!empty($_POST['gender'])){
        echo "".$_POST['gender'];
    }
}
    
    
?>


<html>
    <head>
        <title>FORMS</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method= "post">
				<table>
					<tr>
						<td>NAME</td>
						<td><input type="text" name="username"></td>
					</tr>
					
					<tr>
						<td>PASSWORD</td>
						<td><input type="password" name="password"></td>
					</tr>

					<tr>
						<td>E-mail</td>
						<td><input type="email" name="email"></td>
					</tr>

					<tr>
						<td>WEBSITE</td>
						<td><input type="text" name="web"></td>
					</tr>

					<tr>
						<td>COMMENTS</td>
						<td><textarea name="comments" id="" cols="30" rows="10"></textarea></td>
					</tr>

					<tr>
						<td>GENDER</td>
						<td>
							<input type="radio" name="gender" value="male">MALE
							<input type="radio" name="gender" value="female">FEMALE
						</td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>
    </body>
</html>