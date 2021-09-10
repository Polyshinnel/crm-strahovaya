<?php

include './models/deals/getDealsDetails.php';

$id = $_GET['id'];
$dealsDb = new GetDealsDetails();

$dealItem = $dealsDb->getDeals($id);

$dealItemData = explode('-',$dealItem['date']);
$dealsDataTime = explode(' ',$dealItemData[2]);
$dealsData = $dealsDataTime[0].'.'.$dealItemData[1].'.'.$dealItemData[0];
$dealItem['date'] = $dealsData;

function normalizeData($data){
    $dataArray = explode('-',$data);
    $DataTime = explode(' ',$dataArray[2]);
    $dealsData = $DataTime[0].'.'.$dataArray[1].'.'.$dataArray[0];
    $timeArr = explode(':',$DataTime[1]);
    $time = $timeArr[0].':'.$timeArr[1];
    $dataNow = date("d.m.Y");
    $dataNowArr = explode('.',$dataNow);
    $dealsDataArr = explode('.',$dealsData);
    if($dataNow == $dealsData){
        $dealsData = 'Сегодня';
    }
    if(($dealsDataArr[0] == ($dataNowArr[0]-1)) && ($dealsDataArr[1] == $dataNowArr[1]) && ($dealsDataArr[2] == $dataNowArr[2])){
        $dealsData = 'Вчера';
    }
    $datatimearr = array($dealsData,$time);
    return $datatimearr;
}

$dealsDetails = $dealsDb->getDealsDetails($id);

