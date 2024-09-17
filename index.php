<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="section">
<?php
// Задание 1
$student = ['Арсланова','Сидоров','Петров','Иванов', 'Долгов'];
print_r($student);
echo " <h3>Количество студентов:</h3>" . count($student);

if (in_array('Сидоров',$student)){
    echo "<h3>Да, Сидоров есть</h3>";
}
else {
    echo "<h3>Сидорова нет</h3>";
}

echo '<pre>';
$expelled = array_pop($student);
echo $expelled;

// Задание 2
$arrey = [
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
];

asort($arrey);
foreach ($arrey as $arrey => $person) {
    echo "<h3>$arrey</h3>  $person";
?>
   
<?
}
// Задание 3
$me = [
    "name" => "Kamila",
    "surname" => "Arslanova",
    "group" => "427",
    "hobby" => "dance", 
    "soc" => [
    "telegram" => "@karslanova",
    ]
];

echo "<span><h3>name:</h3>" . $me["name"] . "</span>";
echo "<span><h3>surname:</h3> " . $me["surname"] . "</span>";
echo "<span><h3>group:</h3> " . $me["group"] . "</span>";
echo "<span><h3>hobby:</h3> " . $me["hobby"] . "</span>";

echo "<span><h3>Soc:</h3>";
foreach ($me["soc"] as $a => $n) {
    echo "<span><h3>$a:</h3> $n</span>";
}
echo "</span>";
?>
</div>
</body>
</html>

<style>
.section{
background: pink;
}
h3{
    color:purple;
}
</style>