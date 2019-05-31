<?php 
                    $A=array(array($bilp,$bila  ),array(1,0),array(0,1)); 
                    for($i = 0; $i<3; $i++){
                        for($j=0; $j<2; $j++){
                            // echo $A[$i][$j]." ";
                        }
                        // echo "<br>";
                    }

                    while($A[0][1]!=0){
                    //echo 
                    $nM =(intdiv($A[0][0], $A[0][1]));
                    for($nI=0; $nI<3; $nI++){
                        $nX = $A[$nI][0]-$nM*$A[$nI][1];
                        $A[$nI][0] = $A[$nI][1];
                        $A[$nI][1] = $nX;
                    }

                    // echo "<br>";
                    // echo "setelah di rubah";
                    // echo "<br>";
                    for($i = 0; $i<3; $i++){
                        for($j=0; $j<2; $j++){
                            //echo $A[$i][$j]." ";
                        }
                        // echo "<br>";
                    }
                    }
                    if($A[2][0]>=0){
                        $nilaiee=$A[2][0];
                    }else{
                        $nilaiee=$A[2][0]+$bilp;
                    }
                    // echo "nilai Extend = ".$nilaiee;
                ?>