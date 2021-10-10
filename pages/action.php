<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>
    <h1>Welcome To WWFU</h1>
    <?php
        require_once './dbConfig.php';
        if(isset($_POST['username']) &&
           isset($_POST['email']) &&
           isset($_POST['password']) &&
           isset($_POST['repeat_password'])) {

            //user's details
            $name = $_POST["username"];
            $email = $_POST["email"];
            $passphrase = $_POST["password"];
            $repeated_password = $_POST["repeat_password"];

            $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$passphrase')";

            if($conn->query($sql) === TRUE) {
                // echo "Welcome ".$name;
                header("Location: ../index.html");
            }

            $conn->close();
        } 
    ?>
</body>
</html>