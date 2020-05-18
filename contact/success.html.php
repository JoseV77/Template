<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>

<body>

    <?php require_once("../includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <h1>Thank you!</h1>
            <h3>Your Question or Comment Was Succesfully Sent!:</h3>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Name:</strong> <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>I am a:</strong> <?php echo htmlspecialchars($person, ENT_QUOTES, 'UTF-8'); ?><br><br>
                <strong>Question or Comment:</strong>
                <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>