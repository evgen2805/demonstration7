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
<?php
$carCenter = [
    'bmw' => array(
        'm5' => array(
            1999,
            2001
        ),
        'm6' => array(
            2001,
            2002
        )
    ),
    'toyota' => array(
        'camry' => array(1999)
    )
];
foreach ($carCenter as $key => $brand) {
	echo " $key";
;
}
