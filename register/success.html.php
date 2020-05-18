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
        <p>Our records show you submitted the following:<br>
            Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
            Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
            Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
            Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br><br>
            Emergency Contact Name: <?php echo htmlspecialchars($econtactname, ENT_QUOTES, 'UTF-8'); ?><br>
            Emergency Contact Phone: <?php echo htmlspecialchars($econtactphone, ENT_QUOTES, 'UTF-8'); ?><br><br>
            Saturday Event: <?php echo htmlspecialchars($saturdayevent, ENT_QUOTES, 'UTF-8'); ?><br><br>
            Sunday Event: <?php echo htmlspecialchars($sundayevent, ENT_QUOTES, 'UTF-8'); ?><br><br>
            Special Accomodations: <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>