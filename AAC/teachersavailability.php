<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$aac_page_title = 'Status of Teachers Availability';
$aac_active     = 'teachersavailability.php';

include 'aac-header.php';
?>
        <nav class="aac-crumb"><a href="https://www.iitmjanakpuri.com/index.php">Home</a> &rsaquo; <a href="mandatorydisclosure.php">Academic Audit Cell</a> &rsaquo; Status of Teachers Availability</nav>
        <h1 class="aac-h1">Status of Teachers Availability</h1>
        <p class="aac-lead">Enrolment, sanctioned faculty strength and cadre-wise availability of regular teachers across the undergraduate and postgraduate programmes of the Institute.</p>

        <h2 class="aac-h2">(a) Total Number of Students</h2>
        <table class="doc-table">
            <tbody>
                <tr><th>In UG</th><td>2012</td></tr>
                <tr><th>In PG</th><td>222</td></tr>
            </tbody>
        </table>

        <h2 class="aac-h2">(b) Number of Regular Teachers</h2>
        <table class="doc-table">
            <tbody>
                <tr><th>In UG</th><td>112</td></tr>
                <tr><th>In PG</th><td>12 <a href="https://www.iitmjanakpuri.com/mandatory/pdf/TSR.pdf" target="_blank" rel="noopener">View Details</a></td></tr>
                <tr><th>In UG and PG</th><td>124(104 + 9)</td></tr>
                <tr><th>Total</th><td>124</td></tr>
            </tbody>
        </table>

        <h2 class="aac-h2">Teachers' Ratio</h2>
        <div class="doc-scroll">
            <table class="doc-table">
                <thead>
                    <tr>
                        <th colspan="4"></th>
                        <th colspan="3">No. of Regular* Teachers Available</th>
                        <th colspan="1"></th>
                    </tr>
                    <tr>
                        <th>S. No.</th>
                        <th>Programme(s) and duration (in Years)</th>
                        <th>Sanctioned Intake x duration of the programme = total students (a)</th>
                        <th>No. of Required Teachers (b)</th>
                        <th>Assistant Professor (Jr. Faculty) (c)</th>
                        <th>Associate Professor + Professors (Sr. Faculty) (d)</th>
                        <th>Cadre Ratio (d/c)</th>
                        <th>Teacher-Student Ratio (a/(c+d))</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>MBA</td><td>120</td><td>6</td><td>4</td><td>2</td><td>0.5</td><td>20</td></tr>
                    <tr><td>2</td><td>MCA</td><td>120</td><td>6</td><td>4</td><td>2</td><td>0.5</td><td>20</td></tr>
                    <tr><td>3</td><td>BBA (Fist Shift)</td><td>540</td><td>26</td><td>17</td><td>9</td><td>0.52</td><td>20.7</td></tr>
                    <tr><td>4</td><td>BBA (Second Shift)</td><td>480</td><td>23</td><td>15</td><td>8</td><td>0.53</td><td>20.8</td></tr>
                    <tr><td>5</td><td>BCA (First Shift)</td><td>360</td><td>17</td><td>11</td><td>6</td><td>0.54</td><td>21</td></tr>
                    <tr><td>6</td><td>BCA (Second Shift)</td><td>330</td><td>16</td><td>10</td><td>6</td><td>0.60</td><td>20.6</td></tr>
                    <tr><td>7</td><td>B.Com(H) First Shift</td><td>180</td><td>9</td><td>6</td><td>3</td><td>0.5</td><td>20</td></tr>
                    <tr><td>8</td><td>B.Com(H) Second Shift</td><td>180</td><td>9</td><td>6</td><td>3</td><td>0.5</td><td>20</td></tr>
                    <tr><td>9</td><td>BA(JMC)</td><td>240</td><td>12</td><td>8</td><td>4</td><td>0.5</td><td>20</td></tr>
                    <tr><td colspan="2" style="text-align:center">Total</td><td>1860</td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td colspan="6" style="text-align:right">Marks</td><td colspan="2"></td></tr>
                </tbody>
            </table>
        </div>

<?php include 'aac-footer.php'; ?>
