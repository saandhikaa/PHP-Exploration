<?php
    // Perulangan:
    // 1. for
    // 2. while
    // 3. do .. while
    // 4. foreach (array)

    echo "Perulangan<br>";

    echo "<br>for  --  ";
    for($s = 0; $s < 5; $s++){
        echo " " . $s;
    }

    echo "<br>while  --  ";
    $s = 0;
    while($s < 5){
        echo " " . $s;
        $s++;
    }

    echo "<br>do .. while  --  ";
    $s = 0;
    do{
        echo " " . $s;
        $s++;
    }while($s < 5);

    echo "<br><br>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($s = 1; $s <= 3; $s++): ?>
            <tr>
                <?php for ($a = 1; $a <= 5; $a++): ?>
                    <td>
                        <?php echo "$s, $a"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>