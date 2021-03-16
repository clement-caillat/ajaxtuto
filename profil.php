<?php 
    session_start();

    if (isset($_GET['d'])){
        session_destroy();
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Salut <?php echo $_SESSION['username']; ?></h1>
    <a href="?d">Log Out</a>
</body>
</html>