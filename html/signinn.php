<?php include('server.php') ?>
<!DOCTYPE html>

<html>

    <head>
        <title>VVirtual Closet</title>
        <link rel="stylesheet" href="../style/signIn.css" type="text/css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    </head>


    <body>  
       <div class="container">
        <div class="form-box">
            <h1 id="title">Sign In</h1>


            <form method="post" action="signinn.php">
            <?php include('errors.php'); ?>

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name="username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>

                </div>
                <div class="btn-field">
                <button type="submit" class="btn" name="login_user">Sign in</button>
                </div>
                <p>Not a member yet? <a href="signupp.php">Sign up</a></p>
            </form>
        </div>

       </div>


    </body>
</html>