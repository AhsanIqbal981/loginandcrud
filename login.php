<?php

include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from `user` where username = '$username' and password = '$password'  ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_row($result);
        if ($row > 0) {
            session_start();
            $_SESSION['username']=$username;
            header('location:enter.php');
        } else {
            echo "invalid information";
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <h1>log in</h1>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="text" name="password" placeholder="Enter your password" class="form-control" id="password" aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">login</button>
        </form>
    </div>

</body>

</html>