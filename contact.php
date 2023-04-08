<?php require_once('inc/header.php'); ?>
<?php
    if(isset($_POST['email']) && $_POST['email'] != ''){    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $massege = $_POST['msg'];

        $to = "pathumwannige@gmail.com";
        $subject = "web site";
        $body = " <br>";
        $body .= "From: ".$name."<br>";
        $body .= "Email: ".$email."<br>";
        $body .= "Message: ".$massege."<br>";

        $header = "From: {$email}\r\nContent-Type:text/html;";
        $send_mail = mail($to,$subject,$body,$header);

        if($send_mail){
            echo"Massage sent";
        }else{
            echo"Massage Failed";
        }
    }
    // $to = "pathumwannige@gmail.com";
    // $body = "hello pathum";
    // $hed = "hello";
    // mail($to,$hed,$body);
?>
<section style="height:75vh">
<?php
    // echo"<pre>";
    // print_r($_POST);
    // echo"</pre>";
?>
    <h2>Contact Page</h2>
    <form action="contact.php" method="post" >
        <table style="position:absolute;left:50%;top:50%;transform:translateX(-50%) translateY(-50%);">
            <tr>
                <td>Enter name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Enter Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Enter Email:</td>
                <td><textarea name="msg" id="msg" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="SEND"></td>
            </tr>
        </table>
    </form>
</section>
<?php require_once('inc/footer.php'); ?>