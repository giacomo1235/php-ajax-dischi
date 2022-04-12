<?php
    include_once './db/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>
<?php   
foreach ($arr_discs as $disc)  {?>
    <img src="<?= $disc["poster"]?>" alt="<?= $disc["title"]?>">
    <h1><?= $disc["title"]?></h1>
    <h2><?= $disc["author"]?></h2>
    <h3><?= $disc["genre"]?></h3>
    <h4><?= $disc["year"]?></h4><?php
};?>

    
</body>
</html>