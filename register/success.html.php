<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace In The Hole - Contact - Template</title>
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

<main id="contact-success">
    <h2>Success!</h2>
    <p>Registration Complete<br><br>
        Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
        Age: <?php echo htmlspecialchars($users_age, ENT_QUOTES, 'UTF-8'); ?><br>
        Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
        Emergency Contact Name: <?php echo htmlspecialchars($users_e_name, ENT_QUOTES, 'UTF-8'); ?><br>
        Emergency Contact Number: <?php echo htmlspecialchars($users_e_number, ENT_QUOTES, 'UTF-8'); ?><br>
        Gender Identification: <?php echo htmlspecialchars($users_gi, ENT_QUOTES, 'UTF-8'); ?><br>
        Event Participation Saturday: <?php echo htmlspecialchars($users_ep_saturday, ENT_QUOTES, 'UTF-8'); ?><br>
        Event Participation Sunday: <?php echo htmlspecialchars($users_ep_sunday, ENT_QUOTES, 'UTF-8'); ?><br>
        Special Accomodations Needed: <?php echo htmlspecialchars($users_special, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>
    <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours:
        Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>

    <?php include '../includes/footer.inc.html.php'; ?>

</main>
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="../scripts/scripts.js"></script>

</html>
