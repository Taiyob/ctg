<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>

	
	<?php
		$n1="oli";
		$n2="taiyob";
		$n3="razu";
		
        $strln1= strlen($n1);
        $strln2= strlen($n2);
        $strln3= strlen($n3);
    
       $lowest_number = min( $strln1, $strln2, $strln3);
        echo "Lowest number:.$lowest_number";
    
        echo "<br>";

		if (strlen($lowest_number)%2==0) {
			echo "$n1.you are different";
		}elseif (strlen($lowest_number)%2==0) {
			echo "$n3.you are general";
		} else {
			echo $n2;
		}
    
        echo "<br>";

		/*Homework: take 3 names , find the shortest name , if the name's length is odd, print the name+ you are different, if even print name + you are general.*/
	?>
	
	<?php
    
        $str="coderstrudt";
        $res= getLength($str);
        
    
    
        function getLength($name){
            
            $len=strlen($name);
            if($len%2 == 0){
                return true;
            }else{
                return false;
            }
                
            
        }
            if($res == true){
                echo "even";
            }else{
                echo"odd";
        }
    
         echo "<br>";
    
        function plusminas($a,$b){
           
            $c=$a+$b;
            return $c;
        }
            echo plusminas(3,4);
    
    echo "<br>";
    
    
        for($i=2;$i<=20;$i+=2){
            echo "<br>".$i;
        }
    
         echo "<br>";
    
        for($i=20;$i>=10;$i--){
            echo "<br>".$i;
        }
    
    echo "<br>";
    
    for($i=0;$i<10;$i++){
        for($j=0;$j<20;$j++){
            echo $i."".$j."<br>";
        }
    }
    
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    for ($i=10;$i<=20;$i++){
        for($j=1;$j<=10;$j++){
            echo $i."X".$j."=".$i*$j."<br>";
        }
    }
    
    echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    for ($i=10;$i<=20;$i++){
        echo $i."<br>";
    }
    
    
    echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    for($j=1;$j<=10;$j++){
            echo $j."<br>";
        }
    
    
    
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    $sum=0;
    for($i=12;$i<=25;$i++){
        
        $sum=$sum+$i;
    }
     echo $sum;
    
    
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    
    function recurr($u){
        echo "window.$u<br>";
        if($u==0){
            exit();
        }
        $u--;
        recurr($u);
    }
     recurr(10);
    
    
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
   
    function add($u1,$u2){
        
         $u2=$u2+$u1;
        
        if($u1==25){
            echo $u2;
            exit();
        }
        $u++;
        recurr1($u);
    }
     add(25);
    
    
    
    
    ?>
    
    
    <?php
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
?>
    
    
    
    
</body>

</html>


   