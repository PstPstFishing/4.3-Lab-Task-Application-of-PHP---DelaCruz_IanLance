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
  </head>


  <body>
        <div class="container-md border border-dark bg-light text-center mx-auto p-2">
            <form action="profile.php" method="post">
               Name: <input type="text" name="name" required><br>
               Age: <input type="text" name="age"  required><br>
               E-mail: <input type="text" name="email" required><br>
               <input type="submit">
             </form>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
