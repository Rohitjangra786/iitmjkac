<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$aac_page_title = 'Status of Accreditation';
$aac_active     = 'accreditationstatus.php';

include 'aac-header.php';
?>
        <nav class="aac-crumb"><a href="https://www.iitmjanakpuri.com/index.php">Home</a> &rsaquo; <a href="mandatorydisclosure.php">Academic Audit Cell</a> &rsaquo; Status of Accreditation</nav>
        <h1 class="aac-h1">Status of Accreditation</h1>
        <p class="aac-lead">Accreditation and recognition status of the Institute of Information Technology &amp; Management under the National Board of Accreditation (NBA) and the National Assessment and Accreditation Council (NAAC).</p>

        <h2 class="aac-h2">(a) Applicability of Accreditation</h2>
        <table class="doc-table">
            <tbody>
                <tr><th>NBA Only</th><td>No</td></tr>
                <tr><th>NAAC Only</th><td>No</td></tr>
                <tr><th>NBA and NAAC</th><td>Yes&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.iitmjanakpuri.com/mandatory/pdf/NAAC%20Certificate.pdf" target="_blank" rel="noopener">NAAC</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.iitmjanakpuri.com/mandatory/pdf/NBA%20Certificate.pdf" target="_blank" rel="noopener">NBA</a></td></tr>
            </tbody>
        </table>

        <h2 class="aac-h2">(b) Status of Accreditation</h2>
        <table class="doc-table">
            <tbody>
                <tr><th>NBA<br><small>(Out of 25 scaled to 50, if only NBA accreditation applicable)</small></th><td>XXXX</td></tr>
                <tr><th>NAAC<br><small>(Out of 25 scaled to 50, if only NAAC accreditation is applicable)</small></th><td>XXXX</td></tr>
                <tr><th>NBA and NAAC<br><small>(Out of 50, if both NAAC &amp; NBA accreditation are applicable and marks would be awarded as per availability of accreditations, out of total of &lsquo;25&rsquo; marks each for NBA and NAAC)</small></th><td>NAAC &lsquo;A&rsquo; Grade<br>NBA (2025-2028)</td></tr>
                <tr><th>Marks (Max. Marks: 50)</th><td></td></tr>
            </tbody>
        </table>

<?php include 'aac-footer.php'; ?>
