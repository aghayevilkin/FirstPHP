<?php

$variables=10;

var_dump($variables);

$test2=10.23323;
var_dump($test2);

$aa="test a a";

echo strlen($aa);
echo str_word_count($aa);

define("test3","Testtt3");
echo "</br>";
echo test3;
echo "</br>";

if ($variables==10) {
    echo "Value 10";
}else{
    echo "Error";
}
echo "</br>";
 $test4List=array(1,2,3,4,5,6,7,8,9,0);
 $test5List=array("Name"=>"Ilkin","Surname"=>"Agayev","Website"=>"Aghayev.com");


 foreach ($test5List as $key => $value) {
     echo $key.": ".$value."</br>";
 }

 echo "</br>";

function PopUp()
 {
     echo "Pop Up";
 }


PopUp();

echo "</br>";

function TestName($Name)
{
    echo $Name." "."Aghayev"."</br>";
}

TestName("Ilkin");
TestName("Nihat");
TestName("Nicat");

echo "Language Count: ";
$language = array('PHP' ,'Asp.Net','JavaScript' );
echo count($language);

echo "</br>";

/* İlişkilendirme dizisi oluşturmanın ilk yöntemi. */

$ogrenci_bir = array("Matematik"=>95, "Fizik"=>90,   

                  "Geometri"=>96, "İngilizce"=>93,   

                  "Bilgisayar Kullanımı"=>95); 

   

/* Bir ortak dizi oluşturmak için ikinci yöntem. */

$orgenci_iki["Matematik"] = 95; 

$orgenci_iki["Fizik"] = 90; 

$orgenci_iki["Geometri"] = 96; 

$orgenci_iki["İngilizce"] = 93; 

$orgenci_iki["Bilgisayar Kullanımı"] = 98; 


/* Öğelere doğrudan erişme*/

echo "Ahmet SAU Okulunda Öğrenci:\n"; 

echo "Matematik:" . $orgenci_iki["Matematik"], "\n"; 

echo "Fizik:" . $orgenci_iki["Fizik"], "\n"; 

echo "Geometri:" . $orgenci_iki["Geometri"], "\n"; 

echo "İngilizce:" . $orgenci_iki["İngilizce"], "\n"; 

echo "Bilgisayar Kullanımı:" . $orgenci_iki["Bilgisayar Kullanımı"], "\n"; 


?>
