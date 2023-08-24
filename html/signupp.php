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
            <h1 id="title">Sign Up</h1>
            <form method="post" action="signupp.php">

            <?php include('errors.php'); ?>

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name="username" value="<?php echo $username; ?>">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password_1">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Type Password Again" name="password_2">
                    </div>

                </div>
                <div class="btn-field">
                <button type="submit" class="btn" name="reg_user">Sign up</button>
                </div>
                <p>Already a member? <a href="signinn.php">Sign in</a></p>
            </form>
        </div>

       </div>


    </body>
</html>