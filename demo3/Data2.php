<?php
include 'Product.php';

class Data2
{
    public static $path = 'product.json';

    public static function load()
    {
        $dataJson = file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convert($data);
    }

    public static function save($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convert($data)
    {
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item->name, $item->price);
            array_push($products, $product);
        }
        return $products;
    }

    public static function add($name, $price)
    {
        $product = new Product($name, $price);
        $products = self::load();
        array_push($products, $product);
        self::save($products);
        header("Location: list.php");
    }

    public static function loadOld($data)
    {
        $key = 0;
        foreach ($data as $item){
            if ($item != $key){
                $key++;
            }else{
                $key=self::load();
            }
        }
        return $key;
    }

    public static function delete()
    {
        //array_splice($products,)
    }
}