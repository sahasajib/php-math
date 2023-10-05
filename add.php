<?php 
echo "<h1>Add Number</h1>";

$number1 = $_POST['number1'] ?? '';
$number2 = $_POST['number2'] ?? '';

if (is_numeric($number1) && is_numeric($number2)) {
    $result = $number1 + $number2;
    echo "The result of $number1 & $number2 is : $result";
}else{
    echo "Please enter valid numeric values for both numbers.";
}

?>
<form action="" method="post">
    <input type="textarea" name="number1" /><br><br>
    <input type="textarea" name="number2" /><br><br>
    <input type="submit" value="basic" name="submit" />
</form>
