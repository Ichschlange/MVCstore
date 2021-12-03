<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGeneral.css">
    <title>Document</title>
</head>
<body>
    <header>
    <div class="contacts">
    <span>Контакты:</span>
    <span>+375446985245</span>
    <span>example@gmail.com</span>
    </div>
    <div class="mainHead">
        <img src="../img/unknown.png" alt="">
    </div>
    </header>
    <main>
    <section class="navigation">
        <nav><a href="http://localhost/goods/index">Товары</a></nav>
        <nav><a href="http://localhost/tariff/index">Тарифы</a></nav>
        <nav><a href="http://localhost/cart/index">Корзина</a></nav>
    </section>
    </main>
    <?php include 'views/'.$view_content; ?>
    <footer>
    <div class="info">
        <div>
            <span>LOGO</span>
        </div>
        <div>
            <span>Get Started</span>
        </div>
        <div>
            <span>About us</span>
        </div>
        <div>
            <span>Поддержка</span>
        </div>
    </div>
    <div class="copyright">
        <span>@2021 Copyright Text</span>
    </div>
    </footer>
</body>
</html>