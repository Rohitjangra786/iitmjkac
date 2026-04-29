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
        
        .coming-soon-section {
        height: 50vh;
        background: linear-gradient(135deg, #0078D7, #4590bf);
        padding: 50px 20px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    }
    .coming-soon-section h2 {
        font-size: 2.5rem;
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
    }
    .coming-soon-section p {
        font-size: 1.2rem;
    }
    .countdown-timer {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }
    .time-box {
        background: rgba(255, 255, 255, 0.2);
        padding: 15px;
        border-radius: 10px;
        width: 80px;
        text-align: center;
        font-size: 1.5rem;
        box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.3);
    }
    .time-box span {
        display: block;
        font-size: 2rem;
        font-weight: bold;
    }
    .time-box small {
        font-size: 0.9rem;
        opacity: 0.8;
    }
    
    
    .speaker-section {
            padding: 50px 0;
            background-color: #f8f9fa;
        }
        .speaker-card {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .speaker-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid #0078D7;
        }
        .speaker-info {
            flex: 1;
        }
        .speaker-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #0078D7;
        }
        .speaker-desc {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>


<?php
  include("header.php");
  include("conferencenav.php");
?>

<div style="height: 5vh;"></div>

<div class="container speaker-section">
    <h2 class="text-center mb-5 text-primary">Meet Our Speakers</h2>
    <div class="speaker-card">
        <img src="speakers/DrRajkumarBuyya.png" alt="Speaker 1" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Rajkumar Buyya, Director, Cloud Computing and Distributed Systems (CLOUDS) Laboratory, Australia</div>
            <div class="speaker-desc">
                <p style="text-align: justify">
Professor Rajkumar Buyya, Director of the Cloud Computing and Distributed Systems (CLOUDS) Laboratory 
at the University of Melbourne, is a globally recognized leader in cloud computing and distributed systems. 
With a Ph.D. in Computer Science from Monash University (2002), an M.E. from Bangalore University (1995), 
and a B.E. from the University of Mysore (1992), he has made pioneering contributions to the field. 
He has authored over 600 publications, with an h-index of 132 and more than 92,500 citations, 
earning prestigious awards such as the 2009 IEEE Medal for Excellence in Scalable Computing 
and being named a Web of Science Highly Cited Researcher in 2016 and 2017. His innovations, 
including the Aneka Cloud Platform, commercialized by Manjrasoft, have been widely adopted 
by industry leaders like IBM, HP Labs, Ericsson, Xerox PARC, and Fujitsu. He has founded 
several IEEE/ACM international conferences, including CCGrid, Cluster, and e-Science, 
and served as the founding Editor-in-Chief of IEEE Transactions on Cloud Computing. 
His leadership in the global cloud computing research community has earned him recognition, 
including the Chris Wallace Outstanding Researcher Award (2008) and the IEEE Distinguished 
Service Award (2008). As a Fellow of IEEE (2015), he continues to influence academia and 
industry through his research, curriculum development, and engagement in technological 
advancements. His work in developing scalable, energy-efficient, and service-oriented 
computing architectures has significantly shaped cloud computing, making the University of 
Melbourne a top research hub in this domain. His contributions to knowledge transfer, 
industry collaborations, and thought leadership in distributed systems make him one of 
the most influential figures in modern computing.

.</p></div>
        </div>
    </div>  
    <div class="speaker-card">
        <img src="speakers/DrDebnath.jpg" alt="Speaker 1" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Narayan C. Debnath, Founding Dean, School of Computing and Information Technology,
            Eastern International University (EIU), Vietnam</div>
            <div class="speaker-desc">
                <p style="text-align: justify">Professor Dr. Narayan C. Debnath is a distinguished academic and researcher 
in computer science, currently serving as the Founding Dean of the School of 
Computing and Information Technology at Eastern International University (EIU), 
Vietnam. With a Doctor of Science (D.Sc.) in Computer Science and a Ph.D. in Physics,
he has over four decades of experience in academia, including a 28-year tenure at 
Winona State University, USA. Dr. Debnath has made significant contributions to 
software engineering, artificial intelligence, and cybersecurity, establishing 
research labs and interdisciplinary programs globally. He has published extensively, 
with over 500 research papers, 40 book chapters, and more than 35 authored or edited books. 
His leadership roles include serving as the Director and former President of the International 
Society for Computers and Their Applications (ISCA), advancing international collaborations and
accreditation initiatives. Throughout his career, he has been instrumental in fostering student
engagement, faculty development, and global research partnerships, solidifying his impact 
on computer science education and research worldwide.

.</p></div>
        </div>
    </div> 
    <div class="speaker-card">
        <img src="speakers/DrJemal.png" alt="Speaker 1" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Jemal H. Abawajy, Professor, Deakin University, School of Information Technology, Australia</div>
            <div class="speaker-desc">
                <p style="text-align: justify">
Professor Jemal H. Abawajy is a distinguished faculty member at Deakin University's School of Information Technology, where he specializes in 
distributed computing, cybersecurity, information systems, and data science. Holding a Doctor of Philosophy from Carleton University and a 
Doctor of Science from Deakin University, he contributes significantly to advancing research in these fields. As part of the Faculty of Science, Engineering, and Built Environment, 
he is actively engaged with the Deakin Cyber Research and Innovation Centre. Professor Abawajy is available for supervision of both Masters by Research and PhD students, 
fostering academic excellence in cutting-edge technological domains.</p></div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrSanjayMisra.png" alt="Speaker 2" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Sanjay Misra, Senior Scientist at IFE, Halden, Norway</div>
            <div class="speaker-desc"><p style="text-align: justify">Dr. Sanjay Misra , a Sr. member of IEEE and ACM Distinguished Lecturer, 
            is a Senior Scientist at the Institute of Energy Technology(IFE), Halden, Norway. Before joining IFE, he was associated with the 
            Computer Science and Communication department of Østfold University College, Halden, Norway. He holds a PhD. in Information & Knowledge 
            Engg (Software Engg) from the University of Alcala, Spain & M.Tech.(Software Engg) from MLN National Institute of Tech, India. His expertise 
            is in the area of Applied Informatics (Cyber Security, Health Informatics, Software Engineering Applications, and Intelligent systems using AI 
            and computational techniques) and has been the publishing (- around 150 JCR/SCIE) in top journals. He has been amongst the top 2% of scientists 
            in the world (published by Stanford University) for the last three consecutive years, ranked no 2 in the whole of Africa in computer science 
            (as per Elsevier: Scival analysis during 2017-2022) and also got several awards for outstanding publications (2014 IET Software Premium Award (UK)), 
            TUBITAK-Turkish Higher Education, and Atilim University). He is Editor in Chief of Int J of Human Capital & Inf Technology Professionals(IGI), 
            IT Personnel and Project Management(IGI), and editor in various SCIE journals(Nature: Scientific Report((Impact Factor: 4.996), Elsevier: Alex. 
            Engineering((Impact Factor: 6.626, Q1 7/92)), edited several special issues and 80 books from Springer(65 LNCSs, 4 LNEEs, 3 LNNSs, 3 CCISs) , 
            10 IEEE proceedings and several books. He delivered more than 100 keynotes, invited talks and public lectures at reputed conferences and institutes (he traveled to more than 60 countries).</p></div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrRytis_1.png" alt="Speaker 11" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof.(Dr.) Rytis Maskeliunas, Kaunas University of Technology, Lithuania.</div>
            <div class="speaker-desc"><p style="text-align: justify">Prof. Dr. Rytis Maskeliunas currently 
            works as a full professor and as a chief researcher at the Faculty of Informatics in Kaunas University 
            of Technology, Lithuania, as well as an invited professor at the Faculty of Applied Mathematics in Silesian 
            University of Technology, Poland and Faculty of Informatics at Vytautas Magnus University. His primary area of 
            scientific research is the application of contemporary artificial intelligence technologies for medical multimodal
            signal processing, with a particular focus on the analysis, screening and diagnosis of neurological impairments, 
            where he was awarded “Innovation of the year award” for his studies in the classification of neurological diseases 
            in 2023 and 2021. He is an author /co-author of over 200 refereed research publications (WOS H=32, ORCID 0000-0002-2809-2213). 
            Rytis served as the National Expert @ European Horizon-ICT Committee with experience in multiple International research organizations, 
            as well as an editor/reviewer/committee member for various International journals. He has coordinated / participated in multiple 
            research projects in the Computer Science domain and was involved in the EU COST actions 278, 2102, IC1002, CA15122, CA16101 and 
            currently is an MC member in CA19136 and 22136. In his field Rytis has an experience of supervising 8 Ph.D. students.
            </p>
            </div>
        </div>
    </div>  

    
    
    
    
    
    
    
    
    
    <div class="speaker-card">
        <img src="speakers/DrDKLobiyal.jpg" alt="Speaker 6" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) D. K. Lobiyal, Professor, JNU, Delhi, India</div>
            <div class="speaker-desc"><p style="text-align: justify">Dr. D.K. Lobiyal is a distinguished professor at the School of Computer & Systems Sciences, 
            Jawaharlal Nehru University, New Delhi. With a Ph.D. in Computer Science from JNU (1996), he has made significant 
            contributions to research in wireless sensor networks, mobile ad-hoc networks, and natural language processing. Over his career, 
            he has supervised numerous Ph.D. and M.Tech students and has co-investigated research projects funded by prestigious agencies. 
            Dr. Lobiyal has an extensive publication record in reputed journals and conferences and has played a key role in academic curriculum 
            development and conference organization. His expertise in data communication, wireless networks, and computational linguistics is widely 
            recognized, making him a prominent figure in the field of computer science research. </p></div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrPraveenChandra.jpg" alt="Speaker 1" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Pravin Chandra, Professor, GGS IP University, Delhi, India</div>
            <div class="speaker-desc">
                <p style="text-align: justify">
Dr. Pravin Chandra, a Professor at the 
University School of Information & Communication Technology, 
specializes in Computer Applications with research interests spanning Artificial Neural Networks, 
Algorithm Design, Database Management, Theoretical Computer Science, and Stochastic Processes. 
Holding a Ph.D., M.Sc. in Physics from the University of Delhi, and M.Tech. in Computer 
Applications from the Indian School of Mines, Dhanbad, he has extensive teaching experience, 
including roles at Lal Bahadur Shastri Institute of Management and the University of Delhi. 
His doctoral research focused on sigmoidal functions in feedforward artificial neural networks, 
contributing to advancements in computational intelligence and decision-making systems.</p></div>
        </div>
    </div>    
          
    <div class="speaker-card">
        <img src="speakers/DrVinodSharma.jpg" alt="Speaker 7" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Vinod Sharma, Director, Ramnagar Campus, University of Jammu, India</div>
            <div class="speaker-desc"><p style="text-align: justify">Dr. Vinod Sharma is a distinguished 
            Professor of Computer Science and IT at the University of Jammu. With a deep commitment to education 
            and research, he has made significant contributions through numerous publications in SCI and 
            Scopus-indexed journals. His research primarily focuses on artificial intelligence, machine learning, and deep learning, driving innovations in these fields. </p>
            <p style="text-align: justify">
                As the Head of the Department of Computer Science & IT, Dr. Sharma has played a crucial 
                role in enhancing the curriculum and research initiatives, ensuring alignment with global IT trends. 
                His leadership extends further as the Director of both the Poonch and Ramnagar 
                campuses, where he has actively worked towards expanding educational opportunities.
            </p>
            </div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrMansafAlam.png" alt="Speaker 4" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Mansaf Alam, Professor, Department of Computer Science, Jamia Milia Islamia, Delhi, India</div>
            <div class="speaker-desc">
                <p style="text-align: justify">Professor Mansaf Alam is a leading academic in Computer Science at Jamia Millia Islamia, 
            specializing in Artificial Intelligence, Big Data Analytics, Machine Learning, and Cloud Computing. With a Ph.D.
            from Jamia Millia Islamia and an MCA from Aligarh Muslim University, he has authored several books and published 
            extensively in top journals and conferences. He received the Young Faculty Research Fellowship and holds 
            an international patent for an AI-based Smart Dustbin. As Editor-in-Chief of the Journal of Applied Information Science, he actively contributes as a reviewer and editorial board member for esteemed journals.</div>
            </p>
        </div>
    </div>   
    
    
        <div class="speaker-card">
        <img src="speakers/DrAmitPrakash.jpeg" alt="Speaker 4" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Amit Prakash Singh, Professor, GGSIP University, Delhi, India</div>
            <div class="speaker-desc">
                <p style="text-align: justify">Dr. Amit Prakash Singh is working as Professor in 
                University School of Information, Communication & Technology. He has 
                joined GGS Indraprastha University as a Lecturer in July 2001 and promoted 
                as Senior Lecturer in July 2006. He has been promoted as Associate Professor 
                in 2012 and Professor in 2015. He obtained Ph.D. degree in Information Technology 
                from Guru Gobind Singh Indraprastha University, Delhi in 2011. His research
                work in the area of Artificial Neural Networks. He obtained M.Tech 
                (Computer Science and Engineering) from Guru Jambheswar University, 
                Hissar and M.Sc.(Electronics) from Sardar Patel University, Vallabh Vidyanager, Gujrat.
He has earlier worked as Lecturer in University of Hyderabad and Banasthali Vidyapeeth. 
His area of interest are Artificial Neural Network, Machine Learning and Data Science.
He had developed laboratory and course curriculum of Embedded System Design and 
Digital System Design for B.Tech and M.Tech. Students. He is a member 
of IEEE, IETE, CSI, VLSI Society of India and Indian Microelectronics Society.
He has published more than 50 Research papers in International/National Journals 
and attended various National/ International Workshops and Conferences. 
Dr. Singh visited UK, Portugal, Singapore & Thailand to present his research work in international conferences </p>
        </div></div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrMPSBhatia.jpeg" alt="Speaker 3" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) M.P.S. Bhatia</div>
            <div class="speaker-desc">
                <p style="text-align: justify">
                    He received his Ph.D. degree in computer engineering from the Faculty of Technology at the University of Delhi, 
                    New Delhi, India. He is currently a full Professor with the department of computer science and engineering, 
                    Netaji Subhas University of Technology, New Delhi, India.  He has presented several papers in international 
                    conferences and published work in peer-reviewed journals. He has guided many doctorates and MTech thesis. 
                    His research interests include the area of data science, social media analytics, pervasive healthcare, and cybersecurity.
                </p>
            </div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/MrAmitSharma.png" alt="Speaker 5" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Mr. Amit Sharma, Senior Principal Data Architect, Infosys, Gurugram, Haryana, India </div>
            <div class="speaker-desc">
               <p style="text-align: justify">Amit Sharma, based in Gurugram, HR, India, is a seasoned technology leader
               with extensive experience in data and analytics. Currently serving as a Senior Principal Architect at Infosys, 
               he has been a key contributor to the company's growth since 2008, progressing through roles in business intelligence, 
               data warehousing, and big data analytics. With an MCA from Motilal Nehru National Institute of Technology and a B.Sc. (Hons) in 
               Chemistry from Hans Raj College, Delhi University, Amit combines technical expertise with a strong analytical foundation. His career reflects a 
               deep commitment to driving innovation and delivering impactful data-driven solutions.</p>
            </div>
        </div>
    </div>
    <div class="speaker-card">
        <img src="speakers/DrRenuBalyan.jpg" alt="Speaker 8" class="speaker-img">
        <div class="speaker-info">
            <div class="speaker-name">Prof. (Dr.) Renu Balyan, State University of New York College, New York, United States.</div>
            <div class="speaker-desc"><p style="text-align: justify">Dr. Renu Balyan is an Assistant Professor in the Department of Mathematics, 
            Computers and Information Sciences at the State University of New York (SUNY) at Old Westbury. She completed her doctorate in 
            Machine Translation Evaluation from IIT Delhi in 2016 with a summer internship at Dublin City University, Ireland. She has 
            more than two decades of valuable experience in academia, research organizations, and IT industry. Dr. Balyan’s primary 
            research focuses on natural language processing (NLP), machine learning (ML), Deep Learning (DL) and the application of 
            computational tools and ML/DL algorithms for health and educational data. She is working on research projects using 
            intelligent tutoring systems (ITSs), developing ML/DL algorithms for assessing text difficulty for health data, 
            creating patient-physician profiles based on their shared communication (secure messages) and building NLP models 
            for minority low-literacy patients (specifically Hispanic breast cancer survivors). Her other related areas of 
            research include Named Entity Recognition (NER), Question Asking, Question Answering, Summarization, 
            Text Generation, Opinion Mining, Speech Processing and Machine Translation. Dr. Balyan has worked on 
            several Govt. of the United States federal projects funded by National Science Foundation (NSF), 
            Institutes of Education Sciences (IES), National Institute of Health (NIH) and Office of 
            Naval Research. She is currently the Principal Investigator (PI) for 3 research projects 
            funded by the NSF and working with 5 undergraduate and graduate students. She has over 
            50 publications in journals, book chapters and conference proceedings with approximately 
            500 citations and serves as a reviewer on several AI, NLP, Health and Education journals 
            and is on the program committee for several international conferences.
            </p>
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
