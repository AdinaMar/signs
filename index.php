<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signs</title>
    <link rel="stylesheet" type="text/css" href="styler/style2.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="user signupBx">

                <div class="formBx">
                    <form action="register.php" method="post">
                        <!--The action attribute specifies where to send the form-data when a form is submitted.-->
                        <h2>Create an account</h2>

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                        <span></span>


                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" required>
                        <span></span>


                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required>



                        <label for="password">Confirm password:</label>
                        <input type="password" name="password" id="password" required>


                        <input type="submit" value="Sign Up">
                        <p>Already own an account? <a href="log.html" onclick="toggleForm();">Sign In</a></p>
                    </form>
                </div>
                <!--  <div class="imgBx"><img src="images/signss.jpg"></div>   -->
            </div>

        </div>

    </section>
    <script src="javascript/app.js"></script>
    <script src="javascript/validation.js"></script>
</body>

</html>