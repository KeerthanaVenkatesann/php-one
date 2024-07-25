<?php  
// echo "keerthu";


$a=$_POST["a"];
// $b=$_POST["b"];
$b = (int)$_POST["b"];
// echo phpversion();

// var_dump($a);
// echo "<br>";
// var_dump($b);



?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<style>

.table-div{
    display: flex;
    justify-content:center;
    align-items:center;
    height: 100vh;
  
    flex-direction:column;
}
table {
  width: 250px;
 
  margin: 20px 0; 
  font-size: 18px;
  text-align: left;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 
  0 1px 3px rgba(0, 0, 0, 0.08);
}

th, td {
  padding: 12px 15px; 
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #e6ffe6;
  font-weight: bold; 
}
button{
    background-color:#65a765;
    padding: 5px;
    border:none;
    color: white;
    margin-left:66px;
    border-radius:5px;
    font-family: "Open Sans", sans-serif;
}

</style>
</head>

<body>
    <div class="table-div">
    <div class="d-flex w-25 mb-2 ">
           <a href="form.php"><button class="me-auto align-self-start " >New <i class="fas fa-plus"></i> </button></a>
        </div>

<table>
<tr>
<th >Name</th>
<th>Age</th>
</tr>

<tr>
<td><?php echo $a;?></td>
<td><?php echo $b;?></td>
</tr>
</table>
</div>

</body>


</html>