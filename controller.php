<?php 
include 'connection.php';

// LOGIN
if(isset($_POST['login'])){
    $name = $_POST['name']; 
    $password = md5($_POST['password']);

    $result = $mysqli->query("SELECT * FROM user WHERE name='$name' AND password='$password'");  

    if($user = mysqli_fetch_assoc($result)){
        $_SESSION['id_user'] = $user['id_user']; 
        $_SESSION['name'] = $user['name']; 
        header("Location: index.php"); 
        exit(); 
    }else{
        echo "Invalid validation"; 
    }
}
// LOGOUT
elseif(isset($_POST['logout'])){
    $_SESSION=[];
    session_unset(); 
    session_destroy(); 
    header("Location: index.php"); 
    exit(); 
}
else{
    echo "nothing"; 
}

?>