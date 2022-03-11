<?php 
    $angka = [1,2,3,4,5,6,7,8]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 10px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for($s = 0; $s < count($angka); $s++): ?>
        <div class="kotak">
            <?php echo $angka[$s] ?> 
        </div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach($angka as $a): ?>
        <div class="kotak">
            <?php echo $a; ?>
        </div>
    <?php endforeach; ?>

    <div class="clear"></div>
</body>
</html>