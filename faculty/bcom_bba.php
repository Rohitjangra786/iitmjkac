<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// BBA faculty — edit this array
$bba_faculty = [
    [
        "name" => "Prof. (Dr.) Deepali Saluja",
        "designation" => "Head - BBA Programme",
        "qual" => "B.A., M.A.(Economics), NET, Ph.D.",
        "email" => "deepali.saluja@iitmipu.ac.in",
        "img" => "images/commerce/DrDeepali.jpeg"
    ],
    [
        "name" => "Dr. Mandeep Singh",
        "designation" => "Associate Professor",
        "qual" => "B.Tech, MBA, Ph.D.",
        "email" => "placements@iitmipu.ac.in",
        "img" => "images/commerce/mandeep.jpg"
    ],
    [
        "name" => "Dr. Megha Sharma",
        "designation" => "Associate Professor",
        "qual" => "B.Sc., M.Sc., Ph.D.",
        "email" => "megha_sharma@iitmipu.ac.in",
        "img" => "images/commerce/megha1.png"
    ],
    [
        "name" => "Dr. Raghav Jain",
        "designation" => "Associate Professor",
        "qual" => "B.Com.(H), MBA, NET, Ph.D.",
        "email" => "raghavjain@iitmipu.ac.in",
        "img" => "images/commerce/Vaibhav new.JPG"
    ],
    [
        "name" => "Dr. Bhawna Mukaria",
        "designation" => "Associate Professor",
        "qual" => "Ph.D., M.Com, B.Ed, B.Com, UGC NET",
        "email" => "bhawna.mukaria@iitmipu.ac.in",
        "img" => "images/commerce/DrBhawna.jpg"
    ],
    [
        "name" => "Dr. Madhu Ruhil",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, MBA, NET, Ph.D.",
        "email" => "madhu.ruhil@iitmipu.ac.in",
        "img" => "images/commerce/madhu.jfif"
    ],
    [
        "name" => "Dr. Smriti Ahuja",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, MBA, Ph.D.",
        "email" => "smriti@iitmipu.ac.in",
        "img" => "images/commerce/images.jfif"
    ],
    [
        "name" => "Ms. Shalini Girdhar",
        "designation" => "Assistant Professor",
        "qual" => "MBA, NET, Pursuing Ph.D.",
        "email" => "shalini.girdhar@iitmjanakpuri.com",
        "img" => "images/commerce/shalini.jpg"
    ],
    [
        "name" => "Ms. Ankita Sharma",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, NET, Pursuing Ph.D.",
        "email" => "ankita.sharma@iitmipu.ac.in",
        "img" => "images/commerce/ankita (2).JPG"
    ],
    [
        "name" => "Ms. Naina Sobti",
        "designation" => "Assistant Professor",
        "qual" => "B.Sc., MBA",
        "email" => "naina.sobti@iitmipu.ac.in",
        "img" => "images/commerce/Naina new.JPG"
    ],
    [
        "name" => "Ms. Shabnam Parveen",
        "designation" => "Assistant Professor",
        "qual" => "B.Com., MBA, NET",
        "email" => "shabnam@iitmipu.ac.in",
        "img" => "images/commerce/images.jfif"
    ],
    [
        "name" => "Ms. Sapna Gandhi",
        "designation" => "Assistant Professor",
        "qual" => "BBA, MBA, NET",
        "email" => "sapna.gandhi@iitmipu.ac.in",
        "img" => "images/commerce/Sapna new.JPG"
    ],
    [
        "name" => "Ms. Saguna Khajuria",
        "designation" => "Assistant Professor",
        "qual" => "BE, MBA, NET",
        "email" => "saguna.khajuria@iitmipu.ac.in",
        "img" => "images/commerce/20230825_170303 - Saguna Khajuria.jpg"
    ],
    [
        "name" => "Ms. Nisha",
        "designation" => "Assistant Professor",
        "qual" => "BA, MA, NET",
        "email" => "nisha.gahlot@iitmipu.ac.in",
        "img" => "images/commerce/nisha.png"
    ],
    [
        "name" => "Ms. Kriti Arora",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, MBA",
        "email" => "kriti@iitmipu.ac.in",
        "img" => "images/commerce/images.jfif"
    ],
    [
        "name" => "Ms. Benu Bharara",
        "designation" => "Assistant Professor",
        "qual" => "M.Com, PGDM",
        "email" => "benu@iitmipu.ac.in",
        "img" => "images/commerce/benu.jpg"
    ],
    [
        "name" => "Ms. Ambani Rathore",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, MBA, NET, Pursuing Ph.D.",
        "email" => "ambani.rathaur@iitmipu.ac.in",
        "img" => "images/commerce/ambani.jpg"
    ],
    [
        "name" => "Ms. Shubhangi Manav",
        "designation" => "Assistant Professor",
        "qual" => "B.Com., M.Com., B.Ed., NET",
        "email" => "shubhangi.manav@iitmipu.ac.in",
        "img" => "images/commerce/MsShubhangi.jpg"
    ],
    [
        "name" => "Dr. Anurag Tiruwa",
        "designation" => "Assistant Professor",
        "qual" => "B.Tech., M.B.A., NET, Ph.D.",
        "email" => "anurag.tiruwa@iitmipu.ac.in",
        "img" => "images/commerce/DrAnurag.jpg"
    ],
    [
        "name" => "Dr. Amita Pathania",
        "designation" => "Assistant Professor",
        "qual" => "B.Com(H), M.Com, Ph.D. (Management Studies), UGC-NET + JRF",
        "email" => "amita.pathania@iitmipu.ac.in",
        "img" => "images/commerce/DrAmita.jpg"
    ],
];

// B.Com.(H) faculty — edit this array
$bcom_faculty = [
    [
        "name" => "Prof. (Dr.) Vikas Bharara",
        "designation" => "Professor & Head - Commerce",
        "qual" => "M.Com, M.Phil, UGC-NET, Ph.D.",
        "email" => "hod.commerce@iitmipu.ac.in",
        "img" => "images/commerce/vikass (1).jpg"
    ],
    [
        "name" => "Prof. Dr. Geeta Mahajan",
        "designation" => "Professor",
        "qual" => "B.Com., M.Com., B.Fellow ICA, Ph.D.",
        "email" => "geeta@iitmipu.ac.in",
        "img" => "images/commerce/geeta.jpg"
    ],
    [
        "name" => "Mr. Deepak Aggarwala",
        "designation" => "Professor",
        "qual" => "B.Com, CA",
        "email" => "deepak@iitmipu.ac.in",
        "img" => "images/commerce/images.jfif"
    ],
    [
        "name" => "Dr. Jyoti Bhambhani Jeswani",
        "designation" => "Associate Professor",
        "qual" => "B.Com, M.Com, Ph.D.",
        "email" => "drjyoti@iitmipu.ac.in",
        "img" => "images/commerce/jyoti.jpg"
    ],
    [
        "name" => "Dr. Amit Kumar",
        "designation" => "Assistant Professor",
        "qual" => "BS (Finance), M.Com, NET, CFA, Ph.D.",
        "email" => "amit.kumar@iitmipu.ac.in",
        "img" => "images/commerce/IMG_6039.jpg"
    ],
    [
        "name" => "Mr. Rohit Kumar",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, NET",
        "email" => "rohit.kumar@iitmipu.ac.in",
        "img" => "images/commerce/Rohit new.JPG"
    ],
    [
        "name" => "Ms. Rachna Ailani",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, PGDBA",
        "email" => "rachna@iitmipu.ac.in",
        "img" => "images/commerce/rachna.jpg"
    ],
    [
        "name" => "Ms. Shweta Aneja",
        "designation" => "Assistant Professor",
        "qual" => "B.Com (H), M.Com., NET",
        "email" => "shweta.aneja@iitmipu.ac.in",
        "img" => "images/commerce/shwetaa.jpg"
    ],
    [
        "name" => "Ms. Divya Gupta",
        "designation" => "Assistant Professor",
        "qual" => "B.Com(H), M.Com, NET",
        "email" => "divya.gupta@iitmipu.ac.in",
        "img" => "images/commerce/Ms. Divya Gupta.jpg"
    ],
    [
        "name" => "Ms. Aditi Methi",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, NET",
        "email" => "aditi@iitmipu.ac.in",
        "img" => "images/commerce/aditi.jfif"
    ],
    [
        "name" => "Ms. Komal Goel",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, NET",
        "email" => "komal.goel@iitmipu.ac.in",
        "img" => "images/commerce/Komal Goel new.JPG"
    ],
    [
        "name" => "Ms. Parul Sharma",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com, NET, Pursuing Ph.D.",
        "email" => "parul.sharma@iitmipu.ac.in",
        "img" => "images/commerce/paruls.jpg"
    ],
    [
        "name" => "Ms. Sunakshi Chadha",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com., NET, Pursuing Ph.D.",
        "email" => "sunakshichadha@iitmipu.ac.in",
        "img" => "images/commerce/suna.jpg"
    ],
    [
        "name" => "Ms. Manisha",
        "designation" => "Assistant Professor",
        "qual" => "B.Com, M.Com., NET",
        "email" => "manishakataria@iitmipu.ac.in",
        "img" => "images/commerce/manisha.jpg"
    ],
    [
        "name" => "Ms. Shikha Dabral",
        "designation" => "Assistant Professor",
        "qual" => "M.Com., NET",
        "email" => "shikhadabral@iitmipu.ac.in",
        "img" => "images/commerce/Shikha new.JPG"
    ],
    [
        "name" => "Mr. Puneet Chawla",
        "designation" => "Assistant Professor",
        "qual" => "B.Com. (H), M.Com, C.S. (Inter), NET",
        "email" => "puneet.chawla@iitmipu.ac.in",
        "img" => "images/commerce/puneet - Puneet Chawla.jpeg"
    ],
];

function fac_group($designation) {
    $d = strtolower($designation);
    if (strpos($d, 'head') !== false) return 'hod';
    if (strpos($d, 'professor') !== false && strpos($d, 'associate') === false && strpos($d, 'assistant') === false) return 'prof';
    if (strpos($d, 'associate') !== false) return 'assoc';
    if (strpos($d, 'assistant') !== false) return 'asst';
    return 'other';
}

$total = count($bba_faculty) + count($bcom_faculty);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM | B.Com.(H) & BBA - Faculty</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
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

        .fac-hero {
            background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
            color: #fff;
            padding: 56px 20px 64px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .fac-hero::after { content: ""; position: absolute; inset: 0; background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px); background-size: 22px 22px; opacity: 0.6; pointer-events: none; }
        .fac-hero h1 { font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; margin: 0 0 8px; letter-spacing: 0.3px; position: relative; z-index: 1; }
        .fac-hero .lead { font-size: 1.05rem; opacity: 0.92; margin: 0; position: relative; z-index: 1; }
        .fac-hero .count-badge { display: inline-block; margin-top: 14px; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3); padding: 6px 16px; border-radius: 999px; font-size: 0.9rem; position: relative; z-index: 1; }

        .fac-toolbar { max-width: 1200px; margin: -30px auto 0; background: #fff; border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.07); padding: 18px 20px; position: relative; z-index: 5; }
        .fac-search { position: relative; }
        .fac-search input { width: 100%; border: 1.5px solid #e6e6e6; border-radius: 10px; padding: 12px 14px 12px 44px; font-size: 1rem; transition: border-color .2s, box-shadow .2s; outline: none; background: #fafafa; }
        .fac-search input:focus { border-color: var(--maroon); box-shadow: 0 0 0 4px var(--ring); background: #fff; }
        .fac-search .icon { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--maroon); font-size: 1.1rem; }
        .fac-chip-row { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 14px; align-items: center; }
        .fac-chip-row .label { font-size: 0.78rem; color: var(--muted); font-weight: 600; text-transform: uppercase; letter-spacing: 0.4px; margin-right: 4px; }
        .fac-chip { border: 1.5px solid #e0e0e0; background: #fff; color: var(--ink); border-radius: 999px; padding: 7px 16px; font-size: 0.9rem; cursor: pointer; transition: all .18s ease; font-weight: 500; }
        .fac-chip:hover { border-color: var(--maroon); color: var(--maroon); }
        .fac-chip.active { background: var(--maroon); border-color: var(--maroon); color: #fff; box-shadow: 0 4px 12px rgba(128,0,0,0.25); }
        .fac-chip .count { opacity: 0.75; font-size: 0.8rem; margin-left: 4px; }

        .fac-section { max-width: 1200px; margin: 36px auto 10px; padding: 0 16px; }
        .fac-section-title { display: flex; align-items: center; gap: 14px; margin: 24px 0 18px; }
        .fac-section-title h2 { color: var(--maroon); font-size: 1.4rem; font-weight: 700; margin: 0; letter-spacing: 0.3px; }
        .fac-section-title .line { flex: 1; height: 2px; background: linear-gradient(90deg, var(--maroon) 0%, rgba(128,0,0,0) 100%); border-radius: 2px; }
        .fac-section-title .pill { background: var(--maroon-soft); color: var(--maroon); font-size: 0.78rem; font-weight: 600; padding: 4px 10px; border-radius: 999px; }

        .fac-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }
        @media (max-width: 1100px) { .fac-grid { grid-template-columns: repeat(3, 1fr); } }
        @media (max-width: 800px)  { .fac-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 480px)  { .fac-grid { grid-template-columns: 1fr; } }

        .fac-card { background: var(--card-bg); border-radius: 14px; overflow: hidden; box-shadow: 0 4px 14px rgba(0,0,0,0.06); display: flex; flex-direction: column; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; border: 2px solid rgba(128, 0, 0, 0.35); position: relative; }
        .fac-card:hover { transform: translateY(-6px); box-shadow: 0 16px 32px rgba(128,0,0,0.18); border-color: var(--maroon); }
        .fac-photo { position: relative; height: 70px; background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%); }
        .fac-avatar { position: absolute; left: 50%; top: 22px; transform: translateX(-50%); width: 96px; height: 96px; border-radius: 50%; background: #fff; border: 3px solid #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.15); overflow: hidden; z-index: 2; transition: transform .3s ease; }
        .fac-avatar img { width: 100%; height: 100%; object-fit: cover; object-position: center top; display: block; }
        .fac-card:hover .fac-avatar { transform: translateX(-50%) scale(1.05); }
        .fac-badge { position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.92); color: var(--maroon); font-size: 0.7rem; font-weight: 700; padding: 4px 10px; border-radius: 999px; letter-spacing: 0.3px; text-transform: uppercase; z-index: 3; }
        .fac-body { padding: 62px 16px 18px; display: flex; flex-direction: column; gap: 6px; flex: 1; text-align: center; }
        .fac-name { font-size: 1.02rem; font-weight: 700; color: var(--ink); margin: 0; line-height: 1.3; }
        .fac-desg { font-size: 0.84rem; color: var(--maroon); font-weight: 600; margin: 0; }
        .fac-qual { font-size: 0.82rem; color: var(--muted); line-height: 1.45; margin: 4px 0 0; text-align: center; }
        .fac-email { margin-top: auto; font-size: 0.8rem; color: var(--maroon); text-decoration: none; word-break: break-word; display: inline-flex; align-items: center; justify-content: center; gap: 6px; border-top: 1px dashed #eee; padding-top: 10px; margin-top: 12px; }
        .fac-email:hover { text-decoration: underline; color: var(--maroon-dark); }

        .fac-empty { text-align: center; padding: 40px 20px; color: var(--muted); }
        .fac-empty i { font-size: 2.4rem; color: #c8a5a5; margin-bottom: 10px; }
        .fac-empty p { margin: 6px 0 0; font-size: 1rem; }

        .hidden-section { display: none; }

        @media (max-width: 600px) {
            .fac-hero { padding: 40px 16px 50px; }
            .fac-toolbar { margin: -24px 12px 0; padding: 14px; }
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <section class="fac-hero">
        <h1>BBA &amp; B.Com.(H)</h1>
        <p class="lead">Meet the faculty of our undergraduate management programmes</p>
        <span class="count-badge"><i class="fa fa-users"></i> &nbsp;<?php echo $total; ?> Faculty Members</span>
    </section>

    <div class="fac-toolbar">
        <div class="fac-search">
            <i class="fa fa-search icon"></i>
            <input type="text" id="facSearch" placeholder="Search faculty by name, designation or qualification..." autocomplete="off">
        </div>
        <?php
            $all = array_merge($bba_faculty, $bcom_faculty);
            $groups = ['hod'=>0,'prof'=>0,'assoc'=>0,'asst'=>0];
            foreach ($all as $m) { $g = fac_group($m['designation']); if(isset($groups[$g])) $groups[$g]++; }
        ?>
        <div class="fac-chip-row" id="progChips">
            <span class="label">Programme</span>
            <button class="fac-chip active" data-prog="all">All <span class="count">(<?php echo $total; ?>)</span></button>
            <button class="fac-chip" data-prog="bba">BBA <span class="count">(<?php echo count($bba_faculty); ?>)</span></button>
            <button class="fac-chip" data-prog="bcom">B.Com.(H) <span class="count">(<?php echo count($bcom_faculty); ?>)</span></button>
        </div>
        <div class="fac-chip-row" id="facChips">
            <span class="label">Designation</span>
            <button class="fac-chip active" data-filter="all">All <span class="count">(<?php echo $total; ?>)</span></button>
            <?php if ($groups['hod'] > 0): ?><button class="fac-chip" data-filter="hod">Head <span class="count">(<?php echo $groups['hod']; ?>)</span></button><?php endif; ?>
            <?php if ($groups['prof'] > 0): ?><button class="fac-chip" data-filter="prof">Professor <span class="count">(<?php echo $groups['prof']; ?>)</span></button><?php endif; ?>
            <?php if ($groups['assoc'] > 0): ?><button class="fac-chip" data-filter="assoc">Associate Professor <span class="count">(<?php echo $groups['assoc']; ?>)</span></button><?php endif; ?>
            <?php if ($groups['asst'] > 0): ?><button class="fac-chip" data-filter="asst">Assistant Professor <span class="count">(<?php echo $groups['asst']; ?>)</span></button><?php endif; ?>
        </div>
    </div>

    <?php
    function render_section($title, $list, $prog) {
        echo '<div class="fac-section" data-section="'.$prog.'">';
        echo '  <div class="fac-section-title"><h2>'.$title.'</h2><span class="pill">'.count($list).' Faculty</span><span class="line"></span></div>';
        echo '  <div class="fac-grid">';
        foreach ($list as $m) {
            $group = fac_group($m['designation']);
            $badge = '';
            if ($group === 'hod') $badge = 'Head';
            elseif ($group === 'prof') $badge = 'Professor';
            elseif ($group === 'assoc') $badge = 'Assoc. Professor';
            elseif ($group === 'asst') $badge = 'Asst. Professor';
            $haystack = strtolower($m['name'].' '.$m['designation'].' '.$m['qual']);
            $img = htmlspecialchars($m['img'], ENT_QUOTES);
            $name = htmlspecialchars($m['name'], ENT_QUOTES);
            $email = htmlspecialchars($m['email'] ?? '', ENT_QUOTES);
            ?>
            <article class="fac-card" data-prog="<?php echo $prog; ?>" data-group="<?php echo $group; ?>" data-search="<?php echo htmlspecialchars($haystack, ENT_QUOTES); ?>">
                <div class="fac-photo">
                    <?php if ($badge): ?><span class="fac-badge"><?php echo $badge; ?></span><?php endif; ?>
                </div>
                <div class="fac-avatar">
                    <img src="<?php echo $img; ?>" alt="<?php echo $name; ?>" loading="lazy"
                         onerror="this.src='images/commerce/avatar-placeholder.png'; this.onerror=null;">
                </div>
                <div class="fac-body">
                    <h3 class="fac-name"><?php echo htmlspecialchars($m['name']); ?></h3>
                    <p class="fac-desg"><?php echo htmlspecialchars($m['designation']); ?></p>
                    <p class="fac-qual"><?php echo htmlspecialchars($m['qual']); ?></p>
                    <?php if (!empty($m['email'])): ?>
                    <a class="fac-email" href="mailto:<?php echo $email; ?>">
                        <i class="fa fa-envelope"></i><?php echo htmlspecialchars($m['email']); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </article>
            <?php
        }
        echo '  </div>';
        echo '</div>';
    }
    render_section('BBA', $bba_faculty, 'bba');
    render_section('B.Com.(H)', $bcom_faculty, 'bcom');
    ?>

    <div class="fac-empty" id="facEmpty" style="display:none;">
        <i class="fa fa-search"></i>
        <p>No faculty match your search.</p>
    </div>

    <div style="height: 40px"></div>
    <?php include("../naacfooter.php"); ?>

    <script>
        (function(){
            const search = document.getElementById('facSearch');
            const progChips = document.getElementById('progChips');
            const desgChips = document.getElementById('facChips');
            const empty = document.getElementById('facEmpty');
            const cards = document.querySelectorAll('.fac-card');
            const sections = document.querySelectorAll('.fac-section');
            let prog = 'all';
            let group = 'all';
            let query = '';

            function applyFilter(){
                let visiblePerSection = {};
                cards.forEach(card => {
                    const matchProg  = (prog === 'all') || (card.dataset.prog === prog);
                    const matchGroup = (group === 'all') || (card.dataset.group === group);
                    const matchQuery = !query || card.dataset.search.indexOf(query) !== -1;
                    const show = matchProg && matchGroup && matchQuery;
                    card.style.display = show ? '' : 'none';
                    if (show) visiblePerSection[card.dataset.prog] = (visiblePerSection[card.dataset.prog] || 0) + 1;
                });
                let total = 0;
                sections.forEach(sec => {
                    const v = visiblePerSection[sec.dataset.section] || 0;
                    sec.style.display = (v > 0) ? '' : 'none';
                    total += v;
                });
                empty.style.display = (total === 0) ? 'block' : 'none';
            }

            progChips.addEventListener('click', e => {
                const btn = e.target.closest('.fac-chip');
                if (!btn) return;
                progChips.querySelectorAll('.fac-chip').forEach(c => c.classList.remove('active'));
                btn.classList.add('active');
                prog = btn.dataset.prog;
                applyFilter();
            });
            desgChips.addEventListener('click', e => {
                const btn = e.target.closest('.fac-chip');
                if (!btn) return;
                desgChips.querySelectorAll('.fac-chip').forEach(c => c.classList.remove('active'));
                btn.classList.add('active');
                group = btn.dataset.filter;
                applyFilter();
            });
            search.addEventListener('input', () => {
                query = search.value.trim().toLowerCase();
                applyFilter();
            });
        })();
    </script>
</body>
</html>
