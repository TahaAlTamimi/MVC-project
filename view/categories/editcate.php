<?php

include '../layout/header.php';
include '../../db/DB.php';
include '../../model/category.php';
$id=$_GET['fe'];
//var_dump($_GET);
//echo $text;
$conn = new DB();

$connection = $conn->connect();


$showdata=new category();
//var_dump();
$results=$showdata->getedit($connection,$id);

foreach ($results as $result=>$value){
//    echo $results['describtion'] ;
//  echo  $data= $value;
    $_GET["$result"]=$value;
}
//


if(isset($_POST['submit'])){
    $conn = new DB();

    $connection = $conn->connect();


//    echo 'hhhhhh from sub';
    $update=new category();
    $update->setName($_POST['name']);
    $updated=$update->editcate($connection,$id);
    header('Location:category add.php');


}




?>

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control"  name="name" id="name" value="<?php  echo $_GET['name']; ?>">

        </div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>



<?php

include '../layout/footer.php';
?>