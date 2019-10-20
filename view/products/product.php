<?php
include '../../db/DB.php';
include '../../model/product.php';

//delete

if(isset($_POST['delete'])){
    $id= $_POST['delete'];
    echo $id;
    $conn = new DB();
    $connection = $conn->connect();

    $del = new product();
//$del->deldata($connection);
    $results=$del->deldata($connection,$id);
}



////edit
//if(isset($_POST['edit'])){
//    $id= $_POST['edit'];
//    echo $id;
//    header('Location:edit.php');
////    $conn = new DB();
////    $connection = $conn->connect();
////   $edit=new product();
////   $finaledit=$edit->editdata($connection,$id);
//
//}

?>
<?php
?>



<?php
include '../layout/header.php'?>


<?php
// aadddd

//include '../../db/DB.php';
$conn = new DB();
//echo $conn;
//print_r($conn);
$connection = $conn->connect();
//echo $connection;
//include '../../model/product.php';
$get = new product();
//$get->getdata($connection);
$results=$get->getdata($connection);
//echo $results;
//?>





<table class="table">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nmae</th>
        <th scope="col">Describtion</th>
        <th scope="col">Price</th>
        <th scope="col">Price</th>
        <th scope="col">created</th>
        <th scope="col">Modified</th>

    </tr>
    </thead>

    <tbody>
    <?php
//    echo "<tr>";
//    foreach($results as $key=>$result){
////        echo "<td>$result</td>";
//        foreach ($result as ){
//
//        }
//    }
//echo "</tr>";
    foreach ($results as $result=>$result2){
//    echo $result;
        echo "<tr>";
        echo "<td>";
        foreach ($result2 as $data)
//            echo $data;
            {echo "<td> $data  </td>";
            }


        echo "<td>
<form method='post' action='product.php'>
 <button name='delete' value={$result2['id']}> delete</button> 
     
</form>


<a href='edit.php?fe={$result2["id"]}' class='btn btn-info'> edit</a>



      
        </td> ";
        echo "<tr>";

    }






    ?>
    </tbody>
</table>

<!--    </tbody>-->
<!--</table>-->



<?php
include '../layout/footer.php';?>
