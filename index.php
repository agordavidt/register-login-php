<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <!-- ---- font aweson 6.5.1 ----  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="functions.php" method="post">
             <div class="input-group">
                <i class="fas-fa-user"></i>
                <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                <label for="first_name">First Name</label>
             </div>
             <div class="input-group">
                <i class="fas-fa-user"></i>
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                <label for="last_name">Last Name</label>
             </div>
             <div class="input-group">
                <i class="fas-fa-envelop"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
             </div>
             <div class="input-group">
                <i class="fas-fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
             </div>
             <input type="submit" class="btn" value="Sign up" name="signup">

             <p class="or">
                ---- or ---------
             </p>
             <div class="icons">
                <i class="fas fa-google"></i>
                <i class="fas fa-facebook"></i>
             </div>
             <div class="links">
                <p>Already have account? </p>
                <button id="signInButton">Sign In</button>
             </div>
        </form>
    </div>

    <!-- ------- Sign Up ----------  -->
    <div class="container" id="signIn">
        <h1 class="form-title">Login</h1>

        <form action="functions.php" method="post">            
             <div class="input-group">
                <i class="fas-fa-envelop"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
             </div>
             <div class="input-group">
                <i class="fas-fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
             </div>
             <p class="recover">
                <a href="">recover password</a>
             </p>
             <input type="submit" class="btn" value="Sign In" name="signin">

             <p class="or">
                ---- or ---------
             </p>
             <div class="icons">
                <i class="fas fa-google"></i>
                <i class="fas fa-facebook"></i>
             </div>
             <div class="links">
                <p>Don't have account? </p>
                <button id="signUpButton">Sign Up</button>
             </div>
        </form>
    </div>
    

    <script src="assets/js/script.js"></script>
</body>
</html>
