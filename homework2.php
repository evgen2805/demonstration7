
// 1. использовать for и foreach
// 2. использовать два вида массива
// 3. нужно вывести данные в таком формате:
// Model: bmw
// Brands: m5, m6
// years: 1999, 2001
// -----------------
// Model: toyota
// Brands: camry
// years: 1999
<?php
$carCenter = array(
    'brands' => array(
        'bmw' => array(
            'models' => array(
                'm5' => array(
                    'years' => array(
                        1999,
                        2000
                    )
                ),
                'm6' => array(
                    'years' => array(
                        2001,
                        2002
                    )
                )
            )
        )
    )
);
$carCenter['brands']['bmw']['models']['m6']['years'];
$carCenter = array(
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
);
// Решение (decision)
  foreach ($carCenter['brands'] as $brandName => $brandData) {
    $years = array();
    echo 'Brand: ' . $brandName;
    echo "<br />";
    echo 'Models: ';
    foreach ($brandData['models'] as $modelName => $modelData) {
        echo $modelName . ',';
        foreach ($modelData['years'] as $year) {
            $years[] = $year;
        }
    }
    echo "<br />";
    echo 'Years: ';
//    foreach ($years as $year) {
//        echo $year . ',';
//    }
    $countYears = count($years);
    for ($i = 0; $i < $countYears; $i++) {
        echo $years[$i] . ',';
    }
    echo "<hr />";
}
?>
 



