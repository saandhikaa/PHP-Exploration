<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #baca21;
            text-align: center;
            line-height: 30px;
            margin: 10px;
            float: left;
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        
        .clear {
            clear: both;
        }
    </style>

</head>

<body>
    <?php $angka = [4,3,6,1,3,5] ?>
    <?php foreach($angka as $a): ?>
        <div class="kotak"> <?= $a; ?> </div>
    <?php endforeach; ?>

    <div class="clear"></div>
    <div class="clear"></div>

    <?php $angka2 = [[1,2,3],[4,5,6],[7,8,9]]; ?>
    <?php foreach($angka2 as $a2): ?>
        <?php foreach($a2 as $aa2): ?>
            <div class="kotak"><?= $aa2 ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>