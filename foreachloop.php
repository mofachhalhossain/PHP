<?php 

$title = "Foreach Loop";
$books = ['comic', 'story', 'drama'];
$money = [
    'usa' => 'usd',
    'india' => 'ind',
    'bangladesh' => 'bdt'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title; ?></title>
</head>

<body>
    <table>
        <?php 
        foreach ($books as $book){
            echo("<tr><td>$book</td></tr>");
        }
        ?>
    </table>
    <table>
        <?php 
        foreach ($money as $key => $item) {
            echo("<tr><td>$key</td><td>$item</td></tr>");
        }
        ?>
    </table>
</body>

</html>