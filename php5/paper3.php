<?php 
    // array numerik
    
    $mahasiswa = [ ["Rose", "20021997", "Love"],
                   ["Luka", "01201401","Heart"] ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>
    <h1>
        Info Mahasiswa
    </h1>

    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <?php foreach($mhs as $m): ?>
                <li>
                    <?php echo $m; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

</body>
</html>