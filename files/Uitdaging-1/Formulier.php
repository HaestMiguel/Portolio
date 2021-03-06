<!-- Variables maken in php -->
<?php 
$naam = $_POST["naam"];
$email = $_POST["email"];
$onderwerp = $_POST["onderwerp"];
$code = $_POST["veiligheidscode"];
$bericht = $_POST["bericht"];
$gsm = $_POST["gsm"];
?>
<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welkom op de website van Nimodesign.">
    <meta name="author" content="Miguel Haest & Noushi Mollen">

    <title>NIMODESIGN | Contact</title>


    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Arimo|Merriweather+Sans&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
    <link rel="manifest" href="Favicon/site.webmanifest">
    <link rel="mask-icon" href="Favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#000000">
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navPHP">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
                    width="150" height="65" viewBox="0 0 200 167">
                    <defs>
                        <style>
                        .cls-1,
                        .cls-2,
                        .cls-3 {
                            fill: none;
                            stroke: #0c7ccb;
                        }

                        .cls-1 {
                            stroke-width: 5px;
                        }

                        .cls-1,
                        .cls-2,
                        .cls-4 {
                            fill-rule: evenodd;
                        }

                        .cls-2,
                        .cls-3 {
                            stroke-width: 3px;
                        }

                        .cls-4 {
                            fill: #0c7ccb;
                        }
                        </style>
                    </defs>
                    <path class="cls-1" d="M18,49s47.435,52,85,52c36.417,0,71-29,71-29" />
                    <path id="Shape_1_copy" data-name="Shape 1 copy" class="cls-1"
                        d="M22,97s47.435-52,85-52c36.417,0,71,29,71,29" />
                    <path class="cls-2"
                        d="M31.178,97.372s38.166,25.3,75.482,25.584c35.174,0.267,80.13-34.518,80.735-34.32" />
                    <circle class="cls-3" cx="145" cy="67" r="3" />
                    <path id="NIMODESIGN" class="cls-4"
                        d="M38.737,99.6q0.99,0.687,1.988,1.35L45,94.5q0.539-.932,1.08-1.862,0.062,1.259.151,2.523,0.74,5.164,1.969,10.376,1.034,0.582,2.074,1.138l5.813-10.939q-0.92-.492-1.834-1.006l-3.873,6.945q-0.441.938-.88,1.876-0.155-1.14-.288-2.279-1.091-5.348-1.66-10.644-0.886-.589-1.765-1.2Zm15.586,9.134q1.149,0.558,2.3,1.088l5.13-11.278q-1.031-.473-2.057-0.971Zm5.8,2.632q1.115,0.463,2.235.9,1.833-3.417,3.609-6.86,0.725-1.506,1.442-3.014-0.065,1.758-.094,3.522,0.264,4.269.773,8.565c0.419,0.139.838,0.277,1.258,0.411q2.856-3.193,5.493-6.511,0.959-1.461,1.888-2.937-0.3,1.649-.6,3.3-0.553,3.843-1.039,7.7,1.183,0.311,2.37.6,0.482-6.26,1.173-12.483-1.41-.364-2.815-0.773-2.25,3.032-4.669,5.976-0.772,1.134-1.562,2.259,0-1.383.023-2.763-0.289-3.828-.39-7.634-1.463-.535-2.917-1.119Q63.3,105.977,60.126,111.37Zm27.006,7.686c4.195,0.562,7.511-1.34,7.929-5.441,0.383-3.835-1.946-6.474-5.753-7.03-3.641-.531-7.026.859-8.041,4.875C80.342,115.089,82.583,118.439,87.132,119.056Zm0.282-1.366a4.512,4.512,0,0,1-3.909-5.653c0.671-3.33,3.07-4.453,5.531-4.093,2.795,0.407,4.009,2.774,3.748,5.365-0.329,3.253-2.431,4.817-5.371,4.381h0Zm10.262,2.319c0.3,0.017.605,0.032,0.908,0.047,1.164,0.059,2.794.222,3.874,0.251,4.953,0.132,7.863-2.625,7.6-6.828-0.227-3.781-2.546-5.783-7.164-5.82-1.207-.013-2.5.075-3.432,0.032q-0.534-.024-1.068-0.054l-0.72,12.372h0Zm2.444-1.258,0.363-9.707a13.594,13.594,0,0,1,1.894-.081c3.434,0.049,5.234,1.217,5.366,4.887,0.129,3.552-1.933,5.1-4.894,5.118a15.241,15.241,0,0,1-2.729-.217h0Zm13.231,1.064q5.024-.405,9.982-1.243-0.117-.7-0.235-1.405-3.743.633-7.529,1.016-0.21-2.118-.419-4.236,2.4-.243,4.792-0.592-0.1-.692-0.2-1.385-2.356.344-4.73,0.584l-0.384-3.888q3.118-.316,6.207-0.817-0.109-.69-0.221-1.382-4.086.662-8.228,1,0.481,6.176.964,12.351h0Zm11.983-2.186a11.422,11.422,0,0,0,4.557-.225c3.087-.706,4.929-2.357,4.306-4.561-0.524-1.862-2.976-2.24-5.054-2.6-2.324-.4-3.21-0.675-3.454-1.859-0.211-1.044,1.065-1.765,2.4-2.081a6.141,6.141,0,0,1,3.058-.094q0.027-.749.047-1.5a7.8,7.8,0,0,0-3.4.2c-2.256.538-4.505,1.777-4.087,4.115,0.318,1.763,2.412,2.582,4.436,2.893,2.286,0.354,3.631.524,3.933,1.71s-0.7,1.962-2.655,2.406a8.948,8.948,0,0,1-3.817.027q-0.13.784-.269,1.568h0Zm12.537-2.481q1.143-.348,2.278-0.719l-3.843-11.773q-1.014.331-2.033,0.642Q136.072,109.223,137.871,115.148Zm3.274-7.535c1.168,3.369,4.632,5.047,9.046,3.158,3-1.308,3.728-2.637,4.541-3.07q-1.192-2.436-2.386-4.874-2.214,1.079-4.472,2.058l0.519,1.194q1.308-.51,2.6-1.052l1.295,2.781a7.954,7.954,0,0,1-2.678,1.706c-3.1,1.328-5.376-.233-6.379-2.907-1.051-2.806.066-5.1,2.376-6.089a10.28,10.28,0,0,1,4.045-1.064q-0.308-.755-0.617-1.509a20.22,20.22,0,0,0-3.867,1.221c-3.37,1.458-5.421,4.432-4.026,8.448h0Zm16.844-.7q0.961-.5,1.914-1.023l-3.732-6.79q-0.568-.913-1.136-1.827,1.082,0.564,2.182,1.108,4.645,1.9,9.6,3.413,0.926-.592,1.84-1.2l-6.906-10.286q-0.809.54-1.626,1.063,2.154,3.342,4.307,6.685,0.617,0.833,1.234,1.665-1.037-.427-2.06-0.871-5-1.694-9.673-3.808-0.846.462-1.7,0.909l5.76,10.965h0Z" />
                </svg></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#services">Wat doen wij?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#portfolio">Realisaties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#team">Over ons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#contactformulier">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Contact -->
    <!-- PHP CODE -->
    <?php
if ($code != 123){
    echo "Er is een fout opgetreden";
}
?>
    <section class="page-section" id="contactformulier">
        <div class="container contact">
            <div class="row">
                <div class="col-lg-12 text-center contacttitel">
                    <h2 class="section-heading text-uppercase">Uw bericht</h2>
                </div>
            </div>


            <div class="row">
                <div class="contactborder">


                    <?php
                        echo "<p> Naam: ". $naam . "</p>";
                        echo "<p> Email: ". $email . "</p>";
                        echo "<p> Onderwerp: ". $onderwerp . "</p>";
                        if ($gsm != null){
                            echo "<p> GSM-nummer: ". $gsm . "</p>";
                        }
                    ?>
                    <p>Bericht:</p>
                    <?php 
                        echo "<p>". $bericht . "</p>";
                    ?>
                    <p>Om terug naar de homepage te gaan  <a href="index.html">klik hier</a> of klik op het logo in de navigatiebalk.</p>

                </div>
            </div>


        </div>

    </section>
    <!-- Footer -->
    <footer class="footerphp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 footer-item">
                    <span class="copyright">Copyright &copy; Nimodesign 2020</span>
                </div>
                <div class="col-md-4 footer-item">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/Nimodesign-102763114715876/?modal=admin_todo_tour">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4 footer-item">
                    <ul class="list-inline quicklinks php">
                        <li class="list-inline-item">
                            <a class="js-scroll-trigger" href="index.html#team">Over ons</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="js-scroll-trigger" href="index.html#portfolio">Realisaties</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="js/agency.min.js"></script>

</body>

</html>