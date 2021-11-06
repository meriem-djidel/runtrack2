<?php
        for($var=0 ; $var<=1000 ; $var++  ){//ici on va faire un algorithme
            $x = 0;//ceci c'est une variable qui permet de récupérer une valeur
            for($var2= 1;$var2 <= $var; $var2 ++ ){ //ici on dit que tant que la varibale 1 et plus faible que la variable 2 alors on continue calcule
                if($var % $var2== 0){ // ici on applique une division pour trouver les nombres premiers (divisable uniquement par 1 ou eux )
                    $x ++;
                }
            }
                if ($x==2){ //la variable x a pour but de récupérer les chiffres qui ont  deux diviseurs !
                    echo $var . '<br/>'; 
              }

        }



?>