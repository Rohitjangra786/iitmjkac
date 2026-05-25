<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$placements = include __DIR__ . '/placements_data.php';

$courseLabels = [
    'MBA'  => 'MBA',
    'MCA'  => 'MCA',
    'BCA'  => 'BCA',
    'BBA'  => 'BBA',
    'BCOM' => 'B.Com (H)',
    'BJMC' => 'BA (JMC)',
];

$totalRecords = 0;
foreach ($placements as $course => $batches) {
    foreach ($batches as $batch => $rows) {
        $totalRecords += count($rows);
    }
}
$totalCourses = count($placements);
$totalBatches = array_sum(array_map('count', $placements));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IITM | Placement Records</title>

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
            --row-alt: #faf6f6;
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
        .pl-stats {
            display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;
            margin-top: 18px; position: relative; z-index: 1;
        }
        .pl-stat {
            background: rgba(255,255,255,0.13);
            border: 1px solid rgba(255,255,255,0.28);
            padding: 8px 18px; border-radius: 999px;
            font-size: 0.92rem;
        }
        .pl-stat strong { font-size: 1.05rem; font-weight: 700; margin-right: 4px; }

        /* Subnav (was the blue sidebar) */
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

        /* Toolbar */
        .pl-toolbar {
            max-width: 1200px;
            margin: -36px auto 0;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 18px 20px;
            position: relative; z-index: 5;
        }
        .pl-search { position: relative; }
        .pl-search input {
            width: 100%; border: 1.5px solid #e6e6e6; border-radius: 10px;
            padding: 12px 14px 12px 44px; font-size: 1rem;
            transition: border-color .2s, box-shadow .2s;
            outline: none; background: #fafafa;
        }
        .pl-search input:focus {
            border-color: var(--maroon);
            box-shadow: 0 0 0 4px var(--ring); background: #fff;
        }
        .pl-search .icon {
            position: absolute; left: 14px; top: 50%;
            transform: translateY(-50%); color: var(--maroon); font-size: 1.1rem;
        }
        .pl-course-chips {
            display: flex; flex-wrap: wrap; gap: 8px; margin-top: 14px;
        }
        .pl-chip {
            border: 1.5px solid #e0e0e0; background: #fff;
            color: var(--ink); border-radius: 999px;
            padding: 7px 16px; font-size: 0.9rem; cursor: pointer;
            transition: all .18s ease; font-weight: 500;
            text-decoration: none; display: inline-flex; align-items: center; gap: 6px;
        }
        .pl-chip:hover { border-color: var(--maroon); color: var(--maroon); }
        .pl-chip.active { background: var(--maroon); border-color: var(--maroon); color: #fff; box-shadow: 0 4px 12px rgba(128,0,0,0.25); }
        .pl-chip .count { opacity: 0.75; font-size: 0.8rem; }

        /* Sections */
        .pl-wrap { max-width: 1200px; margin: 24px auto 60px; padding: 0 16px; }
        .pl-course {
            background: #fff; border-radius: 14px; padding: 24px 22px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            border: 1px solid #ececec; margin-bottom: 22px;
        }
        .pl-course-title {
            display: flex; align-items: center; gap: 14px; margin: 0 0 14px;
        }
        .pl-course-title h2 {
            color: var(--maroon); font-size: 1.4rem; font-weight: 700;
            margin: 0; letter-spacing: 0.3px;
        }
        .pl-course-title .pill {
            background: var(--maroon-soft); color: var(--maroon);
            font-size: 0.78rem; font-weight: 600;
            padding: 4px 10px; border-radius: 999px;
        }
        .pl-course-title .line {
            flex: 1; height: 2px;
            background: linear-gradient(90deg, var(--maroon) 0%, rgba(128,0,0,0) 100%);
            border-radius: 2px;
        }

        /* Year pills */
        .pl-years {
            display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 16px;
        }
        .pl-year {
            border: 1.5px solid #e0e0e0; background: #fff;
            color: var(--ink); border-radius: 8px;
            padding: 6px 14px; font-size: 0.85rem; font-weight: 600;
            cursor: pointer; transition: all .18s ease;
        }
        .pl-year:hover { border-color: var(--maroon); color: var(--maroon); }
        .pl-year.active {
            background: var(--maroon); border-color: var(--maroon); color: #fff;
        }
        .pl-year .yc { opacity: 0.78; font-size: 0.75rem; margin-left: 4px; font-weight: 500; }

        /* Tables */
        .pl-table-wrap { overflow-x: auto; border-radius: 10px; border: 1px solid #ececec; }
        .pl-table {
            width: 100%; border-collapse: collapse;
            font-size: 0.9rem; background: #fff;
        }
        .pl-table thead th {
            background: var(--maroon); color: #fff;
            text-align: left; padding: 12px 14px;
            font-weight: 600; font-size: 0.85rem;
            letter-spacing: 0.3px; text-transform: uppercase;
            position: sticky; top: 0; z-index: 1;
        }
        .pl-table tbody td {
            padding: 11px 14px; border-bottom: 1px solid #eee;
            color: var(--ink); vertical-align: middle;
        }
        .pl-table tbody tr:nth-child(odd) td { background: var(--row-alt); }
        .pl-table tbody tr:hover td { background: var(--maroon-soft); }
        .pl-table tbody tr:last-child td { border-bottom: 0; }
        .pl-table .col-no    { width: 60px; color: var(--muted); font-variant-numeric: tabular-nums; }
        .pl-table .col-enr   { font-family: ui-monospace, 'SF Mono', Menlo, monospace; font-size: 0.82rem; color: var(--muted); white-space: nowrap; }
        .pl-table .col-name  { font-weight: 600; }
        .pl-table .col-comp  { color: #4a4a4a; }

        .pl-empty {
            text-align: center; padding: 40px 20px; color: var(--muted);
            background: #fafafa; border-radius: 10px;
        }
        .pl-empty i { font-size: 2.2rem; color: #c8a5a5; margin-bottom: 10px; }
        .pl-empty p { margin: 6px 0 0; font-size: 1rem; }

        .hidden { display: none !important; }

        /* Search highlight (set via JS) */
        mark.hl {
            background: #fff3a3; color: var(--ink);
            padding: 0 2px; border-radius: 2px;
        }

        @media (max-width: 600px) {
            .pl-hero { padding: 40px 16px 56px; }
            .pl-toolbar { margin: -28px 12px 0; padding: 14px; }
            .pl-wrap { padding: 0 12px; }
            .pl-course { padding: 18px 14px; }
            .pl-table thead th, .pl-table tbody td { padding: 9px 10px; font-size: 0.82rem; }
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

    <section class="pl-hero">
        <h1>Placement Records</h1>
        <p class="lead">Where our students land — across every batch, every programme</p>
        <div class="pl-stats">
            <span class="pl-stat"><strong><?php echo $totalRecords; ?></strong>Placements</span>
            <span class="pl-stat"><strong><?php echo $totalCourses; ?></strong>Programmes</span>
            <span class="pl-stat"><strong><?php echo $totalBatches; ?></strong>Batches</span>
        </div>
    </section>

    <nav class="pl-subnav" aria-label="Placement sub-navigation">
        <a href="placements.php">IIPC</a>
        <a href="partners.php">Placement Partners</a>
        <a href="recruiters.php">Recruiters Speak</a>
        <a href="plrecords.php" class="current">Placement Records</a>
        <a href="summertraining.php">Summer Training</a>
        <a href="https://www.iitminternware.com/">Internship Cell</a>
        <a href="images/IITM%20Brochure%20(final).pdf" target="_blank">Brochure</a>
    </nav>

    <div class="pl-toolbar">
        <div class="pl-search">
            <i class="fa fa-search icon"></i>
            <input type="text" id="plSearch" placeholder="Search by student name, enrollment, or company..." autocomplete="off">
        </div>
        <div class="pl-course-chips" id="courseChips">
            <button class="pl-chip active" data-course="all">All <span class="count">(<?php echo $totalRecords; ?>)</span></button>
            <?php foreach ($placements as $course => $batches):
                $count = 0;
                foreach ($batches as $b => $r) $count += count($r);
            ?>
            <button class="pl-chip" data-course="<?php echo htmlspecialchars($course, ENT_QUOTES); ?>">
                <?php echo htmlspecialchars($courseLabels[$course] ?? $course); ?>
                <span class="count">(<?php echo $count; ?>)</span>
            </button>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="pl-wrap">
        <?php foreach ($placements as $course => $batches):
            $courseLabel = $courseLabels[$course] ?? $course;
            $batchKeys = array_keys($batches);
            $firstBatch = $batchKeys[0] ?? null;
            $totalForCourse = 0;
            foreach ($batches as $b => $r) $totalForCourse += count($r);
        ?>
        <section class="pl-course" data-course="<?php echo htmlspecialchars($course, ENT_QUOTES); ?>" id="course-<?php echo strtolower($course); ?>">
            <div class="pl-course-title">
                <h2><?php echo htmlspecialchars($courseLabel); ?></h2>
                <span class="pill"><?php echo $totalForCourse; ?> placements</span>
                <span class="line"></span>
            </div>

            <div class="pl-years" data-yearchips>
                <?php foreach ($batchKeys as $i => $batch): ?>
                <button class="pl-year <?php echo $i === 0 ? 'active' : ''; ?>" data-batch="<?php echo htmlspecialchars($batch, ENT_QUOTES); ?>">
                    <?php echo htmlspecialchars($batch); ?>
                    <span class="yc">(<?php echo count($batches[$batch]); ?>)</span>
                </button>
                <?php endforeach; ?>
            </div>

            <?php foreach ($batches as $batch => $rows): ?>
            <div class="pl-table-wrap pl-batch <?php echo $batch === $firstBatch ? '' : 'hidden'; ?>" data-batch="<?php echo htmlspecialchars($batch, ENT_QUOTES); ?>">
                <table class="pl-table">
                    <thead>
                        <tr>
                            <th class="col-no">#</th>
                            <th class="col-enr">Enrollment No.</th>
                            <th class="col-name">Student Name</th>
                            <th class="col-comp">Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $i => $r):
                            $search = strtolower(($r['enroll'] ?? '') . ' ' . ($r['name'] ?? '') . ' ' . ($r['company'] ?? ''));
                        ?>
                        <tr data-search="<?php echo htmlspecialchars($search, ENT_QUOTES); ?>">
                            <td class="col-no"><?php echo $i + 1; ?></td>
                            <td class="col-enr"><?php echo htmlspecialchars($r['enroll']); ?></td>
                            <td class="col-name"><?php echo htmlspecialchars($r['name']); ?></td>
                            <td class="col-comp"><?php echo htmlspecialchars($r['company']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endforeach; ?>

            <div class="pl-empty hidden" data-empty>
                <i class="fa fa-search"></i>
                <p>No placements match your search in this batch.</p>
            </div>
        </section>
        <?php endforeach; ?>

        <div class="pl-empty hidden" id="globalEmpty">
            <i class="fa fa-search"></i>
            <p>No placements found anywhere on the page.</p>
        </div>
    </div>

    <?php include("../naacfooter.php"); ?>

    <script>
        (function(){
            const search = document.getElementById('plSearch');
            const courseChips = document.getElementById('courseChips');
            const courses = document.querySelectorAll('.pl-course');
            const globalEmpty = document.getElementById('globalEmpty');
            let activeCourse = 'all';
            let query = '';

            // Per-course year switching
            courses.forEach(courseEl => {
                const yearChips = courseEl.querySelector('[data-yearchips]');
                yearChips.addEventListener('click', e => {
                    const btn = e.target.closest('.pl-year');
                    if (!btn) return;
                    yearChips.querySelectorAll('.pl-year').forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const batch = btn.dataset.batch;
                    courseEl.querySelectorAll('.pl-batch').forEach(b => {
                        b.classList.toggle('hidden', b.dataset.batch !== batch);
                    });
                    applyFilter();
                });
            });

            // Course chip → scroll to course / show only that course
            courseChips.addEventListener('click', e => {
                const btn = e.target.closest('.pl-chip');
                if (!btn) return;
                courseChips.querySelectorAll('.pl-chip').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                activeCourse = btn.dataset.course;
                courses.forEach(c => {
                    c.classList.toggle('hidden', activeCourse !== 'all' && c.dataset.course !== activeCourse);
                });
                if (activeCourse !== 'all') {
                    const target = document.querySelector('.pl-course[data-course="' + activeCourse + '"]');
                    if (target) target.scrollIntoView({behavior: 'smooth', block: 'start'});
                } else {
                    window.scrollTo({top: 0, behavior: 'smooth'});
                }
                applyFilter();
            });

            // Live search across all visible batches
            search.addEventListener('input', () => {
                query = search.value.trim().toLowerCase();
                applyFilter();
            });

            function applyFilter(){
                let totalVisible = 0;
                courses.forEach(courseEl => {
                    if (courseEl.classList.contains('hidden')) return;
                    let courseVisible = 0;
                    courseEl.querySelectorAll('.pl-batch').forEach(batch => {
                        const isActiveBatch = !batch.classList.contains('hidden');
                        if (!isActiveBatch && !query) return;
                        // When searching, look across ALL batches in this course
                        const rows = batch.querySelectorAll('tbody tr');
                        let batchVisible = 0;
                        rows.forEach(row => {
                            const matches = !query || row.dataset.search.indexOf(query) !== -1;
                            row.classList.toggle('hidden', !matches);
                            if (matches) batchVisible++;
                        });
                        // While searching, show all batches that have hits
                        if (query) {
                            batch.classList.toggle('hidden', batchVisible === 0);
                        } else if (isActiveBatch) {
                            batch.classList.remove('hidden');
                        }
                        courseVisible += batchVisible;
                    });
                    const emptyEl = courseEl.querySelector('[data-empty]');
                    if (emptyEl) emptyEl.classList.toggle('hidden', courseVisible > 0);
                    totalVisible += courseVisible;
                });
                globalEmpty.classList.toggle('hidden', totalVisible > 0 || !query);

                // Reset to active-only batch when query cleared
                if (!query) {
                    courses.forEach(courseEl => {
                        const yearChips = courseEl.querySelector('[data-yearchips]');
                        const active = yearChips.querySelector('.pl-year.active');
                        if (!active) return;
                        const batch = active.dataset.batch;
                        courseEl.querySelectorAll('.pl-batch').forEach(b => {
                            b.classList.toggle('hidden', b.dataset.batch !== batch);
                        });
                        const empty = courseEl.querySelector('[data-empty]');
                        if (empty) empty.classList.add('hidden');
                    });
                }
            }
        })();
    </script>
</body>
</html>
