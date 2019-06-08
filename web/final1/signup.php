<?php include 'header.php'; ?>
<?php
        
        Echo '<h2> Already have an account sign in</h2>
               <a href="signin.php" class="button-class">Sign in</a>';
      
        
        
        
        echo '<h2>Signup</h2>
        <br>
        <form name="Signup" action="./signup.php" method="POST">
        <fieldset>
        <label> E-mail: </label>
        <input required type ="text" name="login" type="text" />
        </fieldset>
        <fieldset>
        <label>Password:</label>
        <input required type ="text" name="password" type="text">
        <br>
        <label>Confirm password:</label>
        <input required type ="text" name="password_copy" type="text">
        </fieldset>
        <input type="submit">
        </form>';
   
    
    
    
    
       if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && isset($_POST['password'])){
        // retrieve the form data by using the element's name attributes value as key
        $login = $_POST['login'];
        $password = $_POST['password'];
        $db = getDb();
        $hashedPassword = fetch()['password]';
        $users = selectByLoginPassword($db, $login, $hashedPassword);//listAll($db); //
        $countUsers =count($users); 
        if($countUsers == 0) {
                //User not found
                printNoUser();
        } else if ($countUsers == 1) {
                // user is found, storing the user Id into session
                $r = users[0];
                setSessionUser($r['id'], $r['login']);
                printUser($r['username']);
                $newPage = "index.php";
                header("Location: $newPage");
                die();    
        } else {
            // multiple users, 
            echo '<h2>Error</h2>';
        }
    } else {
        //Get or no login/ password info
        printNoUser();
    }
 ?>
<?php include 'footer.php'; ?>