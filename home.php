<?php
  /*1. Написать в массиве информацию об автосалонах
    2. В автосалоне несколько брендов машин: BMW,Toyoto 
    3. У каждого бренда может быть несколько моделей: М5, corolla, camry
    4. У каждой модели может быть несколько годов выпуска: 2002, 2015
    5. все это должно храниться в одном массиве
  */
  $Avtosalon = array (
  1=>array(
   'name'=>'BMW',
    'model'=>'M5'
    'year of issue'=>'2005',      
  ) 
      1=>array(
        'name'=>'Audi',
        'model'=>'A4-quatro'
        'year of issue'=>'2007',      
  )
    )
?>
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
echo print_r(array_keys($carCenter));
?>
