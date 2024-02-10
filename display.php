<?php
include 'connect.php';
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
session_start();



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <button class="btn btn-primary"> <a href="enter.php" class="text-light">Add data</a></button>
        <h3> <?php echo "username :";
                echo $_SESSION['username']; ?></h3>
        <h1>Here's Your data</h1>

        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Roll NO</th>
                    <th scope="col">Student name</th>
                    <th scope="col">Total Marks</th>
                    <th scope="col">Obtained marks</th>
                    <th scope="col">Oprators</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `enter`";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id     = $row['id'];
                    $name   = $row['name'];
                    $tmarks = $row['tmarks'];
                    $omarks = $row['omarks'];
                    echo '                <tr>
                    <th scope="">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $tmarks . '</td>
                    <td>' . $omarks . '</td>
                    <td> <button class = "btn btn-primary"><a href="update.php?updateid=' . $id . ' " class="text-light">Update</a></button> <button class = "btn btn-danger"><a href="delete.php?deleteid=' . $id . ' " class="text-light">Delete</a></button> </td>
                </tr>';
                }
                ?>



            </tbody>
        </table>
        <button class="btn btn-primary"> <a href="logout.php" class="text-light">Logout</a></button>
    </div>

</body>

</html>