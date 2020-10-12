<?php 
    session_start([
        "cookie_lifetime"=>300
    ]);
    $error = false;
    // session_destroy();
    if(isset($_POST['username']) && isset($_POST['password'])){
        if ('admin' == $_POST['username'] && '7a8dd0145ccd14f8d12e3be29f98fc8e' == md5($_POST['password'])) {
            $_SESSION['loggedin'] = true;
        }else{
            $error = true;
            $_SESSION['loggedin'] = false; 
        }
    }
    if (isset($_POST['logout'])) {
        $_SESSION['loggedin'] = false; 
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href=".../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/milligram.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 pt-50 column-offset-20">
                <h2>Simple Auth Example</h2>
                <p>
                    <?php
                        if(true == $_SESSION['loggedin']){
                            echo "Hello Stranger Welcome";
                        }else{
                            echo "Hello Stranger, login below";
                        }
                    ?>
                </p>
                <p>
                    <?php
                        if ($error == true) {
                            echo "<blockquet>User Name and Password did't match</blockquet>";
                        }
                    ?>
                </p>
                <?php if (false == $_SESSION['loggedin']) { ?>
                    <form method="POST">
                        <label for="userName">User Name</label>
                        <input type="text" name="username" placeholder="User Name" id="userName">
                        <label for="Password">Password</label>
                        <input type="password" name="password" id="Password">
                        <input class="button-primary" type="submit" name="submit" value="Log In">
                    </form>       
                <?php   }else{ ?>
                    <form action="auth.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <input class="button-primary" type="submit" value="Log Out">
                    </form>  
                <?php } ?>
            </div>
        </div> 
    </div>
    <script src="assets/js/scripts.js"></script>
</body>
</html>