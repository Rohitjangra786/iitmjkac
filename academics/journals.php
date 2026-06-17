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

// Pull latest journal issue + counts from the journal subsite so this page stays fresh.
$jrnDataFile = __DIR__ . "/../iitmjournal/data/articles.json";
$jrnLatest = null;
$jrnIssues = 0;
$jrnArticles = 0;
if (file_exists($jrnDataFile)) {
    $jrnAll = json_decode(file_get_contents($jrnDataFile), true) ?: [];
    $jrnIssues = count($jrnAll);
    foreach ($jrnAll as $iss) { $jrnArticles += count($iss["articles"] ?? []); }
    if ($jrnIssues > 0) { $jrnLatest = $jrnAll[0]; }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Research Journals & Publications | IITM Janakpuri </title>
    <meta name="description" content="Explore research journals and academic publications at IITM Janakpuri promoting innovation, knowledge sharing, and scholarly excellence.">

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

    /* Journal info enhancements */
    .jrn-section { margin: 24px 0 18px; }
    .jrn-section-title {
        font-size: 18px;
        color: #800000;
        font-weight: 700;
        margin: 0 0 12px;
        padding-bottom: 6px;
        border-bottom: 2px solid #800000;
    }

    .jrn-glance {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 10px;
    }
    .jrn-fact {
        background: #fff;
        border: 1px solid #e2c9c9;
        border-left: 4px solid #800000;
        border-radius: 6px;
        padding: 10px 12px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.04);
    }
    .jrn-fact .lbl {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        color: #888;
        margin-bottom: 3px;
    }
    .jrn-fact .val {
        font-size: 15px;
        font-weight: 600;
        color: #333;
    }

    .jrn-latest {
        background: linear-gradient(135deg, #800000 0%, #5a0000 100%);
        color: #fff;
        border-radius: 8px;
        padding: 16px 18px;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
    }
    .jrn-latest .ll-lbl {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.85;
    }
    .jrn-latest .ll-issue {
        font-size: 18px;
        font-weight: 700;
        margin-top: 2px;
    }
    .jrn-latest .ll-period {
        font-size: 13px;
        opacity: 0.92;
    }
    .jrn-latest .ll-meta {
        font-size: 12px;
        opacity: 0.85;
        margin-top: 4px;
    }
    .jrn-latest a.ll-cta {
        background: #fff;
        color: #800000;
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        white-space: nowrap;
    }
    .jrn-latest a.ll-cta:hover { background: #f3e6e6; }

    .jrn-chips { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 8px; }
    .jrn-chip {
        background: #fff;
        border: 1px solid #800000;
        color: #800000;
        padding: 4px 12px;
        border-radius: 14px;
        font-size: 13px;
        font-weight: 500;
    }

    .jrn-board {
        background: #fafafa;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        padding: 12px 16px;
    }
    .jrn-board .row-item {
        padding: 6px 0;
        border-bottom: 1px dashed #ddd;
        font-size: 14px;
    }
    .jrn-board .row-item:last-child { border-bottom: none; }
    .jrn-board .role { color: #800000; font-weight: 600; display: inline-block; min-width: 130px; }
    .jrn-board .more-link {
        display: inline-block;
        margin-top: 8px;
        color: #800000;
        font-weight: 600;
        font-size: 13px;
    }

    .jrn-explore {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 8px;
    }
    .jrn-explore a {
        background: #fff;
        border: 1px solid #800000;
        color: #800000;
        padding: 10px 12px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        text-align: center;
        transition: background 0.15s, color 0.15s;
    }
    .jrn-explore a:hover { background: #800000; color: #fff; }
    .jrn-explore a i { margin-right: 6px; }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>


<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 id="iipc">Journal</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/publications.php" id="pub" role="button">Publications</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/journals.php">Journals</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/unmesh.php">Unmesh</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pragya.php">Pragya</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/publications.php">Jigyasa</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/alumni/alumnimagazine.php">Alumni Magazine</a>
               <a class="dropdown-item" href="https://www.iitmjanakpuri.com/academics/pdf/MBA_CorporateConnect.pdf" target="_blank">Corporate Connect</a>
        </div>
        <div class="col-md-9">
             <!-- Boxes section -->
  <p class="text-justify">
                    The IITM Journal of Management and IT constitutes a bi-annual research publication affiliated with the Institute of Information 
                    Technology and Management (accredited by NAAC & certified by ISO), established and overseen by Mata Leelawati Sikshan Sansthan,
                    New Delhi. This journal operates under a blind peer-review process, aiming to disseminate the experiences, ideas, and case 
                    
                    studies of professionals within the fields of Management and Information Technology, thereby fostering enhanced comprehension 
                    and dissemination of knowledge. The primary focus of the journal lies in empirical, applied research, and reflective analyses 
                    that hold relevance for professionals in the fields of Management and Information Technology, adhering to academic standards and rigor within its purview.
                </p>
                <p class="text-justify">
                     The viewpoints presented within the Journal reflect those of the respective authors. The editor,
                     editorial board, editorial advisory board, and the institute hereby disclaim responsibility and
                     liability for any statements of fact, opinions, and originality of content, as well as any potential
                     violation of copyright by the authors. Reproduction of any part of this publication in any form is strictly
                     prohibited without the prior written consent of the publisher.

                </p>

                <?php if ($jrnLatest): ?>
                <div class="jrn-latest">
                    <div>
                        <div class="ll-lbl">Latest Issue</div>
                        <div class="ll-issue">Volume <?php echo (int)$jrnLatest["vol"]; ?>, Issue <?php echo (int)$jrnLatest["issue"]; ?></div>
                        <div class="ll-period"><?php echo htmlspecialchars($jrnLatest["period"]); ?> <?php echo (int)$jrnLatest["year"]; ?></div>
                        <div class="ll-meta"><?php echo count($jrnLatest["articles"] ?? []); ?> articles &middot; <?php echo $jrnArticles; ?> articles across <?php echo $jrnIssues; ?> issues online</div>
                    </div>
                    <a class="ll-cta" href="https://www.iitmjanakpuri.com/iitmjournal/currentssue.php" target="_blank"><i class="fa fa-book" aria-hidden="true"></i> Read Current Issue</a>
                </div>
                <?php endif; ?>

                <div class="jrn-section">
                    <div class="jrn-section-title">Journal at a Glance</div>
                    <div class="jrn-glance">
                        <div class="jrn-fact"><div class="lbl">ISSN</div><div class="val">0976-8629</div></div>
                        <div class="jrn-fact"><div class="lbl">E-ISSN</div><div class="val">2349-9826</div></div>
                        <div class="jrn-fact"><div class="lbl">Frequency</div><div class="val">Bi-Annual</div></div>
                        <div class="jrn-fact"><div class="lbl">Started</div><div class="val">2009</div></div>
                        <div class="jrn-fact"><div class="lbl">Type</div><div class="val">Peer-Reviewed</div></div>
                        <div class="jrn-fact"><div class="lbl">Indexing</div><div class="val">ICSSR &middot; J-Gate &middot; Google Scholar</div></div>
                    </div>
                </div>

                <div class="jrn-section">
                    <div class="jrn-section-title">Aim &amp; Scope</div>
                    <p class="text-justify" style="margin-bottom: 6px;">
                        IJMIT serves as an interdisciplinary platform for high-quality research and scholarly work
                        across business, technology, commerce, and media studies. Contributions that demonstrate
                        methodological rigor, originality, and societal impact are particularly welcome.
                    </p>
                    <div class="jrn-chips">
                        <span class="jrn-chip">Management</span>
                        <span class="jrn-chip">Computer Science</span>
                        <span class="jrn-chip">Commerce</span>
                        <span class="jrn-chip">Journalism &amp; Media</span>
                    </div>
                </div>

                <div class="jrn-section">
                    <div class="jrn-section-title">Editorial Leadership</div>
                    <div class="jrn-board">
                        <div class="row-item"><span class="role">Patron</span> Shri J.C. Sharma, Chairman</div>
                        <div class="row-item"><span class="role">Editor-in-Chief</span> Prof. (Dr.) Rachita Rana, Director &amp; Professor, IITM Janakpuri</div>
                        <div class="row-item"><span class="role">Editor</span> Dr. Dipti Gulati, Librarian, IITM Janakpuri</div>
                        <a class="more-link" href="https://www.iitmjanakpuri.com/iitmjournal/ineditor.php" target="_blank">View full Editorial Board &rarr;</a>
                    </div>
                </div>

                <div class="jrn-section">
                    <div class="jrn-section-title">Explore the Journal</div>
                    <div class="jrn-explore">
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/currentssue.php" target="_blank"><i class="fa fa-newspaper-o"></i>Current Issue</a>
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/itissue.php" target="_blank"><i class="fa fa-archive"></i>Past Issues</a>
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/aimscope.php" target="_blank"><i class="fa fa-bullseye"></i>Aim &amp; Scope</a>
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/guidlines.php" target="_blank"><i class="fa fa-file-text-o"></i>Author Guidelines</a>
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/ineditor.php" target="_blank"><i class="fa fa-users"></i>Editorial Board</a>
                        <a href="https://www.iitmjanakpuri.com/iitmjournal/publicationethics.php" target="_blank"><i class="fa fa-shield"></i>Publication Ethics</a>
                    </div>
                </div>

                <p class="text-justify">
                    The soft copy can be mailed at :- <i class="fa fa-envelope" aria-hidden="true"></i>journal@iitmipu.ac.in
                
                </p>
                <p class="text-justify">
                    Subscription form download link :- <a href="https://www.iitmjanakpuri.com/iitmjournal/docs/SubscriptionForm.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download Subscriptioin Form</a>

                </p>
                <h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;"><strong>Website Link to IITM Online Journals:-</strong></h2>
                <p class="text-justify">The online version of IITM Journal of Management & IT is also available through <a href="https://journalskart.com/journals/iitm" target="_blank"><i class="fa fa-link" aria-hidden="true">
                    
                </i> https://journalskart.com/journals/iitm</a></p>
               <!-- <h2 class="tgfmlt2 text-justify" style="color: #4b4b4b;"><strong>Advisory Board Members</strong></h2>
                <p class="text-justify">
                <ul class="committee-list" style="margin-left: 2em;">
                	<li style="list-style:disc;">Prof (Dr) Krishna S. Dhir Dean, College of Business and Economics University of Hawaii at Hilo 200 W. Kawili Street Hilo, Hawaii 96720-4091, USA</li>
                	<li style="list-style:disc;">Prof (Dr) Madhu Vij Professor, Faculty of Management Studies University of Delhi</li>
                	<li style="list-style:disc;">Prof (Dr) R. K. Mittal Vice Chancellor, Ch. Bansi Lal University, Bhiwani</li>
                	<li style="list-style:disc;">Prof (Dr) B S Nagi Ex-Director Research Council of Social Development, New Delhi</li>
                	<li style="list-style:disc;">Prof (Dr) V A Eshwar Professor and Managing Director Saai Consultants, New Delhi</li>
                	<li style="list-style:disc;">Prof. (Dr.) P. D. Kaushik Ex. Pro-Vice Chancellor Teerthanker University Moradabad</li>
                	<li style="list-style:disc;">Dr. Anupam Narula, Associate Professor, Marketing FORE School of Management New Delhi</li>
                	<li style="list-style:disc;">Dr. Indu Uprety, Associate Professor, School of Management, Gautam Buddha University, Noida</li>
                	<li style="list-style:disc;">Dr. P.K. Singh Professor Course Director, Master of Banking & Insurance University College of Commerce & Management Studies Mohan Lal Sukhadia University, Udaipur</li>
                	<li style="list-style:disc;">Prof. Som Deo Former Dean, Faculty of Commerce University of Rajasthan, Jaipur.</li>
                </ul>-->
                </p>
        </div>
    </div>
</div>
<div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>




    
    <script src="myscript.js"></script>
</body>
</html>