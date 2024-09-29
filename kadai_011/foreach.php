<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎_課題011</title>
    </head>
    <body>
        <p>
            <?php
            $products = [
                '名前' => '玉ねぎ',
                '値段' => '200',
                '産地' => '北海道',
            ];
            foreach($products as $key => $value) {
                echo "{$key}：{$value}<br>";
            }            
            ?>
        </p>
    </body>
</html>