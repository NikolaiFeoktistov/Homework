<?php
include 'day-night.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flex-Grid</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<img src="photo/download.jpg"
     style="width: 100px;height: 100px; float:left;border: 15px double #ffe100;" alt>
<header class="header">
    <a href="site.php">Главная</a>
    <a>Flex/Grid</a>
    <a href="table.php">Таблица Менделеева</a>
    <a href="works.php">Домашняя работа 08.10</a>
</header>
<main class="main_flex-grid">
    <section class="container">
        <div class="block__element one"><img src="photo/bmw_1.jpg" width="100%" alt>BMW i8
        </div>
        <div class="block__element two"><img src="photo/bmw_2.jpg" width="100%" alt>BMW e34
        </div>
        <div class="block__element three"><img src="photo/mercedes_benz_s_class_w222.jpg" width="100%" alt>Mercedes w222
        </div>
        <div class="block__element four"><img src="photo/bmw%20m5.jpg" width="100%" alt> BMW m5
        </div>
    </section>
    <section class="container2">
        <div class="block__element2 one"><img src="photo/cosmos1.jpg" width="100%" alt> Cosmos
        </div>
        <div class="block__element2 two"><img src="photo/cosmos2.jpg" width="100%" alt>BCosmos
        </div>
        <div class="block__element2 three"><img src="photo/cosmos3.jpg" width="100%" alt>Cosmos
        </div>
        <div class="block__element2 four"><img src="photo/cosmos4.jpg" width="100%" alt>Cosmos
        </div>
    </section>
</main>
</body>
</html>