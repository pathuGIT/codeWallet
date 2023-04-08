<?php require_once('../inc/connect.php'); ?>
<?php
            $query = "SELECT id, first_name, last_name FROM customer";
            $result = mysqli_query($conn, $query);
            if($result){
                mysqli_num_rows($result); //=> To calculate how many raws in database

                $table  = '<table>';
                $table .= '<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>';

                    // $record = mysqli_fetch_assoc($result) => To take raw one by one from database
                    while($record = mysqli_fetch_assoc($result)){
                        $table .= '<tr>';
                            $table .= '<td>'.$record['id'].'</td>';
                            $table .= '<td>'.$record['first_name'].'</td>';
                            $table .= '<td>'.$record['last_name'].'</td>';
                        $table .= '</tr>';
                    }

                $table .= '</table>';
            }else{
                echo"Failed";
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PAge</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <ul>
            <li> <a href="../index.php">LOG OUT</a></li>
        </ul>
    </header>
    <section class="row2">
        <h3>Admin Page</h3>
        <?php echo $table; ?>
    </section>
</body>
</html>
<?php mysqli_close($conn); ?>