<?php
header('Content-Type: application/json; charset=utf-8');
require_once "../core/config.php";
require_once "../core/mysqli.php";

$result = [];

$name = $_POST['name'];
$role = $_POST['role'];
$rating = (int)$_POST['rating'];
$content = $_POST['content'];


if(empty($name)) {
  $result['error'] = "Please enter a name";
} else if (strlen($name) > 60) {
  $result['error'] = "Name cannot exceed 60 characters";
}

if(empty($role)) {
  $result['error'] = "Please enter a role";
} else if (strlen($role) > 60) {
  $result['error'] = "Role cannot exceed 60 characters";
}

if(empty($rating)) {
  $result['error'] = "Please enter a rating";
} else if ($rating > 5 || $rating < 1) {
  $result['error'] = "Rating cannot below 1 and larger then 5.";
}

if(empty($content)) {
  $result['error'] = "Please enter a review";
} else if (strlen($content) > 500) {
  $result['error'] = "Review cannot exceed 500 characters";
} else if (strlen($content) < 20) {
  $result['error'] = "Review must have at least 20 characters";
}


if(!isset($result['error'])) {
  $connection = new MySqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  $sql = "INSERT INTO `reviews` 
  (stars, content, author, author_role, is_active) 
  VALUES 
  ('" . $connection->real_escape_string($rating) . "', '" . $connection->real_escape_string($content) . "', '" . $connection->real_escape_string($name) . "', '" . $connection->real_escape_string($role) . "', 0)";

  $connection->query($sql);

  $result['message'] = "Review has been saved successfully. It will be published once it got reviewed.";
}

echo json_encode($result);
?>