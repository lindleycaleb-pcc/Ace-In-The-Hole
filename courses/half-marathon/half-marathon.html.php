<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace In The Hole - Half-Marathon - Template</title>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../../styles/style.css>
    <link rel="stylesheet" href="styles/styles-half-marathon.css">
</head>

<body>
    <header>
    <div id="wrapper">
        <?php include '../../includes/header.inc.html.php'; ?>
        <?php include '../../includes/nav.inc.html.php'; ?>
    </div>
    </header>

    <main class="long-course">
        <div class="width-1200">
        <span class="wrapper">
    <section class="content">
        <h1>Half Marathon</h1>
    </section>

    <div class="price">
        <p>Event Day: <strong>Saturday</strong></p>
        <p>Start Time: <strong>7:15AM</strong></p>
        <p>Event Cost: <strong>$75</strong></p>
    </div>

    <div class="icons">
        <p>Difficulty Level: <strong>Moderate</strong></p>
        <img src="https://img.icons8.com/ios-filled/50/000000/running.png" alt="Running Icon"/>
              <div class="diff-level">
                <div id="dots-run">
                <span id="dot1"></span>
                <span id="dot2"></span>
                <span id="dot3"></span>
                <span id="dot4"></span>
                <span id="dot5" style="background-color: grey;"></span>
              </div>
              </div>
    </div>

        <div class="course-details">
            <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the
                enthusiastic crowd. Once finished, runners can enjoy the finish line festivities,
                including the Sports & Fitness Expo and live entertainment. Post-race refreshments
                will be provided and the Awards Ceremony for the Half-Marathon will begin once the
                results have been certified.</p>
        </div>

        <div class="dropdown3">
            <button onclick="myFunction3()" class="dropbtn3"><strong>Run</strong><span>+</span></button>
            <div id="myDropdown3" class="dropdown-content3">
                <p><strong>13.1 Miles</Strong> - Half-Marathon event starts and finishes in the Athletes Village.</p>
            </div>
        </div>

        <div id="packet-pickup">
            <p><strong>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.
            Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick
                    up.</strong></p>
        </div>
        <div class="register-button">
            <a class="register-btn" href="../../register/register.html.php">Register</a>
        </div>
    </span>
        </div>
        <section class="content" id="what-to-bring">
            <div class="width-1200">
            <h2>What to Bring</h2>
            <p>Watch the weather closely. The show goes on no matter what the weather
                is doing.</p>
            <p>You must wear your chip timing piece during the entire event. You will
                be given a band that will hold your chip timing piece around your ankle
                throughout the entire event. Be sure that it is snapped tightly. Be
                sure to have your Chip Timing piece on before you start the race and be
                sure to step over the timing mats after each segment of the race. If
                you are wearing a wet-suit, make sure the timing piece goes under your
                wetsuit otherwise, you will have a very difficult time getting off your
                wet suit.</p>

            <div class="dropdown6">
                <button onclick="myFunction6()" class="dropbtn6"><strong>Run</strong><span>+</span></button>
                <div id="myDropdown6" class="dropdown-content6">
                    <p>You must finish the race with your bib number on the front of you.
                        Some people choose to pin it on at the beginning of the race and have it
                        on for the whole event so they don't have to worry about it. Others pin
                        it on a singlet that they put on once they finish the swim before they
                        head out for the bike. Others use an elastic racing strap that they pin
                        their bib number to and then quickly strap it on before they leave for
                        the run. Use whatever option feels best for you.</p>
                </div>
            </div>
            <p>Remember to bring a change of clothing so you can enjoy the post-event
                festivities.
            </p>
            </div>
        </section>
        <br>
        <div class="width-1200">
        <span class="wrapper">
        <div id="cost-includes">
            <h3>What's Included?</h3>
            <ul>
                <li>Food & Beer</li>
                <li>Weekend's Live Entertainment & Fitness Expo</li>
                <li>Commemorative Finisher Medal</li>
                <li>Accurate Chip Timing for Competitive Events</li>
                <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                <li>Post-Event Party & Entertainment</li>
            </ul>
        </div>
            <br>
        <p><strong>NOTE:</strong> Tech shirts quaranteed to pre-registered participants only.</p>
        <br>

        <div class="register-button">
            <a class="faq-btn" href="../../faq/faq.html.php">FAQs</a>
        </div>
        <div id="packet-pickup-bottom">
            <p><strong>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.
                    Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick
                    up.</strong></p>
        </div>
        </span>
        </div>

        <?php include '../../includes/footer.inc.html.php'; ?>

    </main>
</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="../../scripts/scripts.js"></script>

</html>