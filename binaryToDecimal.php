<?php 
$binaryNumber = $_POST['binaryNumber'] ?? '';
function binaryToDecimal($binaryNumber){
    if($binaryNumber == 0){
        return '0';
    }

    $binaryNumber = strrev($binaryNumber);
    $decimalNumber = 0;
    
    for($i=0; $i < strlen($binaryNumber); $i++){
        if($binaryNumber[$i] == '1'){
            $decimalNumber +=2 ** $i;
        }
    }
    return $decimalNumber;
}

$decimalNumber = binaryToDecimal($binaryNumber);
echo "Binary Number: $binaryNumber";
echo '<br/>';
echo "Decimal Number: $decimalNumber";
 
?>
<form action="" method="post">
    <input type="textarea" name="binaryNumber" />
    <input type="submit" value="Binary To Decimal" name="submit" />
</form>
