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
    <p>A cheerful member of our staff will be in contact with you soon:<br><br>
        Name: <?php echo htmlspecialchars($users_name, ENT_QUOTES, 'UTF-8'); ?><br>
        Email: <?php echo htmlspecialchars($users_email, ENT_QUOTES, 'UTF-8'); ?><br>
        Question: <?php echo htmlspecialchars($users_comment, ENT_QUOTES, 'UTF-8'); ?><br>
        Party Affiliation: <?php echo htmlspecialchars($users_party_affiliation, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>

    <?php include '../includes/footer.inc.html.php'; ?>

</main>
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="../scripts/scripts.js"></script>

</html>
