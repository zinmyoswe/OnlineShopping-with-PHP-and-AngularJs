<?php
$current_timestamp = time();
echo "<b>time() returns:</b>" . $current_timestamp . "<br/>";

$current_timestamp_from_string = strtotime("now");
echo "<b>strtotime() returns:</b>" . $current_timestamp_from_string. "<br/>";

$current_timestamp_by_mktime = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
echo "<b>mktime() returns:</b>" . $current_timestamp_by_mktime. "<br/>";

$current_timestamp_string = microtime();
echo "<b>microtime() returns:</b>" . $current_timestamp_string . "<br/>";
$current_timestamp_float = microtime(TRUE);
echo "<b>microtime(TRUE) returns:</b>" . $current_timestamp_float . "<br/>";

$current_timestamp_fndate = date("U");
echo "<b>date('U') returns:</b>" . $current_timestamp_fndate . "<br/>";

$date_from_timestamp = date("d-m-Y",$current_timestamp);
echo "<b>Formatted date from timestamp:</b>" . $date_from_timestamp . "<br/>";
?>