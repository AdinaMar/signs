<?php
session_start();
if (!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true) {
    header("location:log.html");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signs</title>

    <link rel="stylesheet" href="styler/csssign.css">
</head>

<body>
    <h1 class="ml9">
        <span class="text-wrapper">

            <span class="letters"> <?php echo "Hello " . $_SESSION["username"];
                                    ?> </span>

    </h1>
    <div class="container">
        <div class="top">

            <div class="forma">
                <div class="header">
                    <h2>Enter your sign</h2>
                </div>
                <form class="form">

                    <label for="sign"></label>
                    <input type="text" name="sign" id="sign" required>

                    <input type="submit" value="start" id="value">

                </form>
                <img class="img" src="">

                <p class="prediction"></p>
                <button id="reload" style="visibility:hidden">Try Again</button>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="javascript/effect.js"></script>
    <script src="javascript/signs.js"></script>
</body>

</html>