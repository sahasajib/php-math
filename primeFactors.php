<?php 
echo "<h1>Prime Factors</h1>";
$number = $_POST['number'] ?? '';
function primeFactors($number){
    if($number <= 1){
        return false;
    }
    $factors = [];
    for($i=2; $i<=sqrt($number); $i++){
        while($number % $i === 0){
            $factors[] = $i;
            $number /= $i;
        }
    }
    return $factors;
}
$factors = primeFactors($number);
if ($number>1) {
    echo "Prime Factors of $number are : [ ". implode(', ', $factors) . " ]";
}else{
    echo "Please give me positive or  1 Number";
}

//0(sqrt(n))

?>
<form action="" method="post">
    <input type="textarea" name="number" />
    <input type="submit" value="Prime Facttors" name="submit" />
</form>
