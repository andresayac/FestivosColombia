<?php
# - INIT
error_reporting(0);
ini_set("display_errors", false);
setlocale(LC_ALL, 'es_ES');

# - INCLUDE
require_once 'festivos.php';



# - VAR
$date = date("Y-m-d");  
$day = date('d');
$month  = date('m');
$year  = date('Y');

if (isset ($_REQUEST['day'],$_REQUEST['month'])){
  $day = $_REQUEST['day'];
  $month = $_REQUEST['month'];
}
$date = "$year-$month-$day";

# - INSTANCE
$festivo = new festivos($year);
$esfestivo = $festivo->esFestivo($day,$month);


echo '{"day": "'.$day.'","month": "'.$month.'","year": "'.$year.'","date": "'.$date.'","festive": '.(boolval($esfestivo) ? 'true' : 'false') .'}';

?>
