<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace In The Hole - Template</title>
    <meta name="" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">

    <script rel=text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script rel="text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

</head>

<body>
    <header>

    <div id="wrapper">
        <?php include '../includes/header.inc.html.php'; ?>
        <?php include '../includes/nav.inc.html.php'; ?>
    </div>
    </header>

    <main id="container">

        <div id="banner-video">
        <video controls autoplay muted>
            <source src="../images/AITH.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>

        <section id="top" class="content">
            <h2>Events for Every Body.</h2>
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon
                events to athletes of all shapes and sizes, national origins, gender
                identifications and cultural backgrounds.</p>
        </section>


        <section id="third-section" class="content">
            <div class="width-1200">
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="dark" >PORTLAND WEATHER</a>

                <div id="home-p-1">
            <img src="../images/icons8-oregon-80.png" alt="Oregon Icon">
            <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon
                triathlon and running community. It has become a traditional destination race
                for athletes from across the nation.</p>
            </div>
            <div  id="home-p-2">
            <img src="../images/icons8-silver-medal-80 (1).png" alt="Icon of trophy.">
            <p>
                There is something for every level of athletic ability. The weekend includes a
                first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and
                Half marathon runs. Come to experience your first race or come to compete to win,
                but make sure you come to have fun!
            </p>
            </div>
            </div>

        </section>


        <section id="second-section" class="content">
            <h2>Weekend Events</h2>
                <table style="width: 100%; text-align: left;">
                    <tr>
                        <th>Saturday</th>
                        <th>Start Time</th>
                        <th>Fee</th>
                    </tr>
                    <tr>
                        <td>Long Course Thriathlon</td></d>
                        <td>7:00 AM</td>
                        <td>$240</td>
                    </tr>
                    <tr>
                        <td>Olympic Triathlon</td></d>
                        <td>7:30 AM</td>
                        <td>$110</td>
                    </tr>
                    <tr>
                        <td>10K</td></d>
                        <td>7:15 AM</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td>Half Marathon</td></d>
                        <td>7:15 AM</td>
                        <td>$75</td>
                    </tr>
                    <tr>

                        <th id="sunday">Sunday</th>
                        <th>Start Time</th>
                        <th>Fee</th>
                    </tr>
                    <tr>
                        <td>Sprint Triathlon</td></d>
                        <td>8:00 AM</td>
                        <td>$90</td>
                    </tr>
                    <tr>
                        <td>Try-a-Tri</td></d>
                        <td>8:20 AM</td>
                        <td>$65</td>
                    </tr>
                    <tr>
                        <td>Splash n' Dash</td></d>
                        <td>12:00 PM</td>
                        <td>$25*</td>
                    </tr>
                </table>

            <div id="home-reg-btn" class="register-button">
                <a class="register-btn" href="../../register/register.html.php">Register</a>
            </div>

            <div id="packet-pickup-bottom">
                <p>*If your an adult who has registered for an event, your child can participate in
                    Splash n' Dash for free.</p>
                <p><strong>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.
                        Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick
                        up.</strong></p>
            </div>
        </section>


        <div class="slider">
            <div><img src="../images/slider1.png" title="Image of AITH sport event."></div>
            <div><img src="../images/slider2.png" title="Image of AITH sport event."></div>
            <div><img src="../images/slider3.png" title="Image of AITH sport event."></div>
            <div><img src="../images/slider4.png" title="Image of AITH sport event."></div>
            <div><img src="../images/slider5.png" title="Image of AITH sport event."></div>
        </div>

        <div class="width-1200px" id="home-bottom">
        <section class="content" id="what-to-bring-home">
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
                <button onclick="myFunction4()" class="dropbtn4 dropbtn4-home"><strong>Swim</strong><span>+</span></button>
                <div id="myDropdown4" class="dropdown-content4  home-dropdown-4">
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
                <button onclick="myFunction5()" class="dropbtn5 dropbtn5-home"><strong>Bike</strong><span>+</span></button>
                <div id="myDropdown5" class="dropdown-content5 home-dropdown-5">

                    <p>A biking helmet is mandatory. You will also receive 2 stickers in
                        your package with your race number on them. The small sticker should go
                        on the front of your helmet. The bigger sticker will wrap around your
                        bike frame. Road or mountain bikes are acceptable. For safety reasons,
                        be sure to have end-caps on the end of your handle-bars.</p>
                </div>
            </div>
            <div class="dropdown6">
                <button onclick="myFunction6()" class="dropbtn6 dropbtn6-home"><strong>Run</strong><span>+</span></button>
                <div id="myDropdown6" class="dropdown-content6 home-dropdown-6">
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

    <section id="fourth-section" class="content">
        <div id="cost-includes">
            <h2>What's Included?</h2>
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

        <div class="register-button register-button-home faq-home">
            <a class="faq-btn" href="../../faq/faq.html.php">FAQs</a>
        </div>
    </section>


        <div id="packet-pickup-home">
            <p><strong>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.
                    Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick
                    up.</strong></p>
        </div>
        </div>

        <div id="footer-home">
        <?php include '../includes/footer.inc.html.php'; ?>
        </div>
</main>
</body>

<script>
    $('.slider').bxSlider({
        autoControls: false,
        auto: true,
        pager: false,
        mode: 'horizontal',
        captions: false,
        speed: 1500,
        responsive: true,
        touchEnabled: true,
        controls: false
    });
</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../scripts/scripts.js"></script>
</html>
