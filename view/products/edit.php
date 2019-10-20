
<?php
include '../layout/header.php';
include '../../db/DB.php';
include '../../model/product.php';
$id=$_GET['fe'];
//var_dump($_GET);
//echo $text;
$conn = new DB();
$connection = $conn->connect();

$edit=new product();
$results=$edit->editdata($connection,$id);
//var_dump($results);
//print_r($results);
foreach ($results as $result=>$value){
//    echo $results['describtion'] ;
//  echo  $data= $value;
$_GET["$result"]=$value;
}


?>


<?php



if(isset($_POST['submit'])){
//    echo 'hhhh';
     $conn = new DB();
    $connection = $conn->connect();
    $update=new product();
    $update->setName($_POST['name']);
    $update->setPrice($_POST['price']);
    $update->setDescription($_POST['des']);
    $updated=$update->savedata($connection,$id);
    header('Location:product.php');
//    $update=new product();
//    $name=$_POST['name'];
//    $des=$_POST['des'];
//    $price=$_POST['price'];
//    echo $price;

//echo "ggg";
//    $updated=$update->savedata($connection,$id);


}


?>



<h1>weeeeee</h1>


<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control"  name="name" id="name" value="<?php  echo $_GET['name']; ?>">

    </div>
    <div class="form-group">
        <label for="des">Describtion</label>
        <input type="text" class="form-control" id="des" name="des" value="<?php  echo $_GET['describtion']; ?>">
    </div>
    <div class="form-group">
        <label for="price">price</label>
        <input type="number" min="0" class="form-control" name="price" id="price" value="<?php  echo $_GET['price']; ?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<!--<input type="text" name="text" value="--><?php //echo $text; ?><!--">-->

<?php
include '../layout/footer.php'
?>
