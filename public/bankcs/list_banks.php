<?php
// Add database file 
require_once '../includes/db.php';
require_once '../includes/common.php';
//////////////////////////////////

function get_banks ($link, $country="NG"){ //get the different banks in a country - Defaults to Nigeria
    $sql = "SELECT * FROM `banks` WHERE `country` = '$country'";
    $result = @mysqli_query($link, $sql);

    while ($rows = @mysqli_fetch_assoc($result)){
        $array[] = array(
        'id'       => $rows['id'],
        'bank' => $rows['name'],
        'type' => $rows['type'],
        'dateAdded'  => $rows['created_at'],
        'dateModified' => $rows['modified_at']
      );

    }

    return $array;
}
header('Content-Type: application/json');
echo json_encode(get_banks($link));
?>