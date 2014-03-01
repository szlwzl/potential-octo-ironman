<?php
$db = new mysqli('10.73.192.39', 'scalr', 'nmK4WFmDID8C7cEmcAMj', 'demo');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$sql = <<<SQL
    SELECT *
    FROM `users`
    WHERE `live` = 1 
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
    echo $row['username'] . '<br />';
}
?>
