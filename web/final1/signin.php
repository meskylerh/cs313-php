<?php include 'header.php'; ?>
<? 
       echo '<h2>Sign In</h2>
        <br>
        <form name="Signin" action="./signin.php" method="POST">
        <fieldset>
        <label> E-mail: </label>
        <input required type ="text" name="login" type="text" />
        </fieldset>
        <fieldset>
        <label>Password:</label>
        <input required type ="text" name="password" type="text" />
        <br>
        <label>Confirm password:</label>
        <input required type ="text" name="password_copy" type="text" />
        </fieldset>
        <input type="submit">
        </form>';
?>
<?php include 'footer.php'; ?>