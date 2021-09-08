<?php

include './models/stages/getStages.php';

$stages_db = new GetStages();
$stages = $stages_db->getStages($pdo);