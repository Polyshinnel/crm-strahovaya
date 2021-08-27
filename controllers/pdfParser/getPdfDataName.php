<?php
mb_internal_encoding( 'UTF-8'); 
mb_regex_encoding( 'UTF-8');  
ini_set('default_charset','utf-8');

$filename = '/home/admin/web/518693-cm50173.tmweb.ru/public_html/sample.pdf';
$text = shell_exec('pdftotext '.$filename.' -'); //тире в конце вывода содержимого

//$text = preg_replace("/[^a-zа-яё0-9\s]/i", '', $text);
$array = preg_split('/(\s)/', $text);
$array = array_diff($array, array(''));

$number = $array[10];
$data = $array[11];
$second_name = $array[48];
$first_name = $array[49];
$third_name = $array[50];

echo $number;
echo "<br>";
echo $data;
echo "<br>";
echo $second_name;
echo "<br>";
echo $first_name;
echo "<br>";
echo $third_name;
echo "<br>";