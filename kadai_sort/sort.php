<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
        function sort_2way($order, $array) {
            if ($order === 'asc') {
                echo '昇順にソートします<br>';
                asort($array);
            } else {
                echo '降順にソートします<br>';
                arsort($array);
            }
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10];

        sort_2way('asc', $nums);
        sort_2way('desc', $nums);
    ?>

    </p>
</body>

</html>