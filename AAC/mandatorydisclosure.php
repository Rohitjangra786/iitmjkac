<?php
// Formal Mandatory-Disclosure landing page — Academic Audit Cell (self-contained subsite).
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$aac_page_title = 'Institute Information';
$aac_active     = 'mandatorydisclosure.php';

// Accreditation & statutory PDFs (stored server-side under /mandatory/pdf/, gitignored).
$aac_docs = [
    ['label' => 'NAAC Certificate (Grade A)', 'icon' => 'fa-award',       'href' => 'https://www.iitmjanakpuri.com/mandatory/pdf/naac.pdf'],
    ['label' => 'NBA Accreditation',          'icon' => 'fa-certificate', 'href' => 'https://www.iitmjanakpuri.com/mandatory/pdf/NBA%20Letter.pdf'],
    ['label' => 'NIRF 2025 Report',           'icon' => 'fa-chart-bar',   'href' => 'https://www.iitmjanakpuri.com/mandatory/pdf/NIRF_2025.pdf'],
    ['label' => 'DTTE NOC 2025-26',           'icon' => 'fa-file-pdf',    'href' => 'https://www.iitmjanakpuri.com/mandatory/pdf/NOC_DTTE_2025-26.pdf'],
];

include 'aac-header.php';
?>
        <nav class="aac-crumb"><a href="https://www.iitmjanakpuri.com/index.php">Home</a> &rsaquo; Academic Audit Cell &rsaquo; Institute Information</nav>
        <h1 class="aac-h1">Mandatory Disclosure</h1>
        <p class="aac-lead">Published by the Academic Audit Cell of the Institute of Information Technology &amp; Management (IITM), Janakpuri, New Delhi, in accordance with AICTE norms for the academic year 2024&ndash;2025.</p>

        <h2 class="aac-h2">A. Institute Information</h2>
        <table class="doc-table">
            <tbody>
                <tr><th>Name of the Institution</th><td>Institute of Information Technology &amp; Management</td></tr>
                <tr><th>Name of the Director / Principal</th><td>Prof. (Dr.) Rachita Rana</td></tr>
                <tr><th>Address</th><td>D-29, Institutional Area, Janakpuri, New Delhi &ndash; 110058</td></tr>
                <tr><th>Telephone No. (Institution)</th><td>+91 11-28525882, 28520239, 28525051</td></tr>
                <tr><th>Email ID</th><td><a href="mailto:director@iitmipu.ac.in">director@iitmipu.ac.in</a></td></tr>
                <tr><th>Institution Website</th><td><a href="https://iitmjanakpuri.com/" target="_blank" rel="noopener">https://iitmjanakpuri.com/</a></td></tr>
            </tbody>
        </table>

        <h2 class="aac-h2">Accreditation &amp; Statutory Documents</h2>
        <div class="doc-dl">
            <?php foreach ($aac_docs as $d): ?>
            <a href="<?php echo $d['href']; ?>" target="_blank" rel="noopener"><i class="fas <?php echo $d['icon']; ?>"></i> <?php echo $d['label']; ?></a>
            <?php endforeach; ?>
        </div>

        <h2 class="aac-h2">Disclosure Contents</h2>
        <div class="doc-index">
            <?php foreach ($aac_nav as $it): if ($it['href'] === 'mandatorydisclosure.php') continue; ?>
            <a href="<?php echo $it['href']; ?>">
                <span class="l"><?php echo $it['label']; ?><small><?php echo $it['desc']; ?></small></span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <?php endforeach; ?>
        </div>
<?php include 'aac-footer.php'; ?>
