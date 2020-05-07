<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="scripts.js" type="text/javascript"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
    </script>

    <main>

        <header>
            <a href="javascript:void(0);" class="icon" onclick="dropLinks()">
                <i class="fas fa-bars"></i>
            </a>

            <nav id="desktop-nav">
                <h1>Heading 1</h1>
                <a href="index.html">Home</a>
                <a href="events.html">Events</a>
                <a href="register.html">Register</a>
                <a href="contact">Contact</a>
            </nav>

            <nav id="mobile-nav">
                <h1>Heading 1</h1>
                <div id="links">
                    <a href="index.html">Home</a>
                    <a href="events.html">Events</a>
                    <a href="register.html">Register</a>
                    <a href="contact.html">Contact</a>
                </div>
            </nav>
        </header>

        <div id="wrapper">

            <form method="post" action="" id="contactForm">
                <h2>Ask your questions here!</h2>
                <input type="text" name="honeypot" id="honeypot" value=""
                    alt="if you fill this field out then your email will not be sent" />
                <label for="myName">Name:</label>
                <input type="text" name="myName" id="myName" required>
                <label for="myEmail">E-mail:</label>
                <input type="text" name="myEmail" id="myEmail" required>
                <label for="myQuestion">Question:</label>
                <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion" required></textarea>
                <input id="mySubmit" type="submit" value="Submit">
            </form>

        </div>

    </main>

    <footer>
        <p>Copyright &copy; 2020 Ace in the Hole Multisport Events</p>
    </footer>

</body>

</html>