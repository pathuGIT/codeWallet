<?php require_once('inc/header.php'); ?>
<section class="secsign" style="height:75vh" >
    <h2>Sign In</h2>
    <form class="sign" action="inc/check_query.php" method="post">
        <a href="register.php" style="font-size:15px" >Register here</a><br>
        User ID: <input type="text" name="userid"><br>
        Password: <input type="password" name="pswd"><br>
        <input type="submit" vlaue="Log In">
    </form>
</section>
<?php require_once('inc/footer.php'); ?>