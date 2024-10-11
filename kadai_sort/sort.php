<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>
        <p>
            <?php
            // ソート関数sort_2way(第一引数:配列$array、第二引数:ソート方向asc/desc)を定義する
            function sort_2way(array $nums, string $order) {
                if($order === 'asc') {
                    echo '昇順にソートします。' . '<br>';
                    sort($nums);
                    foreach($nums as $key => $val) {
                        echo $val . '<br>';
                    }
                } else {
                    echo '降順にソートします。' . '<br>';
                    rsort($nums);
                    foreach($nums as $key => $val) {
                        echo $val . '<br>';
                    }
                }                
            }
            // 関数の呼び出し:昇順ソート(asc)
            $nums = [15, 4, 18, 23, 10];
            $order = 'asc';
            sort_2way($nums, $order);

            // 関数の呼び出し:降順ソート(desc)
            // $nums = [15, 4, 18, 23, 10];
            $order = 'desc';
            sort_2way($nums, $order);

            ?>
        </p>
    </body>

</html>