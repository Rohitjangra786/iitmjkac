<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

/* ============================================================
   NCC page — fully data-driven. To change content edit the
   arrays below; the markup loops over them.
   ============================================================ */

$ncc_meta = [
    'battalion'     => '6 Delhi Battalion NCC',
    'unit'          => 'IITM Janakpuri Unit',
    'motto'         => 'Unity and Discipline',
    'established'   => 'Initial strength: 27 cadets',
];

$ncc_stats = [
    ['icon' => 'fa-shield-alt',  'value' => '6 Delhi',       'label' => 'NCC Battalion'],
    ['icon' => 'fa-users',       'value' => '27+',            'label' => 'Founding Cadets'],
    ['icon' => 'fa-flag',        'value' => 'Unity &amp; Discipline', 'label' => 'NCC Motto'],
    ['icon' => 'fa-star',        'value' => 'SD/SW',          'label' => 'Senior Division'],
];

$ncc_aims = [
    ['icon' => 'fa-medal',          'title' => 'Character',          'text' => 'Building strong moral character and integrity in young cadets.'],
    ['icon' => 'fa-handshake',      'title' => 'Comradeship',        'text' => 'Fostering bonds of friendship, teamwork and brotherhood.'],
    ['icon' => 'fa-user-shield',    'title' => 'Discipline',         'text' => 'Instilling self-discipline, punctuality and responsibility.'],
    ['icon' => 'fa-globe-asia',     'title' => 'Secular Outlook',    'text' => 'Promoting a secular, inclusive and nation-first worldview.'],
    ['icon' => 'fa-mountain',       'title' => 'Spirit of Adventure','text' => 'Encouraging courage and the pursuit of challenging experiences.'],
    ['icon' => 'fa-hands-helping',  'title' => 'Selfless Service',   'text' => 'Cultivating ideals of service to community and nation.'],
];

$ncc_activities = [
    ['icon' => 'fa-running',     'title' => 'Drills &amp; Parades',       'text' => 'Regular drill practice, ceremonial parades and republic day contingent training.'],
    ['icon' => 'fa-campground',  'title' => 'Annual Training Camps',  'text' => 'CATC, EBSB, TSC and other training camps across India for cadets.'],
    ['icon' => 'fa-hands',       'title' => 'Community Service',      'text' => 'Swachh Bharat, blood donation, tree plantation and social outreach drives.'],
    ['icon' => 'fa-mountain',    'title' => 'Adventure Activities',   'text' => 'Trekking, rock climbing, rappelling and obstacle training expeditions.'],
    ['icon' => 'fa-heartbeat',   'title' => 'Personality Development','text' => 'Workshops on leadership, communication and overall personality grooming.'],
    ['icon' => 'fa-award',       'title' => 'Certificate Exams',      'text' => 'B &amp; C Certificate exams that open pathways to armed forces and govt. jobs.'],
];

$ano_profile = [
    'name'      => 'Lt. Gautam Kumar',
    'photo'     => 'images/gautam.jpg',
    'role'      => 'Associate NCC Officer (ANO)',
    'sub'       => 'Assistant Professor &middot; IITM Janakpuri',
    'highlights'=> [
        'Commissioned Officer, NCC',
        'OTA Kamptee trained',
        'Mentor &mdash; 1 Delhi Battalion NCC, IITM Janakpuri Unit',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCC Activities & Programs | IITM Janakpuri </title>
    <meta name="description" content="Discover NCC activities at IITM Janakpuri that promote leadership, discipline, teamwork, community service, and personality development.">
   
    <link rel="canonical" href="https://iitmjanakpuri.com/StudentZone/ncc.php">
    <meta name="theme-color" content="#800000">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="IITM Janakpuri">
    <meta property="og:title" content="National Cadet Corps (NCC) — IITM Janakpuri">
    <meta property="og:description" content="6 Delhi Battalion NCC unit at IITM Janakpuri. Discipline, leadership, character and selfless service training.">
    <meta property="og:image" content="https://iitmjanakpuri.com/StudentZone/images/ncc_logo.jpg">
    <meta property="og:url" content="https://iitmjanakpuri.com/StudentZone/ncc.php">

    <link rel="icon" type="image/png" href="../upload_new/gallery/logom.png" sizes="16x16">

    <!-- Bootstrap 5 + Fonts + Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    .ncc-page{
        font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        color: #2b2b2b;
        background: #fafafa;
    }
    .ncc-page h1, .ncc-page h2, .ncc-page h3, .ncc-page h4{
        font-family: 'Poppins', system-ui, sans-serif;
        color: #1a1a1a;
        letter-spacing: -0.01em;
    }
    .ncc-page a{ color: #800000; }
    .ncc-page p{ line-height: 1.7; }

    /* Hide any inherited legacy nav band */
    .ncc-page .navigation{ display: none !important; }

    /* ===== Hero ===== */
    .ncc-hero{
        position: relative;
        background: linear-gradient(135deg, #800000 0%, #5e0000 55%, #3d0000 100%);
        color: #fff;
        padding: 42px 0 46px;
        overflow: hidden;
    }
    .ncc-hero::before{
        content:"";
        position: absolute; inset: 0;
        background: radial-gradient(circle at 85% 15%, rgba(255,255,255,.10), transparent 55%);
        pointer-events: none;
    }
    .ncc-hero .container{ position: relative; }
    .hero-eyebrow{
        display: inline-block;
        background: rgba(255,255,255,.14);
        border: 1px solid rgba(255,255,255,.28);
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 12.5px;
        letter-spacing: .6px;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 14px;
    }
    .ncc-hero h1{
        font-size: clamp(24px, 3.4vw, 38px);
        font-weight: 800;
        color: #fff !important;
        margin: 0 0 10px;
        line-height: 1.15;
    }
    .ncc-hero .lede{
        font-size: clamp(14px, 1.5vw, 16px);
        opacity: .92;
        max-width: 680px;
        margin: 0 0 16px;
    }
    .hero-stats{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 16px;
    }
    @media (min-width: 768px){
        .hero-stats{ grid-template-columns: repeat(4, 1fr); }
    }
    .hero-stat{
        background: rgba(255,255,255,.10);
        border: 1px solid rgba(255,255,255,.22);
        border-radius: 10px;
        padding: 10px 8px;
        text-align: center;
        backdrop-filter: blur(4px);
    }
    .hero-stat .i{ font-size: 15px; color: #ffd8a8; margin-bottom: 4px; }
    .hero-stat .v{ font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; }
    .hero-stat .l{ font-size: 11.5px; opacity: .85; }

    .hero-logo{
        width: 100%;
        max-width: 200px;
        border-radius: 14px;
        background: #fff;
        padding: 12px;
        box-shadow: 0 14px 32px rgba(0,0,0,.22);
        display: block;
        margin: 0 auto;
    }

    /* ===== Sections ===== */
    .section{ padding: 38px 0; }
    .section-alt{ background: #fff; }
    .section-heading{
        font-size: clamp(20px, 2.2vw, 26px);
        font-weight: 800;
        margin-bottom: 6px;
    }
    .section-sub{
        font-size: 14px;
        color: #5b5b5b;
        margin-bottom: 22px;
        max-width: 760px;
    }
    .accent-bar{
        width: 46px; height: 3px; border-radius: 3px;
        background: #800000; margin: 0 0 14px;
    }

    /* ===== Cards (aims, activities) ===== */
    .feature-card{
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 12px;
        padding: 18px;
        height: 100%;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .feature-card:hover{
        transform: translateY(-3px);
        box-shadow: 0 14px 30px rgba(0,0,0,.08);
        border-color: #f1d6d6;
    }
    .feature-icon{
        width: 38px; height: 38px;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 10px;
        background: rgba(128,0,0,.08);
        color: #800000;
        font-size: 16px;
        margin-bottom: 10px;
    }
    .feature-card h3{ font-size: 15.5px; font-weight: 700; margin-bottom: 4px; }
    .feature-card p{ font-size: 13.5px; color: #4a4a4a; margin: 0; line-height: 1.55; }

    /* ===== Motto band ===== */
    .motto-band{
        background: linear-gradient(135deg, #fff 0%, #fff5f5 100%);
        border: 1px solid #f1d6d6;
        border-left: 5px solid #800000;
        border-radius: 12px;
        padding: 20px;
    }
    .motto-band .label{
        font-family: 'Poppins', sans-serif;
        font-size: 11.5px;
        color: #800000;
        letter-spacing: 1px;
        font-weight: 700;
        text-transform: uppercase;
    }
    .motto-band .quote{
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        font-size: clamp(18px, 2.4vw, 26px);
        color: #1a1a1a;
        margin: 4px 0 8px;
    }
    .motto-band p{ margin: 0; color: #4a4a4a; font-size: 13.5px; }

    /* ===== ANO profile ===== */
    .ano-card{
        background: #fff;
        border: 1px solid #ececec;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 6px 22px rgba(0,0,0,.06);
        max-width: 760px;
        margin: 0 auto;
    }
    .ano-photo{
        width: 100%;
        max-width: 200px;
        height: auto;
        aspect-ratio: 1 / 1.25;
        object-fit: cover;
        object-position: center top;
        display: block;
        margin: 18px auto 0;
        border-radius: 12px;
    }
    @media (min-width: 768px){
        .ano-photo{ margin: 18px 0 18px 18px; }
    }
    .ano-meta{ padding: 18px 20px 20px; }
    .ano-meta .badge-mini{
        display: inline-block;
        background: rgba(128,0,0,.08);
        color: #800000;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 11px;
        letter-spacing: .6px;
        text-transform: uppercase;
        padding: 3px 9px;
        border-radius: 999px;
        margin-bottom: 8px;
    }
    .ano-meta h3{ font-size: 20px; font-weight: 800; margin: 0 0 2px; }
    .ano-meta .role{ font-size: 13.5px; color: #800000; font-weight: 600; margin-bottom: 2px; }
    .ano-meta .sub{ font-size: 13px; color: #6a6a6a; margin-bottom: 10px; }
    .ano-meta ul{ list-style: none; padding: 0; margin: 0; }
    .ano-meta li{
        position: relative;
        padding: 4px 0 4px 22px;
        font-size: 13.5px;
        color: #303030;
    }
    .ano-meta li::before{
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: #800000;
        position: absolute;
        left: 0; top: 7px;
        font-size: 12.5px;
    }

    /* ===== Song player ===== */
    .song-card{
        background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
        color: #fff;
        border-radius: 14px;
        padding: 22px;
        text-align: center;
        box-shadow: 0 14px 28px rgba(128,0,0,.22);
    }
    .song-card h3{
        color: #fff !important;
        font-weight: 800;
        font-size: clamp(18px, 2vw, 22px);
        margin-bottom: 4px;
    }
    .song-card p{ opacity: .9; margin-bottom: 14px; font-size: 13.5px; }
    .song-card audio{ width: 100%; max-width: 420px; margin: 0 auto 12px; display: block; }
    .play-btn{
        display: inline-flex; align-items: center; gap: 8px;
        background: #fff;
        color: #800000 !important;
        border: 0;
        padding: 11px 22px;
        border-radius: 999px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none !important;
        transition: transform .15s ease, box-shadow .2s ease;
        cursor: pointer;
    }
    .play-btn:hover{ transform: translateY(-2px); box-shadow: 0 10px 22px rgba(0,0,0,.25); }

    /* ===== Closing CTA ===== */
    .cta-band{
        background: linear-gradient(135deg, #800000 0%, #5e0000 100%);
        color: #fff;
        border-radius: 14px;
        padding: 22px 20px;
        text-align: center;
    }
    .cta-band h3{ color: #fff !important; font-weight: 800; font-size: clamp(18px, 2.2vw, 24px); margin-bottom: 6px; }
    .cta-band p{ opacity: .92; margin-bottom: 18px; }
    .cta-band .hbtn{ display: inline-flex; align-items: center; gap: 8px; padding: 12px 22px; border-radius: 8px; font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 14px; text-decoration: none !important; }
    .cta-band .hbtn.primary{ background: #fff; color: #800000 !important; }
    .cta-band .hbtn.outline{ background: transparent; color: #fff !important; border: 2px solid #fff; }
    .cta-band .hbtn:hover{ transform: translateY(-2px); box-shadow: 0 10px 22px rgba(0,0,0,.25); }
    </style>
</head>
<body class="ncc-page">

<?php include('../naacheader.php'); ?>
<?php include('../n.php'); ?>

<!-- ============ HERO ============ -->
<section class="ncc-hero">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7">
                <span class="hero-eyebrow"><i class="fas fa-shield-alt me-1"></i> National Cadet Corps</span>
                <h1><?= $ncc_meta['battalion'] ?></h1>
                <p class="lede">The NCC unit at IITM Janakpuri shapes future leaders through discipline, character, comradeship and selfless service to the nation.</p>
                <div class="hero-stats">
                    <?php foreach ($ncc_stats as $s): ?>
                    <div class="hero-stat">
                        <div class="i"><i class="fas <?= $s['icon'] ?>"></i></div>
                        <div class="v"><?= $s['value'] ?></div>
                        <div class="l"><?= $s['label'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="images/ncc_logo.jpg" alt="NCC Logo" class="hero-logo" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ============ ABOUT ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7">
                <div class="accent-bar"></div>
                <h2 class="section-heading">About NCC at IITM</h2>
                <p>The National Cadet Corps (NCC) unit at the Institute of Information Technology and Management (IITM) was established with an initial strength of <strong>27 enthusiastic cadets</strong>. Since its inception, the NCC unit has been committed to instilling discipline, leadership, and a sense of service among its cadets.</p>
                <p>The institute takes pride in nurturing cadets' all-round development through drills, community service, adventure programs, and personality development initiatives. Over time, the IITM NCC unit has grown both in strength and spirit, upholding the values of unity and patriotism that the organization stands for.</p>
            </div>
            <div class="col-lg-5">
                <div class="motto-band">
                    <div class="label">NCC Motto</div>
                    <div class="quote">&ldquo;<?= $ncc_meta['motto'] ?>&rdquo;</div>
                    <p>The need for a motto was discussed in the 11th Central Advisory Committee meeting (11 Aug 1978). The final decision &mdash; <em>Unity and Discipline</em> &mdash; was taken in the 12th CAC meeting on 12 Oct 1980.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ AIMS ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Aim of the NCC</h2>
        <p class="section-sub">The Aims of the NCC laid out in 1988 have stood the test of time &mdash; developing character, comradeship, discipline, a secular outlook, the spirit of adventure and ideals of selfless service amongst young citizens.</p>
        <div class="row g-4">
            <?php foreach ($ncc_aims as $a): ?>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas <?= $a['icon'] ?>"></i></div>
                    <h3><?= $a['title'] ?></h3>
                    <p><?= $a['text'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ ANO PROFILE ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Associate NCC Officer (ANO)</h2>
        <p class="section-sub">Our cadets train under the guidance of a commissioned NCC officer who leads the unit's drills, camps and certificate-exam preparation.</p>

        <div class="ano-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $ano_profile['photo'] ?>" alt="<?= $ano_profile['name'] ?>" class="ano-photo" loading="lazy">
                </div>
                <div class="col-md-8">
                    <div class="ano-meta">
                        <span class="badge-mini"><i class="fas fa-star me-1"></i> ANO &middot; NCC</span>
                        <h3><?= $ano_profile['name'] ?></h3>
                        <div class="role"><?= $ano_profile['role'] ?></div>
                        <div class="sub"><?= $ano_profile['sub'] ?></div>
                        <ul>
                            <?php foreach ($ano_profile['highlights'] as $h): ?>
                            <li><?= $h ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ ACTIVITIES ============ -->
<section class="section">
    <div class="container">
        <div class="accent-bar"></div>
        <h2 class="section-heading">Training &amp; Activities</h2>
        <p class="section-sub">From drills and adventure camps to community service and certificate exams &mdash; cadets engage in a year-round programme of development.</p>
        <div class="row g-4">
            <?php foreach ($ncc_activities as $act): ?>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas <?= $act['icon'] ?>"></i></div>
                    <h3><?= $act['title'] ?></h3>
                    <p><?= $act['text'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ NCC SONG ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="song-card">
                    <h3><i class="fas fa-music me-2"></i> The NCC Song</h3>
                    <p>Loved by millions of cadets, past and present &mdash; sung on every important NCC occasion.</p>
                    <audio id="nccSong" src="images/ncc-song.mp3" preload="auto" controls></audio>
                    <button class="play-btn" type="button" onclick="playNCCSong()">
                        <i class="fas fa-play"></i> Play Song
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="section">
    <div class="container">
        <div class="cta-band">
            <h3>Join the NCC at IITM Janakpuri</h3>
            <p>Build leadership, discipline and a lifelong network of cadets &mdash; with pathways to defence services and government careers.</p>
            <a class="hbtn primary" href="../index.php"><i class="fas fa-home"></i> Back to Home</a>
            <a class="hbtn outline" href="studentzone.php"><i class="fas fa-users"></i> Student Zone</a>
        </div>
    </div>
</section>

<?php include("../naacfooter.php"); ?>

<script>
function playNCCSong() {
    var audio = document.getElementById('nccSong');
    if (!audio) return;
    audio.volume = 1.0;
    audio.play().catch(function (error) {
        console.error('Error playing audio:', error);
    });
}
</script>

</body>
</html>
