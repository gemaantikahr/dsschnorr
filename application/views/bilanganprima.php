<?php 
    $index = 0;
    for($i=19500; $i<=20000; $i++):
        $a=0;
        for($j=1; $j<=$i; $j++):
            if($i % $j == 0):
                $a++;
            endif;
        endfor;
        if($a==2):
            $bilanganprima[$index] = $i;
            $index++;
        endif;
    endfor;
    echo "<hr>";
    $randomindex = array_rand($bilanganprima);
    $nilai_p = $bilanganprima[$randomindex];
    echo $nilai_p;

    $bilgcd = $nilai_p-1;
    $tempp2 = $bilgcd;
    for($i=2; $i<=$tempp2; $i++){
        if($tempp2 % $i==0) {
            if($i>2){
            echo " * ";
            }               
            echo $i; 
                $tempp2 /= $i;
                $i--;
            }
        }
        echo  "merupakan faktor prima dari".$bilgcd;
?>