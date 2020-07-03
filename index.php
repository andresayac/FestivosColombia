<?php
# - INIT
error_reporting(0);
ini_set("display_errors", false);
setlocale(LC_ALL, 'es_ES');

# - INCLUDE
require_once 'festivos.php';

# - INSTANCE
$festivo = new festivos($year);

# - VAR
$date = date("Y-m-d");  
$day = date('d');
$month  = date('m');
$year  = date('Y');


if (isset ($_REQUEST['day'],$_REQUEST['month'],$_REQUEST['year'])){
  $day = $_REQUEST['day'];
  $month = $_REQUEST['month'];
  $year  = $_REQUEST['year'];
}

$date = "$year-$month-$day";

$esfestivo = $festivo->esFestivo($day,$month);


echo '{"day": "'.$day.'","month": "'.$month.'","year": "'.$year.'","date": "'.$date.'","festive": '.(boolval($esfestivo) ? 'true' : 'false') .'}';

?>
