<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題１５</title>
</head>
<body>
    <?php
    class Food {
        private $name;
        private $price;
        
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;      
        }
        public function set_price(int $price) {
            $this->price =$price;
        }
        public function show_price(int $price) {
            echo $this->price . '<br>';
        }

    }
    $food = new Food('potato',250);
    print_r($food);
    echo '<br>';

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        } 
        public function set_height(int $height) {
            $this->height =$height;
        }
        public function show_height(int $height) {
            echo $this->height . '<br>';
        }
    }
    $animal = new Animal('dog', 60, 5000);
        print_r($animal);
    echo '<br>';
    $food->show_price(250);
    $animal->show_height(60);
    ?>
</body>
</html>