<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Счётчик`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Счётчик</title>
</head>
<body>
<body background = "4.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Год выпуска</th>
      <th>Серийный номер</th>
      <th>Проверочная пломба</th>
      <th>kW/h</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[4] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о счётчике</h2>
        <form action = "Update2.php" method="post">
            <p>Год выпуска</p>
            <input type = "text"  name = "Год_выпуска">
            <p>Серийный номер</p>
            <input type = "text"  name = "Серийный_номер">
            <p>Проверочная пломба</p>
            <input type = "text"  name = "Проверочная_пломба">
            <p>kW/h</p>
            <input type = "text"  name = "Киловват">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>