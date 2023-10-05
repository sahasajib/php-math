<?php 
$decimalNumber = $_POST['decimalNumber'] ?? '';
function decimalToBinary($decimalNumber){
    if($decimalNumber == 0){
        return '0';
    }
    $binaryNumber = '';
    while($decimalNumber>0){
        $reminder= $decimalNumber % 2;
        $binaryNumber = $reminder . $binaryNumber;
        $decimalNumber = (int)($decimalNumber / 2);
    }
    return $binaryNumber;
}

$binaryNumber = decimalToBinary($decimalNumber);
echo "Decimal Number: $decimalNumber";
echo '<br/>';
echo "Binary Number: $binaryNumber";


?>
<form action="" method="post">
    <input type="textarea" name="decimalNumber" />
    <input type="submit" value="Decimal To Binary" name="submit" />
</form>
