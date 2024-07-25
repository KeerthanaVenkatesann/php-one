<?php

// $name = "keerthana";
// $name .= " Venkatesan";


// $age = 25;
// if($age < 27){
// $name = "baby";
// }
// else{
//     $name = "keerthana"; 
// }

// for($i = 0 ; $i <= 10;$i++ ){
//     echo $i;
// }


// $c=$a+$b;

$a=$_POST["a"];
$b=$_POST["b"];


    $c=0;
    for($i=$a+1;$i<$b;$i++){
        $c += $i;
    }
 if($c>=35){
$keerthi="pass";
 }
 else{
    $keerthi="fail"; 
 }

 $arry=["h","t","u","y"];
 echo $arry[1];
 
?>
<!DOCTYPE html>
<html>
    <head>
<style>
.pass{
    color:green;
}
.fail{
    color:red;
}
</style>
    </head>
    <body>
        <h1 class="<?php echo $keerthi; ?>">my name <?php echo $c; ?>  </h1>
    </body>
</html>