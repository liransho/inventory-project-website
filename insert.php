<?php
require ('connect.php');


if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['picture'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $picture=$_POST['picture'];
    $InstrumentDB->insert($name,$description,$price,$picture);
}
