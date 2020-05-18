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

    <header>
        <a href="javascript:void(0);" class="icon" onclick="dropLinks()">
            <i class="fas fa-bars"></i>
        </a>

        <nav id="desktop-nav">
            <img src="../images/aceintheholeLogo.png" class="logo" alt="logo">
            <a href="index.php">Home</a>
            <a href="events.php">Events</a>
            <a href="register">Register</a>
            <a href="contact.php">Contact</a>
        </nav>

        <nav id="mobile-nav">
            <img src="../images/logo2.jpg" class="logo" alt="ace">
            <div id="links">
                <a href="index.php">Home</a>
                <a href="events.php">Events</a>
            </div>
        </nav>
    </header>

    <main>

        <h1><?php echo $error; ?></h1>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>