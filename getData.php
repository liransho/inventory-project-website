<?php
require ('connect.php');

?>
<br>
<table id="myTable" class="table">
    <thead class="thead-dark">
    <tr>
        <th class="blockquote text-center" scope="col"> ID</th>
        <th class="blockquote text-center" scope="col"> Name</th>
        <th class="blockquote text-center" scope="col">Description </th>
        <th class="blockquote text-center" scope="col"> Price </th>
        <th class="blockquote text-center" scope="col"> Picture </th>
        <th class="blockquote text-center" scope="col"> Edit </th>
        <th class="blockquote text-center" scope="col"> Delete </th>
    </tr>
    </thead>
    <tbody>
    <?php
        if(isset($_GET['operation'])){
            foreach ($InstrumentDB->getAllProducts() as $InstrumentInfo){
            $id=$InstrumentInfo['id']
     ?>
            <tr class="tr">
                <td class="h5 blockquote text-center"><?php echo $InstrumentInfo['id'];?> </td>
                <td class="h5 blockquote text-center"><?php echo $InstrumentInfo['name'];?> </td>
                <td class="h5 blockquote text-center"><?php echo $InstrumentInfo['description'];?> </td>
                <td class="h5 blockquote text-center"><?php echo $InstrumentInfo['price'];?> </td>
                <td class="h5 blockquote text-center"><img class="pb-3" id="img" src=<?php echo  $InstrumentInfo ['picture'];?> alt="Pizza" width="349" height="200"></td>
                <?php echo "<td> <button class='btn btn-primary glyphicon glyphicon-pencil iteminfo blockquote text-center' onclick='edit($id);' ></button></td> "; ?>
                <td><input  type="submit" onclick="deleteItem(<?php echo $InstrumentInfo['id'];?>);" class="btn btn-danger blockquote text-center" value="Delete"></input></td>
            </tr>
<?php
        }
    }
?>
