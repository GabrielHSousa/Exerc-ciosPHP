<?php
$s=12;
for($i=1;$i<=11;$i++){
    for($j=0;$j<$i;$j++){

        if($i==1){
            $num[$j]=1;
            for($r=1;$r<14;$r++){
                echo "&nbsp;";
            }
            echo $num[$j]."<br>";
        }else if($j==0){
            $c= $s;
            for ($r=1;$r>$c;$r++){
                echo "&nbsp;";
            }
        
            $s-=1;
            $num[$j]=1;
            echo $num[$j]."/";

        }else if($j==($i-1)){
            $num[$j]=1;
            echo $num[$j]. "<br/>";
        }else{
            $num[$j]=$tpascal[$j]+$tpascal[$j-1];

            echo $num[$j]."/";
        }
    }

    $tpascal=$num;
}

?>