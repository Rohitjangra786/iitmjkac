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
                        Step A: Manuscript Preparation
                    </button>
                </h2>
                <div id="collapseA" class="accordion-collapse collapse show" aria-labelledby="headingA" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>The manuscript should be prepared in Springer LNEE format using MS WORD and/or LaTeX template available respectively in MS word (.doc), and LaTeX. The guidelines given here may help you to prepare the manuscript. These templates and guidelines can also be found in publisher&rsquo;s homepage by clicking on &#39;Instructions for Authors&#39; section.</p>

            <p>The figures / graphs / plots in the manuscript MUST be of good resolution (600 dpi or more), tables MUST NOT be in pictorial format. Text in figures should not be too small, and preferably of equal size as text of the article.</p>

            <p>Figures, text, or the tables MUST be visible within boundary of the text area of the page and MUST NOT go beyond it.</p>

            <p>Do NOT use any Social / Academic titles (e.g. Mr.,Ms.,Dr.,Prof. etc) preceding the author names. Do NOT mention the position of a person (e.g., research scholar, student, assistant professor, professor, IEEE member, IEEE student member etc.) in the affiliation.</p>

            <p>Mention full address, affiliation, and email of ALL authors, specify a corresponding author with the corresponding e-mail ID. [Once an article is accepted, the publisher will send the proofreading of article to this e-mail]</p>

            <p>Do NOT make any page numbering and do NOT give any running head title.</p>

            <p>Every article must bear a self-composed independent single paragraph as Abstract, which MUST NOT bear any citation or reference. Abstract MUST NOT have a section number.</p>

            <p>Articles must be written in spell checked and grammatically correct English.</p>

            <p>All references, figures, and tables should be numbered in sequence starting from 1 and MUST be duly cited / referred within the text.</p>

            <p>Adhere to page size (A4 : 8.27&#39;&#39;X11.69&#39;&#39;), page margin size (top:2.05&#39;&#39;, bottom:2.05&#39;&#39;, left/inside: 1.73&#39;&#39;, right/outside: 1.73&#39;&#39;), line spacing ( &#39;single&#39; ), and font style ( &#39;Times&#39; ), font sizes (Title: 14pt &ndash; bold, Abstract: 9 pt, Keywords: 9 pt, Section header : 12 pt &ndash; bold, Subsection header: 10 pt &ndash; bold, Table and figure caption: 10 pt &ndash; bold, Text body: 10 pt) as prescribed in Springer LNEE template, do NOT manually alter ANY of these parameters.</p>

            <p>Verify the referencing style of LNEE, which will help to produce correct reference format. A reference should bear following parameters in proper format: author name(s), title of article/book, conference/journal name, volume, issue, page numbers, and publication year.</p>

            <p>Any article, not in format, will be subjected to rejection without any judgement on its quality.</p>

            <p>The articles should be own work of the authors. If any work is referred from others (or some other work by the author), proper acknowledgement should be given. Plagiarism of any type, if detected, will lead to rejection of the articles anytime.</p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingB">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB" aria-expanded="false" aria-controls="collapseB">
                        Step B: Submitting for Review
                    </button>
                </h2>
                <div id="collapseB" class="accordion-collapse collapse" aria-labelledby="headingB" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>Submit your article with properly mentioning article title, authors names and other details that will be asked.</p>

            <p>Create / sign up for CMT account if you do NOT have one.</p>

            <p>Fill proper metadata of the article in Easychair as they exist in your article. Title, Abstract, Keywords, list of authors (in order) and their affiliation should be mentioned in CMT while submitting.</p>

            <p>Author will be assigned a unique article ID of his submitted article, which author should remember and use for any correspondence.</p>

            <p>Page size of an article should not exceed 15 in any case. Desired page size is minimum 10.</p>

            <p>Author need not upload editable source files (.doc or .docx or LaTeX files) for review. Submit single PDF files only. If the article is selected, author will later be asked for the source files.</p>

            <p>Review decision will be e-mailed to authors.</p>

            <p>No offline submission request through e-mail or surface mail will be entertained. Offline submissions will lead to outright rejection without any review or validating the quality of the article.</p>

            <p><b>Note:</b> Do NOT submit multiple copies of same article, which will cause rejection. Any revision / uploading a new version / updating author information can be done on a submission through Easychair.</p>

            <p>All submitted papers will be checked for plagiarism through the Turnitin software. Papers with significant overlap with the authors own papers or other papers will be rejected without review.</p>

            <p>All papers that conform to submission guidelines will be peer reviewed and evaluated based on originality, technical and/or research content/depth, correctness, relevance to conference, contributions, and readability. Acceptance of papers will be communicated to authors by email. The authors of the accepted papers will be allowed to make corrections in accordance with the suggestions of the reviewers and submit final camera-ready papers within the stipulated deadline. The conference proceedings will be distributed amongst the participants during the conference.</p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingC">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC" aria-expanded="false" aria-controls="collapseC">
                        Step C: After Acceptance
                    </button>
                </h2>
                <div id="collapseC" class="accordion-collapse collapse" aria-labelledby="headingC" data-bs-parent="#submissionGuidelines">
                    <div class="accordion-body">
            <p>Preparing and uploading of the Camera Ready Article:</p>

            <p>The final camera-ready copy of the papers must be in Springer format with a length of maximum 15 pages. Over-length charges will apply for each extra page beyond 12 pages. 
            The overlength charges are Rs. 750/- per page. However, it is desired that maximum number of pages in an article should not exceed 15 pages in any circumstance. 
            Check Step A: Manuscript preparation above for formatting the camera ready article. Upload camera-ready PDF on to the CMT, and submit source file(s) along with items mentioned below.</p>

            <p>Paying Registration Fee:</p>

            <p>Calculate the registration fee according to your page length and type of authorship as directed in REGISTRATION page and make payment using Foreign Telegraphic Transfer or Direct Transfer or NEFT Transfer. Do NOT forget to keep the pay-in-slip or Challan or online payment receipt. You need the scanned copy of it or scan of the DD to complete next steps.</p>

            <p>Filling up of the Registration Form, which can be found in MS WORD format <a href="AuthorRegistrationForm.docx" target="_blank">Author Registration Form </a>, 
        
        <a href="AttendeeRegistrationForm.docx" target="_blank">Attendee Registration form </a>  or in PDF format   <a href="regform.pdf" target="_blank">Author Registration Form </a>, 
        
        <a href="ICETIT-2019_AttendeeRegistrationForm.pdf" target="_blank">Attendee Registration form </a> </p>

            <p>Filling up of the Consent to Publish Form, which can directly be downloaded from <a target="_blank" href="ICETIT-2019_ConsentToPublish.pdf" >here</a></p>

            <p>You need the following information to fill in the Consent to Publish Form Series Title: International Conerence on Emerging Trends in Informationh Technology - Proceedings of ICACIA-2025</p> 

            <p>Title of Conference: International Conference on Advances in Computational Intelligence and Applications (ICACIA-2025)</p>

            <p>Editors: <br/>
            <ul>
                <li>Prof. (Dr.) Ganesh Kumar Wadhwani, Institute of Information Technology and Management, 110058 New Delhi, India</li>
                <li>Dr. Pankaj Varshney, Institute of Information Technology and Management, 110058 New Delhi, India</li>
            </ul>
            We have filled up these information in a Consent to Publish form and left the rest blank for your ease. So you can download the partially filled form and just fill the rest to complete the form.</p>

            <p>Mailing the following items in .zip / .rar format to conference@iitmipu.ac.in :</p>

            <p></p>

            <ul>
                <li>The Camera ready Article source files, preferably in MS Word format</li>
                <li>Scanned copy of filled in Registration Form.</li>
                <li>Scanned copy of filled in Consent to Publish Form.</li>
                <li>Proof of studentship (valid on 05-JULY-2025) for availing Student Registration (if applicable) signed by head of the department/course coordinator/registrar/director/principal.</li>
                <li>Scan of registration fee pay-in-slip/voucher of online transfer/DD payable to ICACIA-2025 (whichever applicable).</li>
            </ul>

            <p>The mail must bear the subject line as: &#39;&#39;Registration of article ICACIA-2025-XXX&#39;&#39;. (A SINGLE MAIL must bear all items below. If size exceeds 20 MB, break the mail into more than one. Append to subject line of the mails: Part 1, Part 2 etc. Multiple mails without size limitation will not be considered.) Submission of original demand draft by above mentioned registration deadlines.<br><br><b>NOTE: </b> YOU NEED NOT POST ANYTHING IF YOU HAVE NOT MADE PAYMENT USING DEMAND DRAFT. ICACIA-2025 WILL NOT BE RESPONSIBLE FOR ANY POSTAL DELAY OR FAILURE IN RECEIVING THE DOCUMENTS BY THE DEADLINES</p>    

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
