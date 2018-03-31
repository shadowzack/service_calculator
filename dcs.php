<?php

include "opreation.php";

$opr= new opreation();
$retVal=$opr->run();

$array = array('retVal'=>$retVal);
header('Content-type:application/json;charset=utf-8');
echo json_encode($array);