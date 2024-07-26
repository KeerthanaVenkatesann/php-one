<?php
// $b=0;
//  if(isset($_POST["a"])&&!empty($_POST["a"])){
//     $a=$_POST["a"];
//     $b=$a*2;
//  }
// for($i=1;$i<=10;$i++){
//     echo $i."<br>";
// }

// $i=1;
// while($i<=5){
//     echo $i."<br>";
//     $i++;
// }
// $i=10;
// do{
//     echo $i."<br>";
//     $i++;
// }while($i<=5);
$ary=[8,4,7,2];
$sum=0;
for($i=0;$i<count($ary);$i++){
    $sum +=$ary[$i];
  
}
echo $sum;
 ?>

<html>
    <head></head>
    <body>
    <form action="" method="post">
        <input type="number" name="a" value="<?php echo $b; ?>">
        <button>Submit</button>
    </form>
    </body>
</html>