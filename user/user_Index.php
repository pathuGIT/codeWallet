<?php require_once('../inc/connect.php'); ?>
<?php require_once('inc/user_header.php'); ?>
    
    <section class="sechome">
        <h2>Dashboard</h2>
        <form action="inc/process.php" method="post">
            <textarea name="code" id="code" cols="30" rows="10"></textarea><br>
            <input type="submit" value="ADD">
        </form>
        <p>This page is dashboard page. If you have to save something you can enter anything above feild and click ADD button, then your data will be saved. <br>Try it.</p>  
    </section>
<?php require_once('../inc/footer.php'); ?>
<?php mysqli_close($conn); ?>
