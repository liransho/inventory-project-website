<?php
require ('connect.php');
if(isset($_POST['id']) ){
    $id = $_POST['id'];
    $InstrumentDB->delete($id);
}
