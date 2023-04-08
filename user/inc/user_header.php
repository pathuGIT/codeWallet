<?php 
    session_start();
    $path = $_SESSION['user_name'];
    $PATH = "../user/user_acc/".$path."/".$path.".php";
    $x = '<a href="../user/user_acc/'.$path.'/'.$path.'.php">my wallet</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Website</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="user_Index.php">Dashboard</a></li>
                <li><a href="profile.php"><?php echo "{$_SESSION['user_name']}"; ?></a></li>
            </ul>
        </nav>
    </header>
    <div class="sub_header">
        <ul>
            <li><?php echo$x ?></li>
        </ul> 
    </div>