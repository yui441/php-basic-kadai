<?php

class Food
{
    private $name;
    private $price;
    //プロパティの値を取得するメソッド
    public function show_price(){
        echo $this->price . '<br>';
    }

    //コンストラクタ
    public function __construct(string $name,int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}
$food = new Food('poteto',250);
print_r($food);
echo '<br>';

class Animal
{
    private $name;
    private $height;
    private $weight;
    //プロパティの値を取得するメソッド
    public function show_height(){
        echo $this->height . '<br>';
    }
    
    //コンストラクタ
    public function __construct(string $name,int $height,int $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

}
$animal = new Animal('dog',60,5000);
print_r($animal);
echo '<br>';

$food-> show_price();
$animal-> show_height();




