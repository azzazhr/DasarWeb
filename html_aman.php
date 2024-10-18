<!DOCTYPE html>
<html>

<head>
    <title>Form Input</title>
</head>

<body>
    <h2>Form Input</h2>

    <?php

    $input = "";
    $inputErr = "";
    $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["input"])) {
            $inputErr = "Input harus diisi!";
        } else {
            $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
            echo "Input yang aman: " . $input;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email harus diisi!";
    } else {
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); // Amankan email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $successMsg = "Input yang aman: " . $input . "<br>Email yang valid: " . $email;
        } else {
            $emailErr = "Format email tidak valid!";
        }
    }
    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>">
        <span style="color:red;"><?php echo $inputErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>