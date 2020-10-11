<?php

include "connect.php";
//Update data on SQL
$return_arr = array();
$query = "SELECT * FROM product";
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
    $picture= $row['picture'];

    $return_arr[] = array("id" => $id,
        "name" => $name,
        "description" => $description,
        "price" => $price,
        "picture" => $picture);
}
// Encoding array in JSON format
echo json_encode($return_arr);
