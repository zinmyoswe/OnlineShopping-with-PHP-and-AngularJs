<?php

require_once ("confs/config.php");

$sql = "SELECT * FROM comment ORDER BY parent_comment_id asc, comment_id desc";

$result = mysqli_query($mysqli, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($mysqli);
echo json_encode($record_set);
?>