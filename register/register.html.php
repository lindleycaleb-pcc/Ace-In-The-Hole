<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace In The Hole - Registration - Template</title>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../styles/style.css>
</head>

<body>
    <header>
    <div id="wrapper">
        <?php include '../includes/header.inc.html.php'; ?>
        <?php include '../includes/nav.inc.html.php'; ?>
    </div>
        <div class="hero-image"></div>
    </header>

    <main>
    <section class="content width-1200">
        <div class="form-page" id="volunteer-form">
            <h2>Registration</h2>
            <p>Got a question for us? Just fill out the form below. A member of our staff will contact you soon.</p>
            <form action="register_form.php" method="post" name="input">
                <div class="row">
                    <div class="column">
                        <label for="cname">Name</label>
                        <input type="text" id="name" name="name" required="required">

                        <label for="age">Age</label>
                        <input type="text" id="age" name="age" required="required">

                        <label for="role">Role</label>
                        <select id="role" name="role">
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                        </select>

                        <label for="ce-mail">E-mail</label>
                        <input type="text" id="email" name="email" required="required">

                        <label for="e-name">Emergency Contact Name</label>
                        <input type="text" id="e-name" name="e-name" required="required">

                        <label for="e-number">Emergency Contact Number</label>
                        <input type="text" id="e-number" name="e-number" required="required">
                    </div>
                    <div class="column">
                        <label for="gi">Gender Identification</label>
                        <select id="gi" name="gi">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="non-binary">Non-Binary</option>
                            <option value="other">Other</option>
                        </select>

                        <label for="ep-saturday">Event Participation - Saturday</label>
                        <select id="ep-saturday" name="ep-saturday">
                            <option value="none">None</option>
                            <option value="long">Long Course Triathlon - 7:00AM</option>
                            <option value="olympic">Olympic Triathlon - 7:30AM</option>
                            <option value="10k">10K - 7:15AM</option>
                            <option value="half-marathon">Half Marathon - 7:15AM</option>
                        </select>

                        <label for="ep-sunday">Event Participation - Sunday</label>
                        <select id="ep-sunday" name="ep-sunday">
                            <option value="none">None</option>
                            <option value="sprint">Sprint Triathlon - 8:00AM</option>
                            <option value="try-a-tri">Try-a-Tri - 8:20AM</option>
                            <option value="splash-n-dash">Splash n'Dash - 12:00PM</option>
                        </select>

                        <label for="special">Special Accommodations Needed</label>
                        <textarea id="special" name="special" required="required"></textarea>


                        <input type="submit" id="submit" value="Register">
                    </div>
            </form>
          </div>
        </div>
    </section>

    <?php include '../includes/footer.inc.html.php'; ?>

</main>
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="../scripts/scripts.js"></script>

</html>