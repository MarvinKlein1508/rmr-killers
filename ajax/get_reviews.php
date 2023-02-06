<?php


function get_happy_clients() {
  $connection = new MySqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $sql = "SELECT COUNT(*) AS amount FROM reviews";
  
  $amount = $connection->query($sql)->fetch_assoc()['amount'];
  

  return $amount;
}

function get_reviews() {

  $connection = new MySqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $sql = " SELECT *
  FROM reviews AS r1 JOIN
       (SELECT CEIL(RAND() *
                     (SELECT MAX(review_id)
                        FROM reviews)) AS review_id)
        AS r2
 WHERE r1.review_id >= r2.review_id AND r1.is_active = 1
 ORDER BY r1.review_id ASC
 LIMIT 10";

  $rows = $connection->query($sql)->fetch_all(MYSQLI_ASSOC);
  return $rows;
}



?>