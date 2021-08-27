<?php

mb_internal_encoding( 'UTF-8'); 
mb_regex_encoding( 'UTF-8');  
ini_set('default_charset','utf-8');

$filename = '/home/admin/web/518693-cm50173.tmweb.ru/public_html/sample1.pdf';
$text = shell_exec('pdftotext '.$filename.' -'); //тире в конце вывода содержимого

$number_start = array();
$number_end = array();

$array = preg_split('/(\s)/', $text);
$array = array_diff($array, array(''));
//print_r($array);
foreach($array as $key=>$value){
    if($value == 'договору):'){
        $number_start[] = $key;
    }
    if($value == 'Вопросы,'){
        $number_end[] = $key;
    }
}

$expert_block = array();

for($k=0;$k<(count($number_start));$k++){
    $expert_type = array();
    for($i=($number_start[$k]+1);$i<$number_end[$k];$i++){
        $expert_type[] = $array[$i];
    }
    $expert_type = implode(' ',$expert_type);
    $expert_block[] = $expert_type;
}



print_r($expert_block);