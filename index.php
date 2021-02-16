<?php
function delElements($arr,$y){
    $arrLenght=count($arr);
    for ($i=$arrLenght;$i>=0;$i--){
        if ($y===$arr[$i]){
            array_splice($arr,$i,1);
        }
    }
    return $arr;
}
print_r(delElements([5,4,3,8,6,7],4));