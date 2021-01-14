<?php
class ProductsModel extends database
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products where status=1 order by id desc";
        return $this->select($sql);
    }
}