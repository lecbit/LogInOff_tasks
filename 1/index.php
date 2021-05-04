<?php
include_once 'image.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $img ?>" width='400'>
    <?php
    
    $i=1;
    
    if(isset($_COOKIE['value'])){
        $i = $_COOKIE['value'];
        $i++;
    }
    setcookie('value', $i, time() + 3600, '/');
    echo $i;
    ?>
</body>
</html>