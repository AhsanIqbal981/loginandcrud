<?php

include 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $tmarks = $_POST['tmarks'];
    $omarks = $_POST['omarks'];
    $sql = "INSERT INTO `enter` (`name`, `tmarks`, `omarks`) VALUES ( '$name', '$tmarks' , '$omarks')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Congratulations! Your data has been uploaded.";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>enter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <h1>Hello <?php echo $_SESSION['username']; ?> Welcome to our site!</h1>
        <h2>Enter Your data</h2>
        <form action="enter.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="tmarks" class="form-label">Total Marks</label>
                <input type="number" name="tmarks" class="form-control" placeholder="Enter your Total marks" id="tmarks" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="omarks" class="form-label">Obtained Marks</label>
                <input type="number" name="omarks" class="form-control" placeholder="Enter your obtained marks" id="omarks" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <br>
            <br>
            <p>Wanna se the data that you have entered? click below!</p>
            <button class="btn btn-primary"><a href="display.php" class="text-light">Display</a></button>
            <button class="btn btn-primary"> <a href="logout.php" class="text-light">Logout</a></button>
        </form>
    </div>

</body>

</html>