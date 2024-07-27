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
// $ary=[8,4,7,2,10,5,11];
// $sum=0;
// foreach($ary as $value){
//     if($value % 2 ==1){
//         $sum +=$value;
//     }

  
// }
// echo $sum;
$ary=[8,4,7,2,10,5,11];
$sum=0;
foreach($ary as $key=> $value){
        $sum +=$key;
}
echo $sum;
$name="KeeRthAna";
$name2=strlen($name);
echo $name2;
 ?>

<html>
    <head>
        <style>
            table,td{
                border:1px solid black;
                border-collapse:collapse;
                padding:10px 20px;
            }
        </style>
    </head>
    <body>
    <form action="" method="post">
        <input type="number" name="a" value="<?php echo $b; ?>">
        <button>Submit</button>
    </form>
    <table>
        <?php foreach($ary as $key=> $value){ ?>
        <tr>
            <td> <?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>