1. Swap Two Variables Without Using a Third Variable
PHP Code (Arithmetic Method)
<?php
$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b";
?>


Output:

a = 10, b = 5



2. Sorting an Array (Ascending and Descending)
Easiest Code (using sort and rsort)
<?php
$arr = array(5, 1, 9, 3, 2);

// Ascending
sort($arr);
echo "Ascending: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}

// Descending
rsort($arr);
echo "<br>Descending: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
?>


