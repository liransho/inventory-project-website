<?php

class Product
{
    private $DB;

    function __construct(mysqli $_DB) // Cons of product
    {
        $this->DB = $_DB;
    }

    public function getAllProducts():array { // Get all products form sql
        $result = [];
        $res = $this ->DB->query('SELECT * FROM product');
        while ($row = $res->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

    function delete( string $id) // Delete product from sql
    {
        $query = "DELETE FROM `product` WHERE id=$id";
        return $this->DB->query($query);
    }

    function insert( string $name , string  $description , int $price , string $picture) // Insert product to sql
    {
        $query= "INSERT INTO product(`name`,`description`,`price`,`picture`)
        VALUES('$name','$description','$price','$picture')";
        return $this->DB->query($query);
    }


    function edit(string $id, string $name, string $des , int $pri, string $pic) // Update product on sql
    {
        $query = "UPDATE product SET name='$name',  description='$des' ,price='$pri', picture='$pic' WHERE id='$id'";
        return $this->DB->query($query);
    }
}
