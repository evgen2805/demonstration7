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
    'model'=>'M5',
    'year'=>'2005',      
  ), 
      2=>array(
        'name'=>'Audi',
        'model'=>'A4-quatro',
        'year'=>'2007',      
     )
     );
    
?>
<?php 
$carCenter = array (
  'bmw' => array(
    'm5' => array(
      2000,2002
      ),
      'm6'=> array(
        2002,2004
        )
        ),


    'Honda' => array(
      'Accord'=> array (
        2007,2010),
        )
        );
        $carCenter ['bmw']['m6'];
        
        ?>
