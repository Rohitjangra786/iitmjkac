<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITM | Conference Publication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #0078D7;
            font-family: Georgia, serif;
        }
        .navbar .nav-link {
            color: white;
        }
        .navbar .nav-link:hover {
            color: cyan;
        }
        .navbar .nav-link.active {
            color: white;
            background-color: rgba(0, 120, 215, 0.2);
            text-shadow: 0 0 5px lightblue;
        }
        .navbar-nav {
            margin: 0 auto;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
        .card {
            background-color: #f4f8fb;
        }
        .accordion-button {
            background-color: #0067a7;
            color: white;
        }
        .accordion-button:not(.collapsed) {
            background-color: #4590bf;
            color: white;
        }
        .accordion-body {
            background-color: #ffffff;
            color: #333;
        }
        ul li {
            text-align: justify;
        }
    </style>
</head>
<body>

<?php
  include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>

<div class="container mt-5">
    <div class="card shadow-lg border-0 p-4">
        <h2 class="text-center text-primary">Paper Publication Guidelines</h2>
        <p>It is planned to publish the proceedings  with Springer in their Communications in Computer and Information Science series (final approval pending).</p>     
        <p>Extnded version of the selected papers will be recommended for publication in the International Journal of Computers and their Applications (IJCA), a US-based Scopus-Indexed journal.</p>
 <!--       <div class="accordion mt-4" id="publicationGuidelines">
            <div class="accordion-item">
                <h2 class="accordion-header" id="pubHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pubCollapseOne" aria-expanded="true" aria-controls="pubCollapseOne">
                        <strong>Publication Ethics</strong>
                    </button>
                </h2>
                <div id="pubCollapseOne" class="accordion-collapse collapse show" aria-labelledby="pubHeadingOne" data-bs-parent="#publicationGuidelines">
                    <div class="accordion-body">
                        <p>Authors must adhere to the highest ethical standards. Submissions will be checked for plagiarism through Turnitin. Accurate representation of data and proper citation of others’ work are mandatory. Dual submission or reuse of previously published content without disclosure is strictly prohibited.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="pubHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pubCollapseTwo" aria-expanded="false" aria-controls="pubCollapseTwo">
                        <strong>Review and Acceptance Process</strong>
                    </button>
                </h2>
                <div id="pubCollapseTwo" class="accordion-collapse collapse" aria-labelledby="pubHeadingTwo" data-bs-parent="#publicationGuidelines">
                    <div class="accordion-body">
                        <p>All submissions will undergo a double-blind peer review process. Reviewers will evaluate the paper on novelty, technical depth, clarity, relevance, and contribution. Authors will receive reviewer feedback and are expected to revise and resubmit camera-ready papers incorporating suggestions.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="pubHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pubCollapseThree" aria-expanded="false" aria-controls="pubCollapseThree">
                        <strong>Publication and Indexing</strong>
                    </button>
                </h2>
                <div id="pubCollapseThree" class="accordion-collapse collapse" aria-labelledby="pubHeadingThree" data-bs-parent="#publicationGuidelines">
                    <div class="accordion-body">
                        <p>All accepted and presented papers will be submitted for inclusion in the Springer Lecture Notes in Networks and Systems series and will be indexed in major scientific databases such as Scopus, DBLP, and Google Scholar (subject to Springer approval).</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="pubHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pubCollapseFour" aria-expanded="false" aria-controls="pubCollapseFour">
                        <strong>Templates for Manuscript Preparation</strong>
                    </button>
                </h2>
                <div id="pubCollapseFour" class="accordion-collapse collapse" aria-labelledby="pubHeadingFour" data-bs-parent="#publicationGuidelines">
                    <div class="accordion-body">
                        <p>Please use the official templates for preparing your manuscript. Submissions not following the required format may be rejected without review.</p>
                        <ul>
                            <li><a href="downloads/Microsoft+Word+Proceedings+Templates.zip" target="_blank" download>Download Microsoft Word Template (.zip)</a></li>
                            <li><a href="downloads/LaTeX2e+Proceedings+Templates+download (1).zip" target="_blank" download>Download LaTeX Template (.zip)</a></li>
                        </ul>
                        <p>Refer to the <a href="http://www.iitmjanakpuri.com/ICACIA2025/SpringerGuidelines.pdf" target="_blank">Springer Guidelines</a> for detailed formatting instructions.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <p class="mt-4 text-center">For queries, contact: <a href="mailto:pankaj.varshney@iitmipu.ac.in">pankaj.varshney@iitmipu.ac.in</a></p>
    </div>
</div>

<?php
  include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
