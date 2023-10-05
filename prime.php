<?php 
$number = $_POST['number'] ?? '';
function isPrime($number){
    if($number <= 1){
        return false;
    }
    for($i=2; $i<$number; $i++){
        if($number % $i === 0){
            return false;
        }
    }
    return true;
}
if (isPrime($number)) {
    echo "$number is Prime Number";
}else{
    echo "$number is not Prime Number";
}

?>
<form action="" method="post">
    <input type="textarea" name="number" />
    <input type="submit" value="Prime Number" name="submit" />
</form>