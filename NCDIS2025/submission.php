<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITM | Conference</title>
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
        
        .carousel-caption {
            top: 20px;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 40px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            width: 80%;
            height: 20%;
            margin-top: 20px;
        }
        .carousel-caption h1 {
            font-size: 2rem;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
        li{
            text-align: justify;
        }
          .nav-tabs {
            border-bottom: none;
        }
        .tab-container {
            background: #0067a7;
            padding: 20px;
        }
        .nav-tabs .nav-link {
            color: white;
            border: none;
        }
        .nav-tabs .nav-link.active {
            background-color: #4590bf;
            color: white;
        }
        .tab-content {
            background-color: #4590bf;
            padding: 20px;
            color: white;
            border-radius: 0 0 10px 10px;
            margin: 0 auto;
            width: 80%;
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
        <h2 class="text-center text-primary">Submission Guidelines</h2>
        <div class="accordion" id="submissionGuidelines">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingA">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA" aria-expanded="true" aria-controls="collapseA">
                       <strong>Publication Ethics</strong> 
                    </button>
                </h2>
                <div id="collapseA" class="accordion-collapse collapse show" aria-labelledby="headingA" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>All ICACIA2025 submissions will be checked for plagiarism using Turnitin before the pre-conference review. We encourage authors to maintain high ethical standards 
            for publication. Please ensure that all data is accurately represented, and that any use of others' work (including your own previously published work) is properly cited.</p>


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingB">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB" aria-expanded="false" aria-controls="collapseB">
                         <strong>Submission Guidelines</strong> 
                    </button>
                </h2>
                <div id="collapseB" class="accordion-collapse collapse" aria-labelledby="headingB" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>Papers submitted to ICACIA2025 must be written in English.</p>

            <p>Submit your full paper as a PDF file using the ICACIA2025 template. Paper drafts, written in English, should not be more than 10 pages and formatted as per Springer format. 
            Papers exceeding this page limit may not be reviewed.</p>

            <p>Prospective authors are kindly invited to submit papers electronically to ICACIA2025 through CMT At least one author per paper must have a CMT account; new users will need to create one.</p>

            <p>ICACIA2025 uses a blind review process, meaning authors and reviewers will not know each other's identities. Therefore, please do not include your name or affiliation anywhere in the manuscript submitted for review. 
            This information can be added to the camera-ready version if your paper is accepted.</p>

            <p>Abstracts should be no more than 250 words and must include at least five keywords.</p>

            <p>When submitting your manuscript via CMT, please select only one track—the most appropriate one for your paper—from the list provided.</p>

            <p>All ICACIA 2025 submissions will undergo plagiarism checks. Papers found to be plagiarism-free will be peer-reviewed and evaluated based on novelty, presentation, correctness, and relevance to the conference. 
            Authors of papers with minor plagiarism issues will be given the opportunity to revise their work. Papers with high plagiarism will be immediately rejected.</p>

            <p>Authors will be notified of paper acceptance (or rejection) via email, along with reviewer comments. Accepted papers must incorporate these comments into the camera-ready version before final submission.</p>

            <p><b>Paper Submission Link: </b><a href="https://cmt3.research.microsoft.com/ICACIA2025" target="_blank">Click here for paper submission</a> </p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingC">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC" aria-expanded="false" aria-controls="collapseC">
                       <strong>Proceeding Guidelines for Authors</strong> 
                    </button>
                </h2>
                <div id="collapseC" class="accordion-collapse collapse" aria-labelledby="headingC" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>For Proceeding Guidelines <a href="http://www.iitmjanakpuri.com/ICACIA2025/SpringerGuidelines.pdf" target="_blank">Click Here</a></p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>Templates for Manuscript Preparation</strong></p>
    <ul style="padding-left: 18px; font-size: 14px;">
        <li>
            <a href="downloads/Microsoft+Word+Proceedings+Templates.zip" target="_blank" download>Download Microsoft Word Template (.zip)</a>
        </li>
        <li>
            <a href="downloads/LaTeX2e+Proceedings+Templates+download (1).zip" target="_blank" download>Download LaTeX Template (.zip)</a>
        </li>
    </ul>
           
            <p>For any queries related to paper submission contact pankaj.varshney@iitmipu.ac.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
