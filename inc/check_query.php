<?php require_once('connect.php'); ?>
    <?php
        $user_id = $_POST['userid'];
        $user_pswd = $_POST['pswd'];
        echo"<pre>";
        print_r($_POST);
        echo"<pre>";
        $query = "SELECT id, first_name, pswd FROM customer";
        $result = mysqli_query($conn, $query);
        if($result){
            while($record = mysqli_fetch_assoc($result)){
                if(($record['id'] == $user_id) && ($record['pswd'] == $user_pswd)){
                    echo"Successfuly founded."."<br>";
                        session_start();
                        $_SESSION['user_id'] = $record['id'];
                        $_SESSION['user_pswd'] = $record['pswd'];
                        $_SESSION['user_name'] = $record['first_name'];
                    header("Location: ../user/user_Index.php");
                    break;
                }elseif(($user_id == 2189)&&($user_pswd == 2189)){
                    header("Location: ../admin/admin_Index.php");
                    break;
                }else{
                    echo"Login Failed!";
                }
            }
        }else{
            echo"Failed";
        }
    ?>

<body>
        <?php
        // echo "User ID: {$_SESSION['user_id']} <br>";
        // echo "User PSWD: {$_SESSION['user_pswd']} <br>";
        ?>
</body>
<?php mysqli_close($conn); ?>