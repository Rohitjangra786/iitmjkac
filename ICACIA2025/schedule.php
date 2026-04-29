<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITM | Conference</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #0078D7;
            font-family: Georgia, serif;
        }
        .navbar .nav-link {
            color: white;
        }
        .navbar .nav-link:hover {
            color: cyan;
        }
        .navbar .nav-link.active {
            color: white;
            background-color: rgba(0, 120, 215, 0.2);
            text-shadow: 0 0 5px lightblue;
        }
        .navbar-nav {
            margin: 0 auto;
        }
        
        .carousel-caption {
            top: 20px;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            width: 80%;
            height: 20%;
            margin-top: 20px;
        }
        .carousel-caption h1 {
            font-size: 2rem;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
        li{
            text-align: justify;
        }
          .nav-tabs {
            border-bottom: none;
        }
        .tab-container {
            background: #0067a7;
            padding: 20px;
        }
        .nav-tabs .nav-link {
            color: white;
            border: none;
        }
        .nav-tabs .nav-link.active {
            background-color: #4590bf;
            color: white;
        }
        .tab-content {
            background-color: #4590bf;
            padding: 20px;
            color: white;
            border-radius: 0 0 10px 10px;
            margin: 0 auto;
            width: 80%;
        }
        
        .coming-soon-section {
        height: 50vh;
        background: linear-gradient(135deg, #0078D7, #4590bf);
        padding: 50px 20px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    }
    .coming-soon-section h2 {
        font-size: 2.5rem;
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
    }
    .coming-soon-section p {
        font-size: 1.2rem;
    }
    .countdown-timer {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }
    .time-box {
        background: rgba(255, 255, 255, 0.2);
        padding: 15px;
        border-radius: 10px;
        width: 80px;
        text-align: center;
        font-size: 1.5rem;
        box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.3);
    }
    .time-box span {
        display: block;
        font-size: 2rem;
        font-weight: bold;
    }
    .time-box small {
        font-size: 0.9rem;
        opacity: 0.8;
    }
    </style>
</head>
<body>


<?php
  include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>
<div class="coming-soon-section text-center text-white d-flex align-items-center justify-content-center flex-column">
    <h2>Exciting Updates Coming Soon!</h2>
    <p class="lead">Stay tuned for something amazing. We’re launching soon!</p>
    <div id="countdown" class="countdown-timer d-flex justify-content-center">
        <div class="time-box"><span id="days"></span><small>Days</small></div>
        <div class="time-box"><span id="hours"></span><small>Hours</small></div>
        <div class="time-box"><span id="minutes"></span><small>Minutes</small></div>
        <div class="time-box"><span id="seconds"></span><small>Seconds</small></div>
    </div>
</div>


<script>
    function updateCountdown() {
        const launchDate = new Date("July 1, 2025 00:00:00").getTime();
        const now = new Date().getTime();
        const timeLeft = launchDate - now;

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").innerText = days;
        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

        if (timeLeft < 0) {
            document.getElementById("countdown").innerHTML = "<h3>We Are Live Now!</h3>";
        }
    }

    setInterval(updateCountdown, 1000);
</script>



<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
