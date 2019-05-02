<?php
require_once ("confs/config.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : "";
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO comment(parent_comment_id,comment,sender_name,product_id,date) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $product_id . "','" . $date . "')";

$result = mysqli_query($mysqli, $sql);

if (! $result) {
    $result = mysqli_error($mysqli);
}
echo $result;
?>
