<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds">
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

            <div id="formBox">

                <h2>Ask Your Questions Here!</h2>

                <form method="post" action=" ">
                    <input type="text" name="honeypot" id="honeypot" value="" />

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required><br><br>

                    <label for="question">Question or Comment:</label><br>
                    <textarea rows="10" cols="40" name="question" id="question" required></textarea><br><br>

                    <label for="athlete">Are you a:</label><br>
                    <input type="radio" id="athlete" name="person" value="athlete">
                    <label for="athlete">Athlete</label><br>
                    <input type="radio" id="volunteer" name="person" value="volunteer">
                    <label for="volunteer">Volunteer</label><br>
                    <input type="radio" id="interestedParty" name="person" value="party">
                    <label for="interestedParty">Interested Party</label><br><br>
                    <input id="submit" type="submit" value="Submit">
                </form>

            </div>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>