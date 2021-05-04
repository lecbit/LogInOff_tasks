<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="POST">
    <input type="number" name="one">
    <br><br>
    <input type="radio" name="func" value="plus" id="contactChoice1">+
    <input type="radio" name="func" value="minus" id="contactChoice1">-
    <input type="radio" name="func" value="multiply" id="contactChoice1">*
    <input type="radio" name="func" value="divide" id="contactChoice1">/
    <br><br>
    <input type="number" name="two">
    <br><br>
    <button type="submit">Посчитать</button>
    </form>

    <br>
    <?php
    if(isset($_POST['func']))
    {
        switch ($_POST['func']) {
            case 'plus':
                $a = $_POST['one'] + $_POST['two'];
                break;
            case 'minus':
                $a = $_POST['one'] - $_POST['two'];
                break;
            case 'multiply':
                $a = $_POST['one'] * $_POST['two'];
                break;
            case 'divide':
                $a = $_POST['one'] / $_POST['two'];
                break;
        }
        echo "= ". $a;
    }
    else{
        echo 'Заполните два поля числами и выберете операцию';
    }
    ?>
</body>
</html>