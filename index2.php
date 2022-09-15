<?php
session_start();
?>

<form method="POST"  >
    <input type="text" name="username" placeholder="username"> <br><br>
    <input type="password" name="password" placeholder="password_kamu"> <br><br>  
    <input type="submit" name="masuk" value="login">

</form>

<?php
if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'Hendra'){
        if($password == 'rafatar'){
            $_SESSION['user'] = $username;
            header('location: beranda.php');

        }else{
            echo "
            <script>
            alert(' password salah ... !! ');
            </script>
            ";

        }
    }else{
        echo "
        <script>
        alert(' username tidak terdaftar..!! ');
        </script>
        ";
    }
}
?>