<?php
session_start();
include "db_conn.php"

if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trimm($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)) {
    header ("Location: index.php?erro=Userr Name is required");
    exit();
}
else if(empty($password)) {
    header ("Location: index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sqli);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username $row['password'] === $password) {
        echo 'Logged in!';
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header ("Location: index.php");
        exit();
    }
    else {
        header("Location: index.php?error=Incorrect user name or password");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}