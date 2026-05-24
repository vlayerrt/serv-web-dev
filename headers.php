<?php
$headers = get_headers("https://httpbin.org/");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Заголовки</title>
</head>
<body>

<header>
    <img src="content/mospolytech-logo-white.png" alt="Логотип">
    <h1>Лабораторная работа — get_headers</h1>
</header>

<main>

    <textarea rows="20" cols="100">
<?php
print_r($headers);
?>
    </textarea>

    <a class="page-link" href="index.html">
        Вернуться на главную
    </a>

</main>

<footer>
    <p>Ершов Владислав Владимирович <br> 257-321 <br>задание для самостоятельно работы</p>
</footer>

</body>
</html>
