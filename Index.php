<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<style>

.form-div{
    display: flex;
    justify-content:center;
    align-items:center;
    height: 100vh;


}
form{
    border-radius:5px;
    display: flex;
    flex-direction:column;
    gap: 10px;
    width: 250px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 
    0 1px 3px rgba(0, 0, 0, 0.08);
}
button{
    background-color:#65a765;
    padding: 5px;
    border:none;
    color: white;
    border-radius:5px;
    font-family: "Open Sans", sans-serif;
}
input{
    border-radius:5px;
    border:1px solid grey; 
    height: 25px;
}
input:focus{
   outline:none;
}
p{
    font-family: "Open Sans", sans-serif;
    text-align:center;
color:grey;
}
</style>

    </head>
    <body>
        <div class="form-div">
        <form action="newtask.php" method="post" >
            <p>PHP FORM</p>
           <input type="text"name="a">
           <input type="number" name="b">
            <button>Submit</button>
        </form></div>
    </body>
</html>