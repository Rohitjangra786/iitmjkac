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
    <title>Placement Recruiters List | IITM Janakpuri</title>
    <meta name="description" content="Explore placement recruiters at IITM Janakpuri and discover leading companies offering career opportunities, internships, and campus placements.">

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

        /* Grid */
        .pl-wrap { max-width: 1200px; margin: 24px auto 60px; padding: 0 16px; }
        .rec-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }
        .rec-card {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: all 0.25s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .rec-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(128,0,0,0.08);
            border-color: var(--maroon);
        }
        .rec-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
        }
        .rec-avatar {
            width: 70px;
            height: 70px;
            border-radius: 12px;
            object-fit: cover;
            border: 1px solid #eee;
            background: #fafafa;
        }
        .rec-meta h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--maroon);
            margin: 0 0 2px;
        }
        .rec-meta p {
            font-size: 0.85rem;
            color: var(--muted);
            margin: 0;
            line-height: 1.3;
        }
        .rec-body {
            font-size: 0.92rem;
            line-height: 1.6;
            color: #4a4a4a;
            margin: 0;
            position: relative;
            font-style: italic;
        }
        .rec-body::before {
            content: "“";
            font-size: 3rem;
            color: var(--maroon-soft);
            position: absolute;
            left: -10px;
            top: -25px;
            z-index: 0;
            font-family: serif;
            pointer-events: none;
        }
        .rec-text {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <section class="pl-hero">
        <h1>Recruiters Speak</h1>
        <p class="lead">Testimonials and feedback from our top hiring partners and industry executives</p>
    </section>

    <nav class="pl-subnav" aria-label="Placement sub-navigation">
        <a href="placements.php">IIPC</a>
        <a href="partners.php">Placement Partners</a>
        <a href="recruiters.php" class="current">Recruiters Speak</a>
        <a href="plrecords.php">Placement Records</a>
        <a href="summertraining.php">Summer Training</a>
        <a href="https://www.iitminternware.com/" target="_blank" rel="noopener noreferrer">Internship Cell</a>
    </nav>

    <div class="pl-wrap">
        <div class="rec-grid">
            
            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/feedback_17.jpg" alt="Wipro" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Wipro Technologies</h3>
                        <p>Mr. Rahul Bhatia<br>North Campus Manager</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">Our association with IITM has been great and throughout it has been a journey filled with tremendous outcomes for all those involved. Students that we have recruited in the past have demonstrated learning attitude, perseverance and hard work in their corporate lives. I personally feel that college management is very supportive & encourages Campus placements thus providing valuable opportunities to students in corporates like Wipro.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/feedback_amazon.jpg" alt="Amazon" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Amazon India</h3>
                        <p>Mr. Tarun Mehrotra<br>Recruiter | CS Operations</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">On behalf of all the entire Talent Acquisition Team of Amazon, please accept my appreciation for the excellent work done, especially by the Placement Cell and the work your support staff has done over the past several months in ensuring that the right talent is applying for the opportunities against our open position and in great numbers. It was an enormous undertaking but went smoothly and efficiently! Thanks to your leadership and dedication combined with your staff's teamwork and energy, we are now excitingly waiting for the right result just like every year against the hard work. You and your employees should take great pride in this accomplishment. Looking forward for the students to join at the earliest.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/feedback_18.jpg" alt="Capgemini" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Capgemini India</h3>
                        <p>Ms. Pallabi Baruah<br>Sr Analyst - Campus Recruitment</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">Our association with IITM has been great. Students that we have recruited in the past drives have very good communication skills, positive learning attitude, and very much determined to work in corporate world. I feel that college management is very supportive & encourages Campus placements in future. As far as the infrastructure is concerned it has good seating capacity in labs and auditorium for large pool of candidates.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/BSES%20Logo.jpg" alt="BSES" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>BSES Delhi</h3>
                        <p>Mr. Saurabh Gandhi<br>Assistant Vice President</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">It is always a pleasure to connect with IITM students. The kind of confidence and dedication I have seen in these students is commendable. These guys are actually ready for the corporate world. There is so much of professionalism reflected always.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/Federal.png" alt="Federal Bank" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Federal Bank</h3>
                        <p>Ms. Supriya<br>Human Resources</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">I wanted to take a moment to express my utmost appreciation for the exceptional recruitment process hosted by IITM and the incredible quality of students at your esteemed campus. It has been an absolute pleasure to engage with such talented individuals and witness the remarkable coordination. I would like to extend my gratitude to the entire IITM team for their efforts in organizing the recruitment drive and maintaining high standards of student quality.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/JLL%20Logo.png" alt="JLL" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>JLL India</h3>
                        <p>Mr. Ranveer Singh<br>JBS, Talent Acquisition</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">I want to extend my sincerest gratitude for the outstanding efforts IITM Placement Cell has put forth during the GT Hiring and the invaluable assistance provided in ensuring a seamless onboarding process for the selected students from IITM. Your unwavering support has left a lasting impact, instilling us with confidence and enthusiasm for our future endeavors. Please accept my heartfelt thanks.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/cl.png" alt="Cloud Certitude" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Cloud Certitude</h3>
                        <p>Mr. Rakesh Aggarwal<br>Founder & CEO</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">I strongly believe that InternWare - Internship Cell of IITM Janakpuri is great both for the students community and Industry. Colleges should focus on taking such initiatives to strengthen Industry and Academia Bond.</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/HIVE%20AI%20Logo.png" alt="Hive AI" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>Hive AI</h3>
                        <p>Ms. Usha Yadav<br>Talent Acquisition Lead</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">I would like to thank IITM for such a wonderful coordination throughout the campus hiring process. We had a great experience working with you. My entire team is pleased with the efforts of the team. We were hiring from multiple campuses but experience with your campus was superb. Kudos to the entire team and the quality of students is also amazing, they were well prepared and informed. We would love to partner with you for next year's hiring as well. Great Job👍</p>
                </div>
            </div>

            <div class="rec-card">
                <div class="rec-header">
                    <img src="images/recruiters/VDOIT%20Technologies.png" alt="VDOIT Technologies" class="rec-avatar">
                    <div class="rec-meta">
                        <h3>VDOIT Technologies Ltd.</h3>
                        <p>Mr. Narinder Kamra<br>CEO, MD</p>
                    </div>
                </div>
                <div class="rec-body">
                    <p class="rec-text">I would like to appreciate IITM Janakpuri & the Management Leadership team who encourage their students to learn from the experience of senior corporate executives through numerous platforms.</p>
                </div>
            </div>

        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

</body>
</html>