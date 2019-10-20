<?php


class product
{
    private $name;
    private $description;
    private $price;
    private $category_id;
    private $created;

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }







    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    function  getdata($connection){
        $sql="SELECT * FROM products";
//        var_dump($sql);
        $result=$connection->query($sql);


//        while($row = $result->fetch(PDO::FETCH_ASSOC)){
////               echo $row['id'] . '<br>';
//                $final=$row['id'];
//             }
        return $results=$result->fetchAll(PDO::FETCH_ASSOC);

//print_r($results);

    }
    function  deldata($connection,$id){
        $sql = "DELETE FROM products WHERE id=$id";
//        var_dump($sql);
//        echo "jhhgggff";
        return $connection->exec($sql);

//

    }
    function editdata($connection,$id){
//        echo 'edit';
//        echo $connection;
//        echo $id;
//        $sql = "UPDATE products SET name='$name' WHERE id=$id";
        $sql = "SELECT * FROM products WHERE id=$id";
//        echo $sql;
        return $connection->query($sql)->fetch(PDO::FETCH_ASSOC);


    }
    function savedata($connection,$id){

//        echo 'save';
//        echo $connection;
//        echo $id;
        $sql = "UPDATE products SET name='$this->name',describtion='$this->description',price='$this->price' WHERE id=$id";
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
   private function setCreated()
    {
//        $this->created = $created;
        $date=new DateTime('2000-01-01');
        $datetime_created=$date->format('Y-m-d H:i:s');
        $this->created=$datetime_created;
    }


  function created($connection)
    {
        $this->setCreated();
//        $this->created = $created=date('m/d/y h:i:s a',time());
      $sql="INSERT INTO products (name,price,describtion,created,category_id ) VALUES ('$this->name',$this->price,'$this->description','$this->created',$this->category_id)";
//            var_dump($sql);
//            var_dump($connection);
            $connection->exec($sql);
//
//            if ($connection->exec($sql)){
//                echo "added data";
//    }else{
//                echo "failed added";
//            }
    }
}
