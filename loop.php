<?php

// $x=4;
// while($x>=0){
//     if($x<3){
//         if($x==1){
//             echo $x;
//         }else{
//             echo "A";
//         }
//     }else{
//         echo $x;
//     }
//     $x--;
// }


//no.1
function satu(){
    for($x=1;$x<=10;$x++){
        if($x>3){
            if($x>7){
                echo $x;
            }else{
                continue;
            }
        }else{
            echo $x;
        }
    }
}
satu();

//no.2
echo PHP_EOL;

function dua(){
    for($y=5;$y>=1;$y--){
        if($y<3){
            if($y<=2){
                echo "*";
            }
        }else{
            echo $y;
        }
    }
}
dua();

//no.3
echo PHP_EOL;
function tiga(){
    for($a=1;$a<=4;$a++){
        if($a %2==0){
            echo $a."b";
        }else{
            echo $a."a";
        }
    }

}
tiga();

//no.4
echo PHP_EOL;

function empat(){
    for($b=1;$b<=7;$b++){
        if($b>3){
            if($b==7){
                echo $b;
            }else{
                echo "A";
            }
        }else{
            echo $b;
        }
    }

}
empat();

//no.5
echo PHP_EOL;

function lima(){
    for($c=4;$c>=0;$c--){
        if($c<3){
            if($c==1){
                echo $c;
            }else{
                echo "A";
            }
        }else{
            echo $c;
        }
    }

}
lima();

//no.6
echo PHP_EOL;

function enam(){
    for($d=0;$d<=4;$d++){
        if($d>1){
            echo $d;
        }else{
            echo "A";
        }
    }

}
enam();