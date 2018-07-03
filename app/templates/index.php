<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="/files/reset.css">
    <link rel="stylesheet" href="/files/style.css">

</head>
<body>
<header>
    <div class="container">
        <div class="header">
            <div id="big_logo"></div>
            <div class="header_info">
                <p>Телефон: (499)340-94-71</p>
                <p>Email: <u>info@future-group.ru</u></p>
            </div>
            <h1>Комментарии</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="main">
        <div class="comments">
            <?php
            foreach ($all_comments as $comment) {
                $comment->draw();
            }
            ?>
        </div>
    </div>

    <hr>

    <form method="post" action="index.php">
        <label for="name">Ваше имя</label>
        <input type="text" name="name" id="name">
        <label for="text">Ваш комментарий</label>
        <textarea type="text" name="text" id="text"></textarea>
        <button type="submit">Отправить</button>
    </form>
</div>
<footer>
    <div class="container">
        <div class="footer">
            <div id="small_logo"></div>
            <div class="footer_info">
                <p>Телефон: (499)340-94-71</p>
                <p>Email: <u>info@future-group.ru</u></p>
                <p>Адрес: <u>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p>
                <div class="copy"><p>© 2010 - 2014 Future. Все права защищены</p></div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>