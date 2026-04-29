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
    bottom: 20%; /* Moves text box higher */
    left: auto;
    right: 10%;
    transform: translateY(0);
    background: rgba(255, 255, 255, 0.7);
    padding: 15px 25px;
    border-radius: 10px;
    width: 60%;
    text-align: left;
    max-height: 90%;
    overflow-y: visible;
    color: blue;
}

/* Adjust for medium screens */
@media (max-width: 992px) {
    .carousel-caption {
        width: 50%;
        right: 5%;
        bottom: 25%; /* Moves it higher on medium screens */
    }
}

/* Adjust for mobile screens */
@media (max-width: 768px) {
    .carousel-caption {
        width: 75%;
        right: 50%;
        left: 50%;
        transform: translate(-50%, 0);
        bottom: 30%; /* Moves it even higher on mobile */
        max-height: 80%;
        padding: 10px 15px;
        font-size: 12px;
    }

    .carousel-caption h1 {
        font-size: 1rem;
    }

    .carousel-caption p {
        font-size: 0.8rem;
    }
}

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
        .header-title {
            background-color: white;
            color: #0078D7;
            text-align: center;
            padding: 20px 10px;
            font-size: 1.6rem;
            font-weight: bold;
        }
        
        li{
            text-align: justify;
        }
        
:root{
  --brand: #0078D7;
  --brand-dark: #0067a7;
  --ink: #0f2147;
}

/* Layout helper (optional) */
.cta-wrap{
  display: flex;
  gap: .75rem;
  flex-wrap: wrap;
  align-items: center;
}

/* Base button look */
.btn-register,
.btn-ecopyright{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: .8rem 1.25rem;
  font-weight: 700;
  line-height: 1;
  border-radius: .75rem;      /* soft rounded */
  text-decoration: none !important;
  transition: all .2s ease;
  box-shadow: 0 6px 18px rgba(0,0,0,.06);
  white-space: nowrap;
}

/* Primary: Register */
.btn-register{
  background: var(--brand);
  color: #fff !important;
  border: 2px solid var(--brand);
}
.btn-register:hover{
  background: var(--brand-dark);
  border-color: var(--brand-dark);
  transform: translateY(-1px);
}
.btn-register:focus{
  outline: 3px solid rgba(0,120,215,.25);
  outline-offset: 2px;
}

/* Secondary: e-Copyright */
.btn-ecopyright{
  background: #fff;
  color: var(--brand) !important;
  border: 2px solid var(--brand);
}
.btn-ecopyright:hover{
  background: var(--brand);
  color: #fff !important;
  transform: translateY(-1px);
}
.btn-ecopyright:focus{
  outline: 3px solid rgba(0,120,215,.25);
  outline-offset: 2px;
}

/* Optional size tweaks */
.btn-register.sm, .btn-ecopyright.sm { padding: .55rem .9rem; border-radius: .6rem; }
.btn-register.lg, .btn-ecopyright.lg { padding: 1rem 1.35rem; border-radius: .9rem; }

/* Optional right alignment helper */
.cta-right { justify-content: flex-end; }

/* Optional topbar look (if used) */
.topbar-cta .btn-register, .topbar-cta .btn-ecopyright{
  padding: .5rem .9rem;
  border-radius: .6rem;
  box-shadow: none;
}

    </style>
</head>
<body>



<?php
  include("header.php");
  include("conferencenav.php");
?>
<div class="header-title">
    International Conference on Advances in Computational Intelligence and Applications - 2025 <br>
    <span style="font-size: 1.5rem;">Conference Date: 7th & 8th November 2025</span>
<!-- CTA Wrap (optional) -->
<div class="cta-wrap">
  <a href="https://forms.gle/XNFQ275JHWyYaS8w5" class="btn-register" aria-label="Register for ICACIA 2025" target="_blank">
    Register Now
  </a>

  <a href="eCopyRight_ICACIA2025.pdf"
     class="btn-ecopyright"
     target="_blank" rel="noopener"
     aria-label="Open e-Copyright Form">
    e-Copyright Form
  </a>
</div>

</div>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
  <div class="carousel-item active">
         <img src="images/eminentspeakers.png" class="d-block w-100" alt="Slide 1">

        </div>
        <div class="carousel-item">
            <img src="images/sliderpic12.png" class="d-block w-100" alt="Slide 2">

        </div>
        <div class="carousel-item">
            <img src="images/sliderpic15.png" class="d-block w-100" alt="Slide 3">

        </div>
        <!-- Repeat for 8 slides -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div STYLE="height: 5vh;"></div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8" style="margin-right: 10px;">
            <p style="color: #357ec7;font-size: 20px;"><strong>ABOUT THE CONFERENCE</strong></p>
            <p style="text-align: justify;">The International Conference on Advances in Computational Intelligence and Applications (ICACIA) 2025 is 
            a flagship conference of the Institute of Information Technology and Management, New Delhi. The primary goal of the ICACIA-2025 
            is to bring together scholars from across all fields of Machine Learning, Fuzzy Systems, Evolutionary Computation and allied research area, 
            on a single platform to present their research ideas. The goal of ICACIA-2025 is to give an ideal environment for the researchers from the 
            academia, research laboratories, and stakeholders from the industry across the world to share their insights.).</p>
            <p style="text-align: justify;">Furthermore, the conference intends to provide chances for developing 
            research relations and discovering new partners on a worldwide scale. The ICACIA-2025 
            conference invites creative and original research papers that have not been submitted to 
            another journal or conference for publication or other consideration.).</p>
            <p style="text-align: justify;"><strong>Objectives</strong></p>
            <p style="text-align: justify;">
                <ul style="list-style-position: outside;">
                    <li>To provide a global platform for researchers, academicians and industry experts to share their researches, 
                    future opportunities and latest innovation in the various fields of Artificial Intelligence, Big Data, Block Chain, 
                    Internet Of Things, Cyber Security And Data Privacy, Networks and Data Communication, Data Science and Engineering.</li>
                    <li>It will energize the conversation, dispersal of data, trade of thoughts, and collaboration among the participants.</li>
                </ul>
            </p>
            <p style="text-align: justify;">The conference will cover a wide range of topics related to Computer Science, including but not limited to:</p>
        </div>
        <div class="col-md-3">
            <p style="color: #357ec7;font-size: 20px;"><strong>PUBLISHING AND INDEXING</strong></p>
            <p style="text-align: justify;">Accepted papers will be submitted for inclusion into Springer.</p>
            <p style="color: #357ec7;font-size: 20px;"><strong>IMPORTANT DATES</strong></p>
<!-- <p style="text-align: justify; margin: 2px 0; line-height: 1.2;">Submission of Abstract</p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>June 7, 2025</strong></p> -->
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;">Submission of Full Length Paper</p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>August 18, 2025</strong></p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;">Paper Acceptance Notification</p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>September 20, 2025</strong></p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;">Submission of Final Copy of Paper</p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>October 4, 2025</strong></p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;">Registration Deadline</p>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong><span style="color:red;"><strike>October 4, 2025</strike></span></strong><br>October 10, 2025</p>
<hr>
<p style="text-align: justify; margin: 2px 0; line-height: 1.2;"><strong>Templates for Manuscript Preparation</strong></p>
    <ul style="padding-left: 18px; font-size: 14px;">
        <li>
            <a href="downloads/Microsoft+Word+Proceedings+Templates.zip" target="_blank" download>Download Microsoft Word Template (.zip)</a>
        </li>
        <li>
            <a href="downloads/LaTeX2e+Proceedings+Templates+download (1).zip" target="_blank" download>Download LaTeX Template (.zip)</a>
        </li>
    </ul>
        </div>
    </div>
</div>
<!-- <div STYLE="height: 5vh;"></div>

 <div class="container mt-4" style="background: #f0ffff">
    <div style="text-align: center;">
        <p style="color: #357ec7;font-size: 20px;"><strong>EMINENT SPEAKERS</strong></p>
        <div class="row justify-content-center">
          
        <div class="col-md-2 text-center">
            <img src="speakers/DrRajkumarBuyya.png" alt="Speaker 1" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Dr. Rajkumar Buyya</strong><br>University of Melbourne, Australia</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrDebnath.jpg" alt="Speaker 1" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Narayan C. Debnath</strong><br>Eastern International University (EIU), Vietnam</p>
        </div>  
        <div class="col-md-2 text-center">
            <img src="speakers/DrJemal.png" alt="Speaker 2" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Jemal H. Abawajy</strong><br>Deakin University, Australia</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrSanjayMisra.png" alt="Speaker 3" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Sanjay Misra</strong><br>IFE, Halden, Norway</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrRytis_1.png" alt="Speaker 11" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof.(Dr.) Rytis Maskeliunas</strong><br>Kaunas University of Technology, Lithuania</p>
        </div>  
        <div class="col-md-2 text-center">
            <img src="speakers/DrDKLobiyal.jpg" alt="Speaker 4" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) D. K. Lobiyal</strong><br>JNU, India</B></p>
        </div>

    </div>
        <div class="row justify-content-center mt-3">
        <div class="col-md-2 text-center">
            <img src="speakers/DrPraveenChandra.jpg" alt="Speaker 5" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Pravin Chandra</strong><br>GGSIPU, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrVinodSharma.jpg" alt="Speaker 6" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Vinod Sharma</strong><br>University of Jammu, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrMansafAlam.png" alt="Speaker 7" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Mansaf Alam</strong><br>Jamia Milia Islamia, Delhi, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrAmitPrakash.jpeg" alt="Speaker 7" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Amit Prakash Singh</strong><br>GGSIPU, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrMPSBhatia.jpeg" alt="Speaker 8" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) M.P.S. Bhatia</strong><br>DTU, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/MrAmitSharma.png" alt="Speaker 9" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Mr. Amit Sharma</strong><br>Infosys, India</p>
        </div>
        <div class="col-md-2 text-center">
            <img src="speakers/DrRenuBalyan.jpg" alt="Speaker 10" class="speaker-img img-fluid rounded-circle" style="width: 120px; height: 120px;">
            <p><strong>Prof. (Dr.) Renu Balyan</strong><br>State University of New York, USA</p>
        </div>  

    </div>
    </div>
</div>

<div STYLE="height: 5vh;"></div> -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
     <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #1 INTELLIGENT SYSTEMS FOR SCALABLE BLOCKCHAIN AND WIRELESS SOLUTIONS</p>
        <ul>
<li>AI-Driven Blockchain Optimization</li>
<li>AI-Powered Consensus Algorithms for Scalable Blockchain Networks</li>
<li>Edge AI for Blockchain and Wireless Networks</li>
<li>5G and Blockchain Integration for Intelligent IoT Networks</li>
<li>Blockchain for Wireless Spectrum Management</li>
<li>Privacy-Preserving Machine Learning on Blockchain Networks</li>
<li>Decentralized Autonomous Networks (DANs) for Wireless Communication</li>
<li>Blockchain in Wireless Communication Security</li>
<li>Blockchain for Scalable Smart City Solutions</li>
<li>Blockchain-Enabled Distributed Wireless Mesh Networks</li>
<li>AI-Enhanced Consensus Protocols for Blockchain</li>
<li>Quantum Computing and Blockchain for Wireless Systems</li>
<li>Blockchain for Supply Chain and Logistics in Wireless Networks. </li>
<li>Scalable Blockchain for IoT and Wireless Sensor Networks: </li>
<li>AI-Enhanced Security for Blockchain and Wireless Networks:</li>
        </ul>
    </div>           
        </div>
        <div class="col-md-6">
    <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #2 COMPUTATIONAL INTELLIGENCE FOR CYBERSECURITY AND PRIVACY PRESERVATION</p>
        <ul>
                   <li>AI-driven Threat Detection and Behavioral Anomaly Analytics</li>
<li>Deep Learning for Malware Analysis and Classification</li>
<li>AI for Vulnerability Assessment, Penetration Testing, and Predictive Risk Management</li>
<li>Computational Models for Privacy Risk Assessment and Data Anonymization</li>
<li>Explainable AI (XAI) in Cybersecurity and Privacy Decision-making</li>
<li>AI for Security and Privacy in IoT and Edge Devices</li>
<li>AI for Secure and Privacy-aware Cloud Computing</li>
<li>Adversarial Machine Learning: Attacks, Defenses, and Privacy Implications</li>
<li>Quantum and Neuromorphic Computing for Cybersecurity</li>
<li>AI in Biometric Security and Privacy Protection</li>
<li>Automated Incident Response and AI-powered Digital Forensics</li>
<li>Secure Data Sharing and Privacy-preserving Analytics in Distributed Environments</li>
<li>Threat Intelligence Sharing and Collaborative Defense Using AI</li>
<li>Zero Trust Architectures Enhanced by Computational Intelligence</li>
<li>Domain-specific Privacy Preservation: AI in Healthcare and Finance</li>
        </ul>
    </div>            
        </div>
      <!--  <div class="col-md-4">
    <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #3 CYBER SECURITY AND DATA PRIVACY</p>
        <ul>
 <li>AI in Cybercrime: Lowering the Barrier for Bad Actors</li>
<li>Addressing Emerging Threats and Challenges</li>
<li>Proactive Cybersecurity Strategies for Financial and Critical Sectors</li>
<li>Security in Multi-Cloud and Hybrid Environments</li>
<li>Nature-inspired and Bio-inspired Cyber-defense</li>
<li>Social-inspired opportunistic mobile Cyber-systems</li>
<li>Cyber Forensics</li>
<li>The Future of Cybersecurity and Data Privacy</li>
<li>Security Automation and Orchestration</li>
<li>Privacy-Enhancing Technologies</li>
<li>Identity and Access Management (IAM)</li>
<li>Endpoint Security and Mobile Security</li>
        </ul>
    </div>            
        </div> -->
    </div>
   <!-- <div class="row">
        <div class="col-md-4">
     <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #4 BLOCKCHAIN AND WIRELESS COMMUNICATION</p>
        <ul>
<li>Blockchain Applications in Wireless Networks</li>
<li>Security and Privacy in Blockchain-Enabled Wireless Communication</li>
<li>Decentralized Applications (dApps) and Services in Wireless Communication</li>
<li>Blockchain for IoT in Wireless Communication</li>
<li>Blockchain in 5G/6G Wireless Networks</li>
<li>Blockchain for Secure Communication Protocols</li>
<li>Blockchain for Distributed and Collaborative Wireless Networks</li>
<li>Blockchain for Digital Assets and Tokenization</li>
<li>Blockchain Governance and Regulation</li>
<li>Blockchain in Web 3.0</li>
<li>The Future of Cryptocurrencies</li>
<li>Next-Generation Blockchain Protocols</li>
<li>Challenges and Future of Blockchain in Wireless Communication</li>
<li>Wireless Communication for Autonomous Systems</li>
<li>Wireless Communication and Health Care</li>
<li>Wireless Communication in Smart Homes and Buildings</li>
        </ul>
    </div>           
        </div>
        <div class="col-md-4">
    <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #5 DATA SCIENCE AND DATA ANALYTICS</p>
        <ul>
<li>Data science foundations and theories</li>
<li>Mathematics and statistics for data science and analytics</li>
<li>Understanding data characteristics and complexities</li>
<li>Machine/deep/statistical learning-based algorithms</li>
<li>Advanced analytics and knowledge discovery methods</li>
<li>Computer vision and pattern recognition</li>
<li>Optimization theories and methods</li>
<li>Large-scale databases, big-data processing, distributed processing, and ethical analytics</li>
<li>Model explainability and provenance</li>
<li>Theories and methods for evaluation, explanation, visualization, and presentation</li>
<li>Survey and review</li>
<li>Trustworthy and responsible data analytics</li>
<li>Data analytics for social good</li>
        </ul>
    </div>            
        </div>
        <div class="col-md-4">
    <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #6 BIG DATA ANALYTICS & CLOUD COMPUTING</p>
        <ul>
<li>Big Data Analytics Techniques</li>
<li>Cloud Computing for Big Data</li>
<li>Big Data Infrastructure & Platforms</li>
<li>Data Security, Privacy & Compliance in Cloud</li>
<li>Edge computing and its role in big data analytics</li>
<li>Quantum computing potential impact on big data analytics</li>
<li>Green computing impact of big data processing</li>
<li>Fault tolerance and reliability in cloud computing</li>
<li>Access control to cloud computing</li>
<li>Monitoring and auditing in cloud</li>
<li>Privacy-preserving machine learning and AI models</li>
<li>Distributed and federated datasets</li>
<li>Big data scheduling and optimization</li>
<li>Real-time data stream analysis</li>
        </ul>
    </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
     <div>
        <p style="color: #357ec7;font-size: 20px;">TRACK #7 AUGMENTED & VIRTUAL REALITY</p>
        <ul>
<li>Computer Vision</li>
<li>Image Processing</li>
<li>Medical Diagnosis</li>
<li>Human Computer Interaction</li>
<li>Brain-Machine Interface</li>
<li>Geographic Information Systems</li>
<li>Video Analysis</li>
<li>Segmentation Techniques</li>
<li>AR/VR Technologies and Platforms</li>
<li>AR/VR and Artificial Intelligence</li>
<li>AR/VR and the Metaverse</li>
        </ul>
    </div>           
        </div>
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
           
        </div>
    </div> -->

</div>

<div STYLE="height: 5vh;"></div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <p style="color: #357ec7;font-size: 20px;"><strong>ABOUT IITM</strong></p>  
            <p style="text-align: justify;">
                The Institute of Information Technology & Management (IITM) is affiliated to
                Guru Gobind Singh Indraprastha University (GGSIPU), New Delhi. IITM is accredited 
                Grade "A" by National Assessment and Accreditation Council (NAAC) & approved by AICTE. IITM is rated as Category 
                'A+' by SFRC & 'A' by Joint Assessment Committee (JAC) constituted by GGSIPU & 
                Directorate of Higher Education, Govt. of NCT of Delhi. IITM is recognized U/s 2(f) of UGC Act.
            </p>
            <p style="text-align: justify;">
                The institute offers AICTE approved Master of Computer Application (MCA) & 
                Master of Business Administration (MBA) and GGSIPU conducted 
                Bachelor of Business Administration (BBA), Bachelor of 
                Computer Application (BCA),Bachelor of Commerce -B.Com (Hons.) 
                and Bachelor of Journalism and Mass Communication (BA(JMC)) education programmes. The institute has been dedicated to Academic 
                Excellence in higher education for the last 25 years. We are working 
                towards developing highly skilled and competent human capital for industry, academia and business.
            </p>
        </div>
        <div class="col-md-4 text-center mt-4">
            <img src="images/campus.jpg" class="img-fluid rounded shadow" alt="Campus Image">
        </div>
    </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <a href="https://maps.app.goo.gl/bvzrJ9wBiBPAYqor8" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" target="_blank">
                    <img src="http://iitmjanakpuri.com/ICACIA2025/images/map.png" style= "height: 300px; width: 450px;"/>
                </a>
        </div>
        <div class="col-md-6">
            <address>
                <div style="text-align: center;  text-shadow: none;">
                    <p><b>Institute of Information Technology and Management</b><br> D-29, Institutional Area, Janakpuri,New Delhi-110058</p>
         		<p>Phone : +91/011-28525882, 28520239, 28525051</p>
         		<p>Mobile: 7982416019, 7906025772</p>
                       
                </div>
            </address>
        </div>
    </div>
</div>

<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
