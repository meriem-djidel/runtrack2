<?php
    for($x = 0;$x <= 100; $x ++ ){
        if(($x%3== 0 ) && ($x%5== 0 )){
                echo 'FizzBuzz'. '<br/>' ;       
    }   
        elseif($x%3== 0 ){
        echo 'Fizz' . '<br/>' ;
    }
       
        elseif($x%5== 0 ){
            echo 'buzz' . '<br/>';
        }
        else{
            echo $x . '<br/>';

        }
}


?>


