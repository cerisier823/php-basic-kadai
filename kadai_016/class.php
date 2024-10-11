<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題16</title>
</head>

<body>
    <p>
        <?php 
        class Food{
            private $name;
            private $price;
            public function show_price(){
                echo $this->price;
            }
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        $latte = new Food("ラテ", 550);
        print_r($latte);
        echo "<br>";

        class Animal{
            private $name;
            private $height;
            private $weight;

            public function show_height(){
                echo $this->height;
            }
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        $hedgehog = new Animal("hedgehog", 20, 400);
        print_r($hedgehog);
        echo "<br>";

        $latte->show_price();
        echo "<br>";
        $hedgehog->show_height();

        ?>
    </p>
</body>
</html>