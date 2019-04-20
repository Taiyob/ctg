<?php
    
    $v="ME";
    echo $v." Hello";

    //
    /*comments*/

?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>219</title>
    </head>
    <body>
        <h1><?php echo "Hellow";?></h1>
        <h2><?php 
            $p="me";
            echo $p;?></h2>
            
        <p><?php
            //my name
            $a="md";
            $b=" oli";
            echo $a.$b;
            echo "<br>";
            var_dump($a);
            
            ?></p>
            
            
            <?php
                $u=array(
                    array('Rahim','Karim','Sofik'),
                    array('Jasim','Rajjak','Alomgir')  
                );
                    echo $u[0][1]."<br>"; 
                    echo $u[1][1]; 
        
                $y=array(
                    'names'=>'oli',
                    'roll'=>'219',
                    'class'=>'laravel',
                );
                    echo $y[names]. "<br>";
        
            ?>
            
            <?php
                $r="coders trust success story";
                print_r (explode(" ",$r));
                
        
                echo "<br>";
        
        
                $h=array('coders','trust','success','story');
                echo (implode(" ",$h));
        
                echo "<br>";
        
                $z="Md , Ullah";
                print_r (explode(",",$z));
        
                echo "<br>";
        
                $i=array('md','oli');
                echo (implode(" ,",$i));
        
            ?>
            
    </body>
</html>