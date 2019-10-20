<?php
include '../../view/layout/header.php';
include '../../db/DB.php';
include '../../model/category.php';
$conn=new DB();
$connection=$conn->connect();



if(isset($_POST['submit'])){

    echo 'from sub';
    $cate=new category();
    $cate->setName($_POST['name']);
    $cate->addcate($connection);
}

$getcate = new category();
//$get->getdata($connection);
$results=$getcate->getcate($connection);





if(isset($_POST['delete'])){
    $id= $_POST['delete'];
    echo $id;
//    $conn = new DB();
//    $connection = $conn->connect();

    $del = new category();
//$del->deldata($connection);
    $results=$del->delcate($connection,$id);
    header('Location:category add.php');
}

?>
<h1>category Add</h1>
<form  method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label for="name">New Catergory:</label>
        <input type="text" class="form-control" id="name" name="name" required>


    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">cate</th>
        <th scope="col">created</th>
        <th scope="col">modify</th>
    </tr>
    </thead>








    <tbody>

    <?php

    foreach ($results as $result=>$result2){
//    echo $result;
        echo "<tr>";
        echo "<td>";
        foreach ($result2 as $data)
//            echo $data;
            {echo "<td> $data  </td>";
            }


        echo "<td>
<form method='post' action='category%20add.php'>
 <button name='delete' value={$result2['id']}> delete</button> 
     
</form>


<a href='editcate.php?fe={$result2["id"]}' class='btn btn-info'> edit</a>



      
        </td> ";
        echo "<tr>";

    }
    ?>
    </tbody>
</table>




<?php
include '../../view/layout/footer.php';

?>
