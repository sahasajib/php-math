<?php 
$number = $_POST['number'] ?? '';
function isFact($number){
    if($number <= 0){
        return false;
    }
    $factNum = 1;
    for($i=1; $i<=$number; $i++){
        $factNum = $factNum * $i;
    }
    return $factNum;
}
$factNum = isFact($number);
if ($number>=1) {
    echo "$factNum is Factorial Number of $number";
}else{
    echo "Please give me positive or Greaterthan 0 Number";
}

//0(sqrt(n))

?>
<form action="" method="post">
    <input type="textarea" name="number" />
    <input type="submit" value="Facttorial Number" name="submit" />
</form>
