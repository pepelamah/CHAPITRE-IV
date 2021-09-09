<!DOCTYPE html>
<html>
    <head>
        <title> les variables</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
       
       $x=0;
       $y=0;
       $z=0;
       do{
        $x=rand(0,100);
        $y=rand(0,100);
        $z=rand(0,100);
        $x++;
        $y++;
        $z++;
       }
       while((($x%2) != 0) AND (($y%2) != 1) AND (($z%2) != 1) );

       if((($x%2) == 0 )AND  (($y%2) == 1) AND (($z%2) )== 1){
        echo"le nombre pair obtenu est: $x <br>";
        echo"le nombre impair_1 obtenu est: $y <br>";
        echo"le nombre impair_2 obtenu est: $z <br>";
       }
       

       
                          
        ?>
    </body>
</html>