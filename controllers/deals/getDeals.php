<?php

include './models/deals/getDeals.php';

$dealsDb = new GetDeals();
$dealsUnNorm = $dealsDb->getDeals();
$deals = array();

foreach($dealsUnNorm as $deal){
    $dealsData = explode('-',$deal['date']);
    $dealsData = $dealsData[2].'.'.$dealsData[1].'.'.$dealsData[0];
    $deal['date'] = $dealsData;
    $deals[] = $deal;
}


