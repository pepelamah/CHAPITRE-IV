<!DOCTYPE html>
<html>
    <head>
        <title> les variables</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
       $compteur=0;
       
       do{
        
        $x=rand(0,100);
        $y=rand(0,100);
        $z=rand(0,100);
        $compteur++;
        if((($x%2) == 0 )AND  (($y%2) == 1) AND (($z%2) )== 1){
            echo"le nombre pair obtenu est: $x <br>";
            echo"le nombre impair_1 obtenu est: $y <br>";
            echo"le nombre impair_2 obtenu est: $z <br>";
            echo"felicitations vous avez reussi au bout de $compteur fois.";
           }
       }
       while((($x%2) != 0) OR (($y%2) != 1) OR (($z%2) != 1) );

       
       

       
                          
        ?>
    </body>
</html>