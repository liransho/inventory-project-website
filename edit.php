  
<?php
require ('connect.php');

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['picture'])){
    $id = $_POST['id'];
    $name=$_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];
    $InstrumentDB->edit($id,$name,$description,$price,$picture);
}
