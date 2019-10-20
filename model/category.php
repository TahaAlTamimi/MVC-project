<?php


class category
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    private function setCreated()
    {
//        $this->created = $created;
        $date=new DateTime('Y-m-d H:i:s');
        $datetime_created=$date->format('Y-m-d H:i:s');
        $this->created=$datetime_created;
    }


    public function addcate($connection){
        $this->setCreated();
        $sql="INSERT INTO categories (name,created ) VALUES ('$this->name','$this->created')";
//        var_dump($sql);
//        var_dump($connection);
        $connection->exec($sql);
//
//        echo 'hhhh';
    }


    function  getcate($connection){
        $sql="SELECT * FROM categories";
//        var_dump($sql);
        $result=$connection->query($sql);
//echo "categoruy id";

//        while($row = $result->fetch(PDO::FETCH_ASSOC)){
////               echo $row['id'] . '<br>';
//                $final=$row['id'];
//             }
        return $results=$result->fetchAll(PDO::FETCH_ASSOC);

//print_r($results);

    }

    function getedit($connection,$id){
//        echo 'edit';
//        echo $connection;
//        echo $id;
//        $sql = "UPDATE products SET name='$name' WHERE id=$id";
        $sql = "SELECT * FROM categories WHERE id=$id";
//        echo $sql;
        return $connection->query($sql)->fetch(PDO::FETCH_ASSOC);


    }


    public function delcate($connection,$id){
//        echo 'from edit';
        $sql = "DELETE FROM categories WHERE id=$id";
//        var_dump($sql);
//        echo "jhhgggff";
        return $connection->exec($sql);
    }





    public function editcate($connection,$id){
    $sql = "UPDATE categories SET name='$this->name' WHERE id=$id";
//        $sql = "SELECT * FROM products WHERE id=$id";
//        echo $sql;
//        var_dump($sql);
//        echo '<br>';
      $w=  $connection->exec($sql);
//      var_dump($w);
//        $w->fetch();
    return $w;
    }



    /**
     * @param mixed $name
     *
     */
public function setName($name)
    {


    $this->name = $name;

    }



}



