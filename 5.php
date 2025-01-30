<?php
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "Сумма всех чисел от 1 до 100: " . $sum . "<BR>";




$u= 9;
echo "Таблица умножения для числа:" . $u . "<BR>";
for ($n = 1; $n <= 10; $n++) {
    $P = $u * $n;
    
    echo $P . " " . "<BR>";
}



$string = "naggets ";


$length = strlen($string);

echo "Строка в обратном порядке: ";
for ($i = $length - 1; $i >= 0; $i--) {
    echo $string[$i];
}
echo "<BR>";
$arr = [
    "apple" => 4,
    "banana" => 3,
    "cherry" => 1,
    "date" => 6,
    "elderberry" => 2
];
foreach ($arr as $k => $v) { 
    echo $k . " " . $v . " ";

}
echo "<BR>";


$array = array("apple" => 4,
"banana" => 3,
"cherry" => 1,
"date" => 6,
"elderberry" => 2)
;
$elementToFind = 7;
$elementFound = false;

foreach ($array as $element) {
    if ($element == $elementToFind) {
        $elementFound = true;
        break;
    }
}

if ($elementFound) {
    echo "Элемент найден в массиве!";
} else {
    echo "Элемент не найден в массиве.";
}
echo "<BR>";
$twoDArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);


echo "<table border='1'>";
foreach ($twoDArray as $row) {
    echo "<tr>";
    foreach ($row as $element) {
        echo "<td>" . $element . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>