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
    <h2 class="text-center text-success mb-4">Conference Tracks</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #1 INTELLIGENT SYSTEMS FOR SCALABLE BLOCKCHAIN AND WIRELESS SOLUTIONS</h5>
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
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #2 COMPUTATIONAL INTELLIGENCE FOR CYBERSECURITY AND PRIVACY PRESERVATION</h5>
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
     <!--   <div class="col-md-4">
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #3 CYBER SECURITY AND DATA PRIVACY</h5>
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
 <!--   <div class="row mt-3">
        <div class="col-md-4">
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #4 BLOCKCHAIN AND WIRELESS COMMUNICATION</h5>
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
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #5 DATA SCIENCE AND DATA ANALYTICS</h5>
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
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #6 BIG DATA ANALYTICS & CLOUD COMPUTING</h5>
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
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="p-3 border rounded bg-light shadow-sm">
                <h5 class="text-primary">TRACK #7 AUGMENTED & VIRTUAL REALITY</h5>
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
    </div> -->
</div>

<?php
  include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
