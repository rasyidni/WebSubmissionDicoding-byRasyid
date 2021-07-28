<?php

session_start();

$form_error = '';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $password = $_POST['password'];

    if($nama == 'Rasyid' AND $password == 'Rasyid'){

        $_SESSION['nama'] = $nama;
        header('Location: webrasyid.php');
    }else{

        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}

?>

<!DOCTYPE html>
<head>
    <title>Login Sederhana Tanpa Database</title>
</head>
<body>

    <h3>Silakan Login</h3>

    <form method="POST" action="login.php">
        Email : <input type="nama" name="nama"><br>
        Password : <input type="password" name="password"><br>
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Login">
    </form>
    
</body>
</html>