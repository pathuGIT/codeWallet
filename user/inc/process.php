<?php
session_start();

    //file & folder name
    $path = $_SESSION['user_name'];

    //php code to write into file
    $code = "<pre>".$_POST['code']."</pre>";

    $file = fopen("../user_acc/".$path."/".$path.".php",'a') or die("file not found");
    fwrite($file, $code . "\n");
    fclose($file);

    header("Location: ../user_Index.php");
                        
echo $code;
?>