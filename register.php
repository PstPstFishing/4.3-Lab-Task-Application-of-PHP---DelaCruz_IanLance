<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['email'] = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
    .center {
    margin: auto;
    margin-top: 100px;
    width: 50%;
    border: 3px solid #000000;
    padding: 50px;
    text-align: center;
    
    }

</style>
  </head>
  


  <body>
        <div class="center">
            <form class="form" action="profile.php" method="post">
               Name: <input type="text" name="name" required>
               <br>
               <br>
               Age: <input type="text" name="age"  required>
               <br>
               <br>
               E-mail: <input type="text" name="email" required>
               <br>
               <br>
               <input type="submit">
             </form>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
