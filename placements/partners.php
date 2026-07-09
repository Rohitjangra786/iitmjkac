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
    <title>Placement Partners | IITM Janakpuri</title>
    <meta name="description" content="Explore placement partners at IITM Janakpuri connecting students with internships, industry exposure, recruitment opportunities, and career growth.">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #800000;
            --maroon-dark: #5a0000;
            --maroon-soft: #f7eaea;
            --ink: #1f1f1f;
            --muted: #6b6b6b;
            --card-bg: #ffffff;
            --page-bg: #f5f5f7;
            --ring: rgba(128, 0, 0, 0.15);
        }
        html, body { background: var(--page-bg); font-family: 'Roboto', Georgia, sans-serif; color: var(--ink); }
        body { margin: 0; padding: 0; }
        h1, h2, h3 { font-family: 'Roboto', sans-serif; }

        /* Hero */
        .pl-hero {
            background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
            color: #fff;
            padding: 56px 20px 70px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .pl-hero::after {
            content: ""; position: absolute; inset: 0;
            background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 22px 22px; opacity: 0.6; pointer-events: none;
        }
        .pl-hero h1 {
            font-size: clamp(1.8rem, 3vw, 2.6rem);
            font-weight: 700; margin: 0 0 8px;
            letter-spacing: 0.3px; position: relative; z-index: 1;
        }
        .pl-hero .lead { font-size: 1.05rem; opacity: 0.92; margin: 0; position: relative; z-index: 1; }

        /* Subnav */
        .pl-subnav {
            max-width: 1200px; margin: 24px auto 0; padding: 0 16px;
            display: flex; flex-wrap: wrap; gap: 8px; justify-content: center;
        }
        .pl-subnav a {
            background: #fff; color: var(--ink);
            border: 1.5px solid #e0e0e0; border-radius: 999px;
            padding: 7px 16px; font-size: 0.88rem; font-weight: 500;
            text-decoration: none; transition: all .18s ease;
        }
        .pl-subnav a:hover { border-color: var(--maroon); color: var(--maroon); }
        .pl-subnav a.current { background: var(--maroon); color: #fff; border-color: var(--maroon); }

        /* Content Grid */
        .pl-wrap { max-width: 1200px; margin: 24px auto 60px; padding: 0 16px; }
        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }
        .partner-card {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 12px;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
            transition: all 0.25s ease;
        }
        .partner-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(128,0,0,0.08);
            border-color: var(--maroon);
        }
        .partner-card img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(10%) contrast(90%);
            transition: filter 0.25s ease;
        }
        .partner-card:hover img {
            filter: none;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <section class="pl-hero">
        <h1>Placement Partners</h1>
        <p class="lead">Connecting our students with top-tier global brands and industry leaders</p>
    </section>

    <nav class="pl-subnav" aria-label="Placement sub-navigation">
        <a href="placements.php">IIPC</a>
        <a href="partners.php" class="current">Placement Partners</a>
        <a href="recruiters.php">Recruiters Speak</a>
        <a href="plrecords.php">Placement Records</a>
        <a href="summertraining.php">Summer Training</a>
        <a href="https://www.iitminternware.com/" target="_blank" rel="noopener noreferrer">Internship Cell</a>
    </nav>

    <div class="pl-wrap">
        <div class="partners-grid">
            <?php
            $partners = [
                'pp1.png', 'pp2.png', 'pp3.png', 'pp4.png',
                'pp5.png', 'pp6.png', 'pp7.png', 'pp8.png',
                'pp9.png', 'pp10.png'
            ];
            foreach ($partners as $logo):
            ?>
            <div class="partner-card">
                <img src="../placementpartners/<?php echo $logo; ?>" alt="Placement Partner Logo" class="img-fluid">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

</body>
</html>