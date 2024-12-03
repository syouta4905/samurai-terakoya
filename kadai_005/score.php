<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $socre1 = 80;
        $socre2 = 60;
        $socre3 = 55;
        $socre4 = 40;
        $socre5 = 100;
        $socre6 = 25;
        $socre7 = 80;
        $socre8 = 95;
        $socre9 = 30;
        $socre10 = 60;
        
        $total = $socre1 + $socre2 + $socre3 + $socre4 + $socre5 + $socre6 + $socre7 + $socre8 + $socre9 + $socre10;
    
        $average = $total / 10;

        echo  $average; 

        ?>
    </p>
</body>

</html>
