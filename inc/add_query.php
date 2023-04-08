<?php require_once('connect.php'); ?>

<?php 
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $pswd = $_POST['pswd'];

    // Generate unique folder name
    $folder_name = $first_name;

    // Generate unique page name
    $page_name = '../user/user_acc/'.$folder_name.'/'.$first_name . '.php';

    // Create new HTML page
    $html = "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <link rel='stylesheet' href='../css/Style-wallet.css'>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body>
    <h2>Here is your Wallet</h2>
    <a href='../direct.html'>back</a>";
    

    $query = "INSERT INTO customer (first_name, last_name, pswd) VALUES ('$first_name','$last_name','$pswd')";

    $result = mysqli_query($conn, $query);
    if($result){
        echo"Register successfully!";

        //create new folder for user
        mkdir("../user/user_acc/$folder_name", 0777);

        //create new page for user
        $file = fopen($page_name, 'w');
        fwrite($file, $html);
        fclose($file);

        //redirect to sign in page
        header("Location: ../signin.php");
    }else{
        echo"Failed";
    }
?>

<?php mysqli_close($conn); ?>