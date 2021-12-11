<?php
require_once("config.php");

$username = $connessione->real_escape_string($_POST["username"]);
$password = $connessione->real_escape_string($_POST["password"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql_select = "SELECT * FROM registers WHERE username = '$username'";
    if ($result = $connessione->query($sql_select)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);

            if (password_verify($password, $row["password"])) {
                session_start();


                $_SESSION['loggato'] = true;
                $_SESSION["id"] = $row["id"];
                $_SESSION["username"] = $row["username"];

                header("location: signspage.php");
            } else {
                echo "password is not correct";
            }
        } else {
            echo "no username found";
        }
    } else {
        echo "Error during login";
    }

    $connessione->close();
}
