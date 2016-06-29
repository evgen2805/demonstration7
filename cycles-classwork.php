<?php
/*
1. создать массив, в котором есть перечень автомобильных брендов
2. вывести все бренды через запятую на экран
*/

<?php 

$auto = array ( 'lotus', 'ferrari', 'Audi',);
$arrayCount = count($auto);


for($i = $arrayCount - 1; $i >= 0; $i--) {
    echo $auto[$i] . ', ';
}




 ?>


 
