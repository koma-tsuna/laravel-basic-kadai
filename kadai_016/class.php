<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編_課題</title>        
    </head>

    <body>
        <p>
            <?php
            // クラスを定義　--Food--
            class Food {
                // プロパティを定義
                private $name;
                private $price;

                // コンストラクタでプロパティの初期化
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                // メソッドを定義(priceプロパティを出力)
                public function show_price() {
                    echo $this->price . '<br>';
                }
            }
            // クラスを定義　--Animal--
            class Animal {
                // プロパティを定義
                private $name;
                private $height;
                private $weight;

                // コンストラクタでプロパティの初期化
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
                // メソッドを定義(heightプロパティ出力)
                public function show_height() {
                    echo $this->height . '<br>';
                }                                
            }

            // インスタンス化し、プロパティに値を代入
            $food = new Food('potate', 250);
            $animal = new Animal('dog', 60, 5000);

            // インスタンスを出力
            print_r($food);
            echo '<br>';
            print_r($animal);
            echo '<br>';

            // メソッドを実行
            $food->show_price();
            $animal->show_height();
            ?>
        </p>
    </body>
</html>