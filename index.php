<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include './style.css'; ?></style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1> Таблица истинности PHP </h1>
        <?php include 'truth_Table.php'; ?>
    </div>
    <div>
        <h1> Таблица гибкого сравнения PHP </h1>
        <?php include 'flexible_comparison_Table.php'; ?>
    </div>
    <div>
        <h1> Таблица жесткого сравнения PHP </h1>
        <?php include 'tough_comparison_Table.php'; ?>
    </div>
    <div>
        <h1> Выводы о сравнении в PHP </h1>
        <ol>
            <li>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значение после преобразования типов.</li>
            <li>При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение.</li>
            <li>Используя в своем коде различные операторы сравнения, нужно стараться пользоваться операторами с строгим сравнением.</li>
            <li>Также необходимо учитывать особенности нестрогого сравнения во избежание неожиданных ошибок и различия сравнения в PHP 7 и PHP 8.</li>
        </ol>
    </div>
</div>
</body>
</html>