<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>
<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
    </script>

    <?php require_once("../includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <div id="register-grid">

                <div id="register">

                    <h2>Register for an Event!</h2>

                    <form method="post" action=" ">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" required><br>

                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required><br>

                        <label for="role">Choose your role:</label>
                        <select id="role" name="roles">
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                        </select><br>

                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required><br><br>

                        <label for="ename">Emergency Contact Name:</label>
                        <input type="text" id="ename" name="ename" required><br>

                        <label for="ephone">Enter your emergency contacts phone:</label>
                        <input type="tel" id="ephone" name="ephone" placeholder="503-333-333"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>

                        <label for="genders">Gender:</label>
                        <select id="genders" name="genders">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nonBinary">Non-binary</option>
                            <option value="other">Other</option>
                        </select><br><br>


                        <label for="eventsSaturday"><strong>Saturday</strong> Events Registering For:</label>
                        <select id="eventsSaturday" name="eventsSaturday">
                            <option value="long">Long Course Triathlon 7:00 AM</option>
                            <option value="olympic">Olympic Triathlon 7:30 AM</option>
                            <option value="10k">10K 7:15 AM</option>
                            <option value="half">Half Marathon 7:15 AM</option>
                        </select><br><br>

                        <label for="eventsSunday"><strong>Sunday</strong> Events Registering For:</label>
                        <select id="eventsSunday" name="eventsSunday">
                            <option value="spring">Sprint Triathlon 8:00 AM</option>
                            <option value="try-a-tri">Try-a-Tri 8:20 AM</option>
                            <option value="splash">Splash n Dash 12:00 PM</option>
                        </select><br><br>

                        <label for="accommodations">Any special accommodations needed:</label><br>
                        <textarea rows="10" cols="40" name="accommodations" id="accommodations"></textarea><br><br>
                        <input id="submit" type="submit" value="Submit">

                    </form>

                </div>

                <div id="fees">
                    <h2>Registration Fees</h2>
                    <table>
                        <tbody>
                        <tr>
                            <th>Long Course</th>
                            <th>Olympic</th>
                            <th>10K</th>
                            <th>Half Marathon</th>
                            <th>Sprint</th>
                            <th>Try-a-Tri</th>
                            <th>Splash n' Dash(kids)</th>
                        </tr>
                        <tr>
                            <td>$240</td>
                            <td>$110</td>
                            <td>$50</td>
                            <td>$75</td>
                            <td>$90</td>
                            <td>$65</td>
                            <td>$25 or Free</td>
                        </tr>
                        <tr>
                            <td>7:00 AM</td>
                            <td>7:30 AM</td>
                            <td>7:15 AM</td>
                            <td>7:15 AM</td>
                            <td>8:00 AM</td>
                            <td>8:20 AM</td>
                            <td>12:00 PM</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>