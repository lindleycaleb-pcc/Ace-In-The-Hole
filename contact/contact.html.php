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

    <main>
    <section class="content">
        <div class="form-page" id="contact-form">
            <h2>Contact Us</h2>
            <p>Got a question for us? Just fill out the form below. A member of our staff will contact you soon.</p>
                <form action="contact_form.php" method="post" name="input">
                            <label for="cname">Name</label>
                            <input type="text" id="name" name="name" required="required">

                            <label for="ce-mail">E-mail</label>
                            <input type="text" id="contact-email" name="email" required="required">

                            <label for="party">Party Affiliation</label>
                            <select id="party" name="party">
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="interested_party">Interested Party</option>
                            </select>

                            <label for="comment">Question/Comment</label>
                            <textarea id="comment" name="comment" required="required"></textarea>

                            <input type="submit" id="submit" value="Submit">
                </form>
        </div>
    </section>

    <section class="content">

    </section>

    <?php include '../includes/footer.inc.html.php'; ?>

</main>
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="../scripts/scripts.js"></script>

</html>