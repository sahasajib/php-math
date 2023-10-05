<?php 
echo "<h1>Euclid GCD</h1>";

$number1 = $_POST['number1'] ?? '';
$number2 = $_POST['number2'] ?? '';
function euclideanGCD($number1, $number2){
    if($number1 <= 0 || $number2 <= 0){
        return false;
    }
    while($number2 != 0){
        $remainder = $number1 % $number2;
        $number1 = $number2;
        $number2 = $remainder;
    }
    return $number1;
}

$gcd = euclideanGCD($number1, $number2);

echo "GCD of $number1 & $number2 is $gcd";

?>
<form action="" method="post">
    <input type="textarea" name="number1" /><br><br>
    <input type="textarea" name="number2" /><br><br>
    <input type="submit" value="GCD" name="submit" />
</form>
