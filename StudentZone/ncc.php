<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "http://iitmjanakpuri.com/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM | NCC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}

        p{
            text-align: justify;
        }
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero-title {
            font-size: 28px;
            font-weight: bold;
        }

        .value-added-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.8;
        }

        .value-added-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
        }


    .committee-list {
        color: #800000;
        list-style-position: inside; /* Optional for list styling */
    }

    .committee-list li {
        display: list-item;
                color: #800000;
    }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <div class="hero-section">
        <h1 class="hero-title">National Cadet Corps</h1>
    </div>

    <div class ="container">
        <div class="row">
            <div class="col-md text-center">
                <div class="container-fluid">
                  <img src="images/ncc_logo.jpg" class="img-responsive" style="width: 300px; height: 250px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h1 class="text-center">6 Delhi Battalion NCC</h1>
                <h2 class="text-center">About NCC</h2>
                <p class="text-justify">
                   The National Cadet Corps (NCC) unit at the Institute of Information Technology and
                   Management (IITM) was established with an initial strength of 23 enthusiastic 
                   cadets. Since its inception, the NCC unit has been committed to instilling discipline, 
                   leadership, and a sense of service among its cadets. The institute takes pride 
                   in nurturing the cadets' all-round development through various activities, 
                   including drills, community service, adventure programs, and personality development initiatives. 
                   Over time, the NCC unit at IITM has grown both in strength and spirit, upholding the values of unity and patriotism that the organization stands for.</p>               
                <h2 class="text-center">AIM</h2>
                <p class="text-justify">
                   The ‘Aims’ of the NCC laid out in 1988 have stood the test of time 
                   and continue to meet the requirements expected of it in the 
                   current socio–economic scenario of the country. The NCC aims at 
                   developing character, comradeship, discipline, a secular outlook, 
                   the spirit of adventure and ideals of selfless service amongst young citizens. 
                   Further, it aims at creating a pool of organized, trained and motivated youth with 
                   leadership qualities in all walks of life, who will serve the Nation regardless 
                   of which career they choose. Needless to say, the NCC also provides an environment 
                   conducive to motivating young Indians to join the armed forces.</p>
                <h2 class="text-center">MOTTO</h2>
                <p class="text-justify">The need for having motto for the Corps was discussed in the 11th Central Advisory Committee (CAC) 
                meeting held on 11 Aug 1978. The mottos suggested were “Duty and Discipline”; “Duty, Unity and Discipline”; 
                “Duty and Unity”; “Unity and Discipline”. The final decision for selection of “Unity and Discipline” 
                as motto for the NCC was taken in the 12th CAC meeting held on 12 Oct 1980.</p>
                <p class="text-center">
                    <img src="images/gautam.jpg" alt="Mr. Gautam Kumar" width="20%" height="20%"/>
                    <h2 class="text-center">Mr. Gautam Kumar</h2>
                    <h3 class="text-center">Assistant Professor</h3>
                    <h3 class="text-center">ANO-NCC</h3>
                </p>
                
               <!-- <h2>camps. In 1980, the word ‘Hindi’ was substituted with ‘Bhartiya’.</h2>
                <p>Come ASIAD (1982), and the NCC got the opportunity to display its potential in the opening ceremony. 
                The Special Organising Committee approved trial recording of the song for recital during the Asian Games Festival. 
                The song was finally recorded in its present form, sometime during Oct 1982, at the Western Outdoor Studio, Delhi 
                with the help of AIR artists, and musicians under overall supervision of Pandit Vijai Raghavan Rao.</p>
                <p>Post ASIAD era in the NCC saw among other events, a well composed musical hit and an inspiring NCC song being 
                played and sung alongwith recorded music; a 16 mm colour film had also been made with 
                title ‘Hum Sab Bhartiya Hain’ of 7½ minutes duration. This film had been telecast twice on 
                national hook up. Other films, ‘Unity and Discipline’; ‘A Cadet’ s Diary, had also used this 
                song prominently. The writer of this song seems to have been lost in oblivion. 
                “No body knows” – said Shri SK Sharma, Joint Director, Armed Forces Film and Photo Division,
                who was actively involved with the production of documentaries on the NCC. “This song was not 
                written for the NCC, as such, writes Shri Mathur, ex-publicity officer, DGNCC, 
                in his notings on the file. But nobody has claimed it so far. Another noting 
                speaks of Sri Virender Sharma as the lyrics writer, and Sri Vijai Raghavan Rao as the music composer.</p> -->
                <p>This NCC song is liked by millions of cadets, both past and present, and is sung on all important occasions of the NCC.
                </p>
                
                <!-- Song Section -->
            <div class="text-center mt-4">
                <h2>Play NCC Song</h2>
    <audio id="nccSong" src="images/ncc-song.mp3" preload="auto" controls></audio>
    <button class="btn btn-primary" onclick="playNCCSong()">Play Song</button>
            </div>
            </div>
        </div>
    </div>
    
    
        <div style="height: 5vh;"></div>
    <?php
       include("../naacfooter.php");
    ?>
<script>
 function playNCCSong() {
        const audio = document.getElementById('nccSong');
        audio.volume = 1.0; // Ensure volume is max
        audio.play().catch((error) => {
            console.error('Error playing audio:', error);
        });

</script>
    <script src="myscript.js"></script>
</body>
</html>