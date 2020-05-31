<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace In The Hole - Olympic Course - Template</title>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../../styles/style.css>
    <link rel="stylesheet" href=styles/styles-olympic-course.css>
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
        <h1>Olympic Course Triathlon</h1>
    </section>

    <div class="price">
        <p>Event Day: <strong>Saturday</strong></p>
        <p>Start Time: <strong>7:30AM</strong></p>
        <p>Event Cost: <strong>$110</strong></p>
    </div>

    <div class="icons">
        <p>Difficulty Level: <strong>Advanced</strong></p>
        <img src="https://img.icons8.com/ios-filled/100/000000/swimming.png" alt="Swimming Icon"/>
            <div class="diff-level">
                <div id="dots-swim">
                <span id="dot1"></span>
                <span id="dot2"></span>
                <span id="dot3"></span>
                <span id="dot4"></span>
            <span id="dot5" style="background-color: grey;"></span>
                </div>

        <img src="https://img.icons8.com/ios-filled/100/000000/cycling-road--v1.png" alt="Bike Icon"/>
                    <div class="diff-level">
                <div id="dots-bike">
                <span id="dot1"></span>
                <span id="dot2"></span>
                <span id="dot3"></span>
                <span id="dot4"></span>
            <span id="dot5" style="background-color: grey;"></span>
                </div>

        <img src="https://img.icons8.com/ios-filled/50/000000/running.png" alt="Run Icon"/>
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
      </div>
    </div>

        <div class="course-details">
            <p>Experience the Olympic Course Triathlon - A challenging 1,500 meter swim, 28
                mile bike course, and a 10K run to the finish line. Difficulty level
            is moderate with a total of two hills with minimal elevation gain.</p>
        </div>

        <div class="dropdown1">
            <button onclick="myFunction1()" class="dropbtn1"><strong>Swim</strong><span>+</span></button>
            <div id="myDropdown1" class="dropdown-content1">
                <p><strong>1,500 Meters</Strong> - Participants will make two counter-clockwise loops. Large buoys
                    will mark the turn points. Kayakers will be positioned on the water
                    to support the swimmers. Medical support will be present on the beach.</p>
            </div>
        </div>
        <div class="dropdown2">
            <button onclick="myFunction2()" class="dropbtn2"><strong>Bike</strong><span>+</span></button>
            <div id="myDropdown2" class="dropdown-content2">

                <p><strong>28 Miles</Strong> - A scenic point-to-point course that travels over gently
                    rolling hills. The bike course will be marked with large directional signage and
                    course marshals will be present at key intersections.</p>
            </div>
        </div>
        <div class="dropdown3">
            <button onclick="myFunction3()" class="dropbtn3"><strong>Run</strong><span>+</span></button>
            <div id="myDropdown3" class="dropdown-content3">
                <p><strong>10K</Strong> - A mostly flat loop course on widely paved bike paths that traverse through and
                    around this beautiful and scenic destination resort (two hills total with a
                    minimal elevation gain).</p>
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
        </div>
    </span>
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

            <div class="dropdown4">
                <button onclick="myFunction4()" class="dropbtn4"><strong>Swim</strong><span>+</span></button>
                <div id="myDropdown4" class="dropdown-content4">
                    <p>Wetsuits are optional for the swim but will provide buoyancy and
                        warmth. However, many people opt for no wetsuit for a triathlon so no
                        worries. We will provide you with a swim cap but you will want to
                        bring your own goggles.</p>
                    <p><strong>NOTE:</strong> Water temperature is expected to be between 62 & 66 degrees. The
                        temperature will be taken on Friday and the morning of the race.
                        Wetsuits are recommended.</p>
                </div>
            </div>
            <div class="dropdown5">
                <button onclick="myFunction5()" class="dropbtn5"><strong>Bike</strong><span>+</span></button>
                <div id="myDropdown5" class="dropdown-content5">

                    <p>A biking helmet is mandatory. You will also receive 2 stickers in
                        your package with your race number on them. The small sticker should go
                        on the front of your helmet. The bigger sticker will wrap around your
                        bike frame. Road or mountain bikes are acceptable. For safety reasons,
                        be sure to have end-caps on the end of your handle-bars.</p>
                </div>
            </div>
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
        </section>
        </div>
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