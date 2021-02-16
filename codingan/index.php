<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['noback'])){
    unset($_SESSION['noback']);
?>

<?php
}
?>

<?php
if(isset($_SESSION['pesan'])){
    unset ($_SESSION['pesan']);
?>
<script>
    swal("username dan password salah!","","info");
</script>
<?php
}
?>
    <div class="text-center">
    <br>
     <form action="login.php" method="post" class="form-group jumbotron" style="padding-top: 0;
    position: relative;
    margin: auto;
    width: 400px;
    margin-top:100px">
        <br>
        <h3 class="text-center">Admin Login</h3> <br>
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="masukkan username">
       <br>
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="masukkan password">
        <br>
        <input type="submit" class="btn btn-primary" value="Login">
     </form>
    </div>
    
</body>
</html>