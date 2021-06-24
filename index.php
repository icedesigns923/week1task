<?php
$arr = range(0,20);

foreach ($arr as $a){
 echo "$a" . "<br>";

}

// function sum(...$nums){
//     return array_reduce($nums, fn($carry, $num) => $carry + $num);
// }
// echo sum(2,3,3);

function sum($x, $y){
 $z = $x + $y;
 return $z;
}
echo 4 + 6 . "<br>";
echo 5 + 11 . "<br>";
echo 7 + 8 . "<br>";


?>