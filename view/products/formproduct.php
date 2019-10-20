<?php
 include '/var/www/html/mvc-oop-php/view/layout/header.php';

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
include '../../db/DB.php';
include "../../model/product.php";
include "../../model/category.php";
$conn=new DB();
$connection=$conn->connect();
$cateId=new category();

$results=$cateId->getcate($connection);
foreach ($results as $result=>$value){
//    echo$value['id']."<br>";
//    foreach ($value as $data){
    $id=$value['id'];
    $name=$value['name'];
//    echo '<br>';
//        echo$id.'<br>';
//        echo $name;
//    }
}
//?>

<div class="container">
    <form method="POST" action="formproduct.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name">
<!--           <p>--><!--</p>-->
            <?php

//            echo $message;
            ?>

            <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
            <label for="describe">Describtion:</label>
            <input type="text" class="form-control" id="describe" placeholder="describe" name="describe">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" min="0" class="form-control" id="price" placeholder="Password" name="price">
        </div>
<!--        <div class="form-group">-->
<!--            <label for="created">Time:</label>-->
<!--            <input type="number" class="form-control" id="created" placeholder="Password" name="created">-->
<!--        </div>-->
        <label for="describe">Describtion:</label>
        <select class="custom-select" name='id' >

            <?php
            foreach ($results as $result=>$value){
                $id=$value['id'];
                    $name=$value['name'];
//
            echo " <option class=\"dropdown-item\" value='$id' > $name</option>";
            }
            ?>
<!---->
<!---->
<!---->
        </select>
<!---->
<!--<form method="post" action="formproduct.php">-->
<!---->
<!--    <div class="dropdown" >-->
<!--        <button  name='button' class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >-->
<!--            categories-->
<!--        </button>-->
<!--        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!---->
<!---->
<!--            --><?php
//
//            foreach ($results as $result=>$value){
//                $id=$value['id'];
//                $name=$value['name'];
////
//                echo " <option class=\"dropdown-item\" value='$id' > $name</option>";
//
//            }
//            ?>
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</form>-->

<!--        --><?php
//        if(isset($_POST['button'])){
//            echo "try";
//        }
//
//        ?>



<!--        <select class="custom-select" name="category_id">-->
<!---->
<!--                --><?php
//                foreach ($results as $result=>$value){
//                    //    echo$value['id']."<br>";
//                    //    foreach ($value as $data){
//                    $id=$value['id'];
//                    $name=$value['name'];
//
//
////                        echo '<br>';
////                            echo$id.'<br>';
////                            echo $name;
//                    //    }
//                    echo "<a class=\"dropdown-item\" value='$id'  > <input type='text' name='taha' value='$id'>$name</a><br>";
//
//                }
//
//                ?>
<!--        </select>-->

<!--                <a class="dropdown-item" value="2"href="#">two</a>-->
<!--                <a class="dropdown-item" value="3" href="#">three</a>-->


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


</div>


<?php
include '../layout/footer.php';


?>





<?php
//include '../../db/DB.php';
////$pro=new DB();
////$pro->connect();
////include '../../model/product.php';
//include "../../model/product.php";
//$conn=new DB();
//$connection=$conn->connect();
//
//if(isset($_POST["submit"])){
////    if(empty($_POST["name"]) )
////    {
////        $message =  '<label>All fields are required</label>';
////
////    }
////    else{
//
//        $pro=new product();
//        $pro->setName($_POST['name']);
//        $pro->setPrice($_POST['price']);
//        $pro->setDescription($_POST['describe']);
//        $pro->created($connection);
//
//    }


//}
?>










<?php
//include '../../db/DB.php';
//include "../../model/product.php";
//include "../../model/category.php";
//
//$conn=new DB();
//$connection=$conn->connect();






//
if(isset($_POST["submit"])){


//
//
//    $cateId=new category();
//    $results=$cateId->getcate($connection);
//foreach ($results as $result=>$value){
////    echo$value['id']."<br>";
////    foreach ($value as $data){
//    $id=$value['id'];
//    $name=$value['name'];
////    echo '<br>';
////        echo$id.'<br>';
////        echo $name;
////    }
//}
//$pro=new product();
//$pro->setName($_POST['name']);
//echo 'before';
//echo $pro;
//echo 'after'.'<br>';
//$pro->setPrice($_POST['price']);
//$pro->setDescription($_POST['describe']);
//$pro->setCategoryId($_POST['id']);
//$pro->created($connection);
//echo $id;
//echo $name;
//echo 'kkkkkkkkkkkkkkkkk0';
    if(empty($_POST["name"]) )
    {
        $message =  '<label>All fields are required</label>';

    }
    else{
//    echo 'id';
//        echo $id;
    $pro=new product();
    $pro->setName($_POST['name']);
    $pro->setPrice($_POST['price']);
    $pro->setDescription($_POST['describe']);
    $pro->setCategoryId($_POST['id']);
    $pro->created($connection);

}


}
?>


