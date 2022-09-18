<?php
include('connect.php');
$id = $_GET['updateId'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crud operation</title>
</head>

<body>
    <div class="constainer my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                    placeholder="enter your name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="enter your email" autocomplete="off" value=<?php echo $email; ?>>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile no</label>
                <input name="mobile" type="text" class="form-control" id="mobile" aria-describedby="emailHelp"
                    placeholder="enter your mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="text" class="form-control" id="password" placeholder="enter your password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>