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
<div class="container-fluid pl-0 pr-0">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <h2 style="text-align:center"> COMMITTEES</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="container jumbotron text-justify list">
               <!-- <h3 style="color:#003366;">Patron</h3>
                <ol>
                    <li><span class="stp1">Hon'ble Prof. Yogesh Singh</span>, <span class="stp2">Vice Chancellor, Delhi Technological University, Delhi, India (awaited)</span></li>
                </ol>
                
                <h3>Patron</h3>
                <ol>
                    <li>Hon'ble Prof. Yogesh Singh, Vice Chancellor, Delhi Technological University, Delhi, India</li>
                </ol>
                <h3 >General Chair</h3>
                <ol>
                     <li>Prof. Arvinder Kaur, Dean, University School of Information and Communication Technology, GGSIPU, Delhi, India</li>
                </ol>
                <h3 >Honorary Chair(s)</h3>
                <ol>
                <li>Prof. Janusz Kacprzyk, Head, Intelligent Systems Laboratory, System Research Institute, Polish Academy of Sciences, Warsaw, Poland</li>
		    <li>Prof. Subhas Mukhopadhyay, School of Engineering Macquarie University, Sydney, Australia</li>
		     <li>Dr. (Mrs.) Saroj Kaushik, Professor, Dept of CSE, Indian Institute of Technology Delhi, India</li>
              <li>Prof. B.K. Panigrahi, Dept. of Electrical Engineering, Indian Institute of Technology Delhi, India.</li> 

                </ol>

                <h3>Program Chair(s)</h3>
                <ol class="list">
                <li>Prof. Sandeep K Sood, GNDU RC, Gurdaspur, Punjab, India</li>
                <li>Prof. Amit Prakash Singh, USICT, GGSIPU, Delhi, India</li>
                <li>Prof.(Dr.) Sudhir Kumar Sharma, IITM, Delhi, India</li>
                </ol>
                <h3>Publication Chair(s)</h3>
                <ol class="list">
                    <li>Prof. Nagender Kumar Suryadevara, University of Hyderabad, India</li>
                <li>Dr. Pradeep K Singh, Jaypee University of Information Technology, Solan, HP, India</li>
                 
                </ol>
                <h3>Technical Advisory Committee</h3>
                <ol class="list">
                    
                      <li>Prof. Dr. Ajith Abraham, Machine Intelligence Research Labs (MIR Labs), Auburn, Washington, USA</li>            
                    
               <li>Prof. (Dr.) Marcin Paprzycki, SRI, Polish Academy of Sciences, Warsaw, Poland</li>
               <li>Prof. (Dr.) Maria Ganzha, University of Technology, Warsaw, Poland</li>
               <li>Prof. Kusum Deep, Department of Mathematics, Indian Institute of Technology, Roorkee, India.</li>
		    <li>Prof. Margarita N. Favorskaya, Head of Department of Informatics and Computer Techniques, Reshetnev Siberian State University of Science and Technology, Russian Federation, Russia.</li>
		   <li>Dr. Narayan C.Debnath, ISCA, USA and School of Computing and Information Technology, Eastern International University, Vietnam</li>
		   <li>Prof. Poonam Bedi, Department of Computer Science, University of Delhi, New Delhi, India</li>
		     <li>Prof. Navin Rajpal, USICT, GGSIP University, New Delhi, India</li>
		 
		      <li>Prof. Satbir Jain, Netaji Subhash Institute of Technology, Delhi, India</li>
		    
		
		<li>Dr. Nilanjan Dey, Techno India College of Technology, Kolkata, India</li>
		<li>Prof. M Afshar Alam, Head Department of CSE, Jamia Hamdard University, New Delhi, India</li>
		<li>Dr. D. K. Lobiyal, Jawaharlal Nehru University, Delhi, India</li>
		<li>Dr. Arun Sharma, IGDTUW, New Delhi, India</li>
		  <li>Prof. Ravinder Kumar, HMR Institute of Technology and Management, GGSIPU, Delhi, India</li>
		    <li>Prof. (Dr.) Sanjay Misra, Department of Electrical and Information Engineering, Covenant University, Ota, Nigeria</li>
		<li>Dr. Mansaf Alam, Jamia Milia Islamia, Delhi, India</li>
		
                </ol> -->
                <h3>Convener (s)</h3>
                <ol class="list">
                   <li>Prof.(Dr.) Ganesh Kumar Wadhwani, IITM Delhi India</li>
                   <li>Dr. Pankaj Varshney, IITM, Delhi, India</li>
                </ol>

                
                <h3>Co-Convener (s)</h3>
                <ol class="list">
                <li>Dr. Manzoor Ansari, , IITM, Delhi, India</li>
                <li>Ms. Leena Gupta, IITM, Delhi, India</li>
                <li>Ms. Kavita Srivastava, IITM, Delhi, India</li>
                <li>Ms. Komal Sharma, IITM, Delhi, India</li>
                </ol>	
                <h3>Finance Chair (s)</h3>
                <ol class="list">
                    <li>Mr. Ashish Kumar Nayyar, IITM, Delhi, India</li>
                    <li>Ms. Anjali Chauhan, IITM, Delhi, India</li>
                </ol>
                <h3>Publicity Chair (s)</h3>
                <ol class="list">
                   <li>Dr. Ramandeep Kaur, IITM, Delhi, India</li>
                   <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
                </ol>
             <!--   <h3>International Advisory Committee</h3>
                <ol class="list">
                    <li>Dr. Abdennour El Rhalibi, Liverpool John Moores University, UK </li>
                <li>Prof. Afaq Ahmad, Department of Electrical & Computer Engineering, College of Engineering, Sultan Qaboos University, Muscat, Oman</li>
	<li>Dr Aladdin Ayesh, De Montfort University, UK</li>
<li>Dr. Alexander Gelbukh, National Polytechnic Institute, Mexico </li>
<li>Dr. Atta ur Rehman Khan, Associate Professor,   Faculty of Computing and Information Technology, Sohar University Oman</li>
<li>Dr. Abhijit Sen, Kwantlen Polytechnic University, Canada</li>
<li>Dr. Al-Dabass, David, School of Computing & Informatics, Nottingham Trent University, Nottingham</li>
<li>Prof. Atma Sahu, Mathematics & Computer Science, Coppin State University, 2500 W. North Avenue,Baltimore MD 21216</li>
<li>Dr. Bharat Bhargava, Purdue University, USA</li>
<li>Dr. Bidyut Gupta, Southern Illinois University, USA</li>
<li>Dr. Bimlesh Wadhwa, School of Computing, National University of Singapore </li>
<li>Dr. Bishwajeet Pandey, Gran Sasso Science Institute, Department of Computer Science, L&apos;Aquila, Italy</li>
<li>Dr. Daniel Rieseo, National University Of San Luis, Argentina</li>
<li>Dr. Dinesh Sharma, University of Maryland, Eastern Shore,  Princess Anne, MD, USA </li>
<li>Dr. Emre Erturk, Principal Academic &minus; Computing, EIT New Zealand</li>
<li>Dr. Francesco Masulli, Temple University, USA </li>
<li>Prof. Gongzhu Hu, Department of Computer Science, Central Michigan University, Mount Pleasant, MI 48859, USA</li>
<li>Dr. German Montejano, National University Of San Luis, Argentina </li>
<li>Dr. Gurdeep Hura, Department of Math and Computer Science, University of Maryland Eastern Shore,Engineering and Aviation. Science Complex Building (EASC) </li>
<li>Prof. Gongzhu Hu, Department of Computer Science, Central Michigan University, USA</li>
 <li>Dr. S. Karuppayah, Technische Universitat Darmstadt, Germany <li>
<li>Dr. Kaimrul Hawari, Universiti Malaysia Pahang, Malaysia </li>
<li>Dr. Kanika Singh, American Bureau of Shipping, Korea</li>
<li>Dr. Kishore Trivedi, Department of Electrical and Computer Engineering , Duke University, Science Drive, 203 Hudson EngCtr, Durham, NC 27708-0291</li>
<li>Dr.  Loan-Cosmin, AlexandruIoan Cuza, Police Academy, Romania</li>
<li>Dr. Marisa da Silva Maximiano, Departamento de Engenharia Informatica, ESTG&minus;IP Leiria, Portugal </li>

<li>Dr. Mohd Helmy Abd Wahab, UniversitiTun Hussein Onn Malaysia, Malaysia</li>
<li>Dr.  Narayan C.Debnath,  ISCA, USA and School of Computing and Information Technology, Eastern International University, Vietnam</li>
<li>Dr. Pao-Ann Hsiung, National Chung Cheng University, Taiwan</li>
<li>Dr. Pljonkin Anton, Institute of Computer Technologies and Information Security, Southern federal University, Russia </li>
<li>Dr. Prabhat Mahanti, Department of Computer Science, Hazen Hall Room 316, University of New Brunswick, Saint John, New Brunswick, Canada E2L 4L5"</li>

<li>Dr. Ramzi Haraty, Lebanese Amarican University, Lebanon<li>
<li>Dr. Ravindra Hegadi, Department of Computer Science, Solapur University, Solapur, Maharashtra, India</li>
<li>Dr. Safeeullah Soomro, AMA International University, Bahrain<li> 
<li>Dr. Selvakumar Manickam, Universiti Sains, Malaysia  <li>

<li>Prof. S.R. Subramanya, School of Engineering and Computing, National University, San Diego, CA</li>

<li>Dr. Subramaniam Ganesan, Real Time Embedded DSP Systems Lab,115 Library Drive, Room EC 440, Oakland University Rochester, MI 48309 USA</li>
<li>Dr. Sultan Aljahdali, Taif University, Saudi Arabia</li>
<li>Dr. Takaaki Goto, Ryutsu Keizai University, Japan</li>
<li>Dr. Zdzislaw Polkowski, Jan Wyzykowski University Polkowice, Poland </li> 
<li>Dr. Xiao-Zhi Gao, School of Computing University of Eastern Finland<li>
                </ol>
                <h3>National Advisory Committee</h3>
                <ol class="list">
        <li>Prof.  S.S. Agarwal, Director, IITM, New Delhi, India</li>
        <li>Prof. C.P. Chawla, Director General, IINTM, Delhi, India</li>
        
        
      


        	<li>Prof. Abdul Q. Ansari, Vice Chairman and MD Chair, IEEE Delhi Section, Delhi, India</li>
		<li>Prof. A. K. Nayak, Vice President, CSI, India</li>
        <li>Prof. A. K. Saini, USMS, GGSIP University, New Delhi, India</li>
        <li>Sh. A.S.A. Krishnan, CERT, MeitY, India</li>
        <li>Mr. Ajay Prakash, MeitY, India</li>
        <li>Dr. Amrendra Kumar Mishra , IARI, New Delhi, India</li>
        <li>Dr. Anil Kaushik, MeitY, India</li>
        <li>Dr. Anirban Sarkar, National Institute of Technology-Durgapur, India</li>
        <li>Smt. Anu Khosla , DRDO, India</li>
        <li>Dr. Arvind Kumar, Cyber Security R&amp;D, MeitY, India</li>
            <li>Mr. Arvind Kumar, Director, System Engineering Mavenir, Richardson, USA</li>
            	<li>Prof. Ashutosh Kumar Singh, HOD, NIT, Kurukshetra, India</li>
        <li>Sh. B.M. Baveja, R &amp; D, CC&amp;BT, MeitY, India</li>
        <li>Prof. B.V. Ramana Reddy, USICT, GGSIP University, New Delhi, India</li>
        	<li>Dr.  Bhaba Ranjan Sarmah, Vice President, ISTE, New Delhi</li>
        <li>Prof. Bijendra Kumar, NSIT, New Delhi, India</li>

        <li>Mr. Chand Veer Singh, Senior Technical Specialist, Sony India Pvt Ltd. Bangalore, India</li>
        <li>Prof. C.S. Rai, USICT, GGSIP University, New Delhi, India</li>
        <li>Prof.  C.K. Jha, Banasthali Vidyapith, Rajasthan, India</li>
        <li>Dr. D.K. Lobiyal, JNU, Delhi, India</li>
        <li>Dr. D.P. Vidyarthi, JNU, Delhi, India</li>
        <li>Prof. Deepak Garg, Bennett University, Noida, India</li>
        <li>Prof. G.N. Purohit, Banasthali Vidyapith, Rajasthan, India</li>
        <li>Prof. Gaurav Gupta, MeitY, India</li>
        <li>Mr. Gautam Mohapatra, CSI, India</li>
        <li>Dr.  G. S. Agrawal, Retd.	IIT Roorkee, India</li>
        <li>Dr. K. P. Singh, DRDO, India</li>
        <li>Dr. K. R. Murli Mohan, Head (Big Data Initiative), Department of Science and Technology, New Delhi, India</li>
        	<li>Prof. K. Subramanian, Chairperson, IEEE Delhi Section, Delhi, India </li>
        <li>Prof. (Dr.) K. T. V. Reddy, President, IETE, Delhi, India</li>

        <li>Dr. Karan Singh, JNU, Delhi, India</li>
        <li>Prof. M. N. Hoda, BVICAM, New Delhi, India</li>
        <li>Prof. M. P. S. Bhatia, NSIT, New Delhi, India</li>
        	<li>Dr Manivannan Kaliappan, Vice President, ISTE, New Delhi, India</li>
        	
        <li>Prof. Muhammad Abulaish, South Asian University, Delhi, India</li>
        <li>Prof. Naveen Kumar, Delhi University, India</li>
      
        <li>Dr. Neelima Gupta, Delhi University, India</li>
        <li>Prof. Neeraj Bhargava, MDS University, Rajasthan, India</li>
        <li>Prof. Nupur Prakash, USICT, GGSIP University, New Delhi, India</li>
        <li>Mr. P. K. Hazra, USICT, GGSIP University, New Delhi, India</li>
        <li>Dr. P. K. Saxena, DRDO, India</li>
        <li>Prof.  Pratapsinh Kakaso Desai, President, ISTE, Kolhapur, India</li>
        	<li>Dr. Priyanka Rathee, M/EO, IEEE Delhi Section, , Delhi, India </li>
        <li>Prof. (Retd.) P.S. Grover, Delhi University, India</li>
        <li>Prof. Parimala N., JNU, Delhi, India</li>
        <li>Prof. Pravin Chandra, USICT, GGSIP University, New Delhi, India</li>
        <li>Dr. Punam Bedi, Delhi University, India</li>
        <li>Dr. R.K. Agrawal, JNU, Delhi, India</li>
        <li>Shri R. K. Vyas, Co-Chairman, TPPC, IETE, Delhi, India</li>
      
        	<li>Prof.  Radhey S Gupta, Maharaja Agrasen Institute of Technology, New Delhi, India</li>
        <li>Prof. Rahul Garg, IIT Delhi</li>
        <li>Prof. Rahul Rishi, UIET, MDU, Rohtak, India</li>
        <li>Prof. Rajeev Kumar, JNU, Delhi, India</li>
        <li>Sh. Rakesh Yadav, DRDO, India</li>
        <li>Dr. Ranjit Singh, ISTE,  Dwarka, New Delhi, India</li>
        <li>Prof. S. Balasundaram, JNU, Delhi, India</li>
        <li>Dr. S. K. Muttoo, Delhi University, India</li>
        <li>Dr. S. K. Pal, Director, Directorate of Information Technology and Cyber Security, DRDO Bhawan, New Delhi, India</li>
        <li>Dr. Suryadevara Nagender Kumar,  Professor, University of Hyderabad, India</li>
        <li>Prof. S.S. Agrawal, KIIT Group of Colleges, Gurugram, Haryana, India</li>
        <li>Prof. Saroj Kaushik, IIT Delhi, India</li>
        <li>Prof. Satbir Jain, NSIT, New Delhi, India</li>
                <li>Dr. Sarika Jain, NIT Kurukshetra, India</li>

        <li>Prof. Satish Chand, JNU, Delhi, India</li>
        

        <li>Mr. Satya Prakash Singh, Standing Committee, IEEE Delhi Section, Delhi, India</li>
        	<li>Dr. Shabana Urooj, Joint Secretary, IEEE Delhi Section, Delhi, India </li>
        <li>Prof. Shampa Chakraverty, NSIT, New Delhi, India</li>
        <li>Dr. Soamnath Chandra, MeitY, India</li>
        <li>Prof. Sonajharia Minz, JNU, Delhi, India</li>
        <li>Dr. Soumya Sen, Calcutta University, India</li>
        <li>Prof. Srinivasan, DRDO, India</li>
        <li>Prof. Sunil Khatri, Amity University, Noida, India</li>
        <li>Dr. Suvamoy Changder, National Institute of Technology-Durgapur, India</li>
        <li>Ms. Swaran Lata, MeitY, India</li>
        <li>Dr. T.V. Vijay Kumar, JNU, Delhi, India</li>
        <li>Prof. V.K Jain, CET, MUST, Sikar, Rajasthan, India</li>
        <li>Dr. V.K. Panchal, DTRL, DRDO, New Delhi, India</li>
        <li>Dr. V.V.Subrahmanyam, IGNOU, Delhi, India</li>
        <li>Dr. Vandana Singh, Office-incharge, Department of Science and Technology, New Delhi, India</li>
        <li>Prof. Vasudha Bhatnagar, Delhi University, India</li>
        <li>Prof. Vikram Singh, CDLU, Sirsa, Haryana, India</li>
        <li>Prof. Vinay Kumar Goel, Chandigarh University, India</li>
            <li>Mr. Yogesh Sharma, Co-founder &amp; CEO, Mamsys, Noida, India</li>
        <li>Prof. Yudhvir Singh, UIET, MDU, Rohtak, India</li>
        <li>Prof. Vijay D. Vaidya, Executive Secretary, ISTE , Kolhapur, Maharashtra, India
        </li>
        <li>Dr. Vijay Janyani, MNIT Jaipur, India</li>
        <li>Dr. Vinay Kumar, Honorary Secretary, CSI Delhi, India </li>
        <li>Mr. Vivek Varshney, Vivtra Technologies and Solutions Pvt. Ltd., India</li>
        	<li>Dr. V. R. Singh, M/EO, IEEE Delhi Section, , Delhi, India </li>
        		<li>Dr Zahid Raza, JNU, Delhi, India</li>
                </ol>
                <h3>Technical Program Committee</h3>
                <ol>
                    
                    
                  
	<li>Dr. A. C. S. Rao, Department of CSE, IIT(ISM) Dhanbad, India</li>
	<li>Prof. (Dr.) Ajay Kr. Singh, Meerut Institute of Engineering and Technology (MIET), Meerut, India</li>
      
                <li>Dr.  A K Mohapatra, Indira Gandhi Delhi Technical University for Women (IGDTUW), Delhi, India</li>
<li>Prof.  A Murali M Rao, IGNOU, Delhi, India</li>
<li>Prof. Abhishek Bhattacharya, IEM, Kolkata, India</li>
<li>Dr. Aditi Sharan, JNU, Delhi, India</li>
<li>Prof. Aditya Pratap Singh, Ajay Kumar Garg Engineering College, Ghaziabad, India</li>
<li>Dr. Ajay Shankar Singh, Galgotias University, Noida, India</li>
<li>Dr. Akshi Kumar, CSE, DTU, Delhi, India.</li>
<li>Dr. Amit Banerjee, South Asian University, Delhi, India</li>
<li>Dr. Amjan Sk, B. V. Raju Institute of Technology, Narsapur, Medak, Telangana, India</li>
<li>Prof. Amit Prakash Singh, GGSIPU, Delhi, India</li>
<li>Ms. Amita Yadav, Maharaja Surajmal Institute of Technology, New Delhi, India	</li>
<li>Prof. Anil Ahlawat, KIET, Ghaziabad, India</li>
<li>Dr. Anil Arora, Thapar University, Punjab, India</li>
<li>Dr.  Anirban Das, CEO,	StartXlab, Delhi, India</li>
<li>Prof. Anish Gupta, Amity University Greater Noida, India</li>
<li>Dr.  Anju Saha, GGSIPU, Delhi, India</li>
<li>Dr. Anurag Jain, GGSIPU, Delhi, India</li>
<li>Dr. Arpan Kumar Kar, IIT Delhi, India</li>
<li>Dr. Ashok Kumar Nanda, B. V. Raju Institute of Technology, Narsapur, Medak, Telangana, India</li>
	<li>Dr. Ashutosh Dixit, YMCA University, Faridabad, Haryana, India</li>
 
	<li>Dr. Aruna Malik, Galgotias University, Greater Noida, India</li>

<li>Dr. Arvind Selwal, Central University, Jammu, India</li>
<li>Dr.  Ashish Khanna, MAIT, GGSIPU, Delhi, India</li>
<li>Dr.  Asutosh Srivastava, JNU, Delhi, India</li>
<li>Dr. Atul Kumar, KIIT, Gurgaon, India</li>
<li>Prof. Atul Negi, University of Hyderabad, India</li>
<li>Dr. Ayesha Choudhary, JNU, Delhi, India</li>
<li>Dr. B B Gupta, NIT Kurukshetra, India		</li>
<li>Dr. Baijmath Kaushik, SMVDU,Jammu, India</li>
<li>Dr.  Banta Singh Jangra, NM Government College, Hansi, India</li>
<li>Prof. Pradeep Bhatia, GJUST, Hisar, India</li>
<li>Prof Dinesh Chotani, DTU, New Delhi, India</li>

<li>Dr.  Bashir Alam, Jamia Milia Islamia, India</li>
<li>Dr.  Buddha Singh, JNU,Delhi, India </li>
<li>Dr. M Chiranjeevi, B. V. Raju Institute of Technology, Narsapur, Medak, Telangana, India</li>
<li>Mr.  Danish Raza Rizvi, Jamia Milia Islamia, Delhi, india</li>
<li>Prof. Deepak Garg, Bennett University, Noida, India</li>
<li>Dr.  Deepak Gupta, GGSIPU, Delhi, India</li>

 <li>Dr. Deepika Garg, Associate Professor, School of Engineering, G D Goenka University, Sohna Road Gurgaon, Haryana, India</li>

<li>Prof. Deepshikha Bhargava, 	UPES, Dehradun, India	</li>


<li>Dr.  Devendra Kumar, Galgotias College of Engineering and Technology, Greater Noida, India</li>
<li>Dr. Dheerdhwaj, GITM, Kablana, Haryana, India </li>
<li>Dr. Dhirendra Banasthaki, Department of IT, DTU, New Delhi</li>
<li>Prof. Dwarkadas Kothari, Wainganga College of Engineering and Management, Nagpur, India</li>
<li>Dr Emmanuel S. Pilli, Malaviya National Institute of Technology, Jaipur, India</li>
<li>Mr.  Faiyaz Ahmad, Jamia Milia Islamia, Delhi, India</li>

<li>Prof.  Geetali Banerji, IINTM, Janakpuri, Delhi, India</li>
<li>Prof. Gwo-Jen Hwang, National Taiwan University of Science and Technology,Taiwan</li>
<li>Dr. Haider Banka, HOD- CSE, IIT(ISM), Dhanbad, India</li>
<li>Prof. Hammad Shafqat, Director, MEDENGG, Pakistan</li>
<li>Prof. Harish Mittal, Principal, BM institute of Engineering and Technology, GGSIPU, India</li>
<li>Prof. Hicham BERKOUK, University of Bejaia, Algeria</li>
<li>Prof. Hussain Falih Mahdi, National University Of Malaysia, Malaysia</li>




<li>Prof. Ioan-Cosmin Mihai, AlexanuIoanCuza, Police Academy, Romania</li>
<li>Mr.  Jawahar Lal, Jamia Milia Islamia, Delhi, India</li>
<li>Prof. Jitender Kumar Chhabra, NIT Kurukshetra, India</li>
<li>Dr. Jitender Kumar, DCRUST, Murthal, Sonipat, Haryana, India.</li>
<li>Prof. Joong Hoon Kim, Korea University, South Korea</li>
<li>Prof. Jyoti Moy Chatterjee, Asia Pacific University of Technology & Innovation, Kathmandu, Nepal</li>
<li>Dr. Kalpana Yadav, IGDTUW, Delhi, India	</li>
<li>Dr. Kamlesh Dutta, NIT Hamirpur, India.</li>
<li>Prof. Kanta Prasad Sharma, Rajiv Academy for Technology and Management, Mathura, India	</li>
<li>Dr. Karan Singh, JNU, Delhi, India</li>
<li>Dr.  Kashish Ara Shakil, Jamia Hamdard, Delhi, India</li>
	<li>Dr. Khalid Raja, Jamia Millia Islamia, Delhi, India</li>

<li>Dr. Kavita Choudhary, JK Lakshmipat University,  Jaipur, India</li>
<li>Dr.  Kavita, Jyoti Vidyapeeth Women's University, Jaipur, India</li>
<li>Prof.  Kavita Khanna, North Camp University Gurgaon, India</li>
<li>Prof. Kazumi Nakamatsu, University of Hyogo, Japan</li>



<li>Dr.  Khalid Raza, Jamia Milia Islamia, Delhi, India</li>
<li>Dr. Konstantin Rumyantsev, Southern Fedral University, Russia</li>
<li>Prof. Lalit Kumar Tyagi, G L Bajaj Group of Institutions, Mathura, India</li>
<li>Prof. M.U. Bokhari, Aligarh Muslim University, India</li>
<li>Prof. Mahesh Bundele, Poornima University, Jaipur, Rajasthan, India</li>
<li>Mr.  Mangala Prasad Mishra, IGNOU, Delhi, India</li>
<li>Dr. Manisha Agarwal, CSE, Banasthali Vidhyapiath, India</li>
<li>Dr. Mayank Sharma, AIIT, Amity University, NOIDA, India</li>
<li>Prof. Mohamed Salim BOUHLEL, Sfax University, Tunisian</li>
<li>Dr.  Mohammad Amjad, Department of Computer Engineering</li>





<li>Prof. Mohammad Ayoub Khan, Taibah University, Kingdom of Saudi Arabia</li>

<li>Dr. Mohd. Dilshad Ansari, CMR College of Engineering &amp; Technology, Hyderabad, India</li>

<li>Mr.  Mohammad Zeeshan Ansari, Jamia Milia Islamia, Delhi, India</li>
<li>Mr. Mukul Aggarwal, 	KIET, Ghaziabad, India</li>
<li>Mr.  Mumtaz Ahmed, Jamia Milia Islamia, Delhi, India</li>
<li>Prof.  Munish Sabharwal, Chandigarh University, India</li>
<li>Mr.  Musheer Ahmad, Jamia Milia Islamia, India</li>
<li>Dr. Naresh Kumar, Maharaja Surajmal Institute of Technology, New Delhi, India</li>
<li>Prof. Narottam Chand Kaushal, NIT Hamirpur, India</li>
<li>Prof. Dr. Naveen Jaglan, JUIT, Waknaghat, Solan, India</li>
<li>Dr.  Naveen Kumar, IGNOU, Delhi, India</li>
<li>Dr. Nilanjan Dey, Techno India College of Technology, Kolkata, India</li>
<li>Dr. Neeraj Gupta , KR Manglam University, Gurgaon, India</li>
<li>Prof. Neeraj Kumar, Thapar University, Patiala, India 	 </li>

<li>Prof. Neha Chaudhary , Manipal University, Jaipur, Rajasthan, India</li>
<li>Mr Nihar Ranjan Roy, G D Goenka University, Gurgaon, India</li>
<li>Prof. Nitin Rakesh ,Amity University, Noida, India</li>
	<li>Dr. Nitish Pathak, BVICAM, Delhi, India</li>
<li>Prof. P Venkata Suresh ,IGNOU, Delhi, India</li>
	<li>Dr. Pavinder Singh, DCRUST, Murthal, Sonipat, Haryana, India </li>
<li>Prof. Pelin Angin ,Purdue University, USA</li>
<li>Prof. Pljonkin Anton ,Institute of Computer Technologies and Information Security, Southern federal University, Russia</li>
<li>Prof. Poonam Agarwal ,JNU, Delhi, India</li>
<li>Dr. Poonam Tanwar, Manav Rachna International University, Haryana</li>
<li>Dr. Priti Bansal, NSIT, New Delhi, India</li>
<li>Dr. Priti Jagwani, DU, New Delhi, India</li>

<li>Prof. Prabhat Kr. Vishwakarma ,IINTM, Janakpuri, Delhi, India</li>
<li>Prof. Pradeep Chauhan ,University of KwaZulu-Natal, Durban, South Africa</li>
<li>Prof. Pradeep K Singh,South Asian University, Delhi, India</li>
<li>Prof. Pranab K. Muhuri,South Asian University, Delhi, India</li>
<li>Prof. Pranav, Galgotias University, Noida, India</li>
<li>Prof. Prashant Johri, Galgotias University, Noida, India</li>
<li>Dr. Prashant Singh Rana, Thapar University, Punjab, India</li>
<li>Dr. Pratyay Kuila, Department of CSE, NIT Sikkim, India</li>
<li>Prof. Puneet Kumar,Mody University, Rajsthan,India</li>
<li>Dr. K Purna Chand, B. V. Raju Institute of Technology, Narsapur, Medak, Telangana, India </li>
<li>Dr R K Banyal, RTU, Kota, India		</li>
<li>Dr R K Saini, DIT University, Uttrakhand, India</li>


<li>Prof. R. Rama Kishore, GGSIPU, Delhi, India</li>
  <li>Dr. Rabins Porwal, Lal Bahadur Shastri Institute of Management, New Delhi, India</li>
<li>Dr. Raghvendra Kumar, LNCT Group of College, Jabalpur, MP, India</li>
	<li>Dr. Rahul Rishi, MDU Rohtak, Haryana, India </li>
	<li>Dr. Rajdeev Tiwari, ABESIT, Ghaziabad, India</li>

<li>Prof. Rajeev Kumar, NSIT Delhi, India</li>
<li>Dr. Rajiv Chopra, GTBIT, Delhi, India </li>
<li>Prof. Rajesh Mehta, Thapar University Patiala</li>

<li>Prof. Rajesh Tyagi, SRM University, Modinagar Campus, UP, India</li>

<li>Prof. Rajinder Sandhu, JUIT, Waknaghat, Solan, India</li>
	<li>Rajshree Srivastava, DIT University, Uttrakhand, India </li>
<li>Prof. Rakesh Nayak, Vaagdevi Engineering College, Bollikunta, Warangal, India.</li>
<li>Prof. Ranjit Biswas, JamiaHamdard, Delhi, India</li>
<li>Prof. Ratneshwer, JNU, Delhi, India</li>
<li>Dr. Ravindra Bhat, JUIT, Solan, H.P, India</li>
<li>Prof. Ravinder Kumar Purwar, GGSIPU, Delhi, India</li>


<li>Prof. Reshma Rastogi, South Asian University, Delhi, India</li>
<li>Dr.  Rinkaj Goel, USICT, GGSIP University, New Delhi, India</li>
<li>Dr. Ritika Mehra, DIT University, Uttrakhand, India</li>
<li>Prof. Rosilah Hassan, University Kebangsaan Malaysia</li>
<li>Dr. Ruhul Amin, Department of CSE, IIIT Naya Raipur, India</li>
<li>Prof. S. P Ghrera, JUIT, Solan, H.P., India</li>
<li>Prof. Sachin Gupta, MVN University, H.P., India</li>
<li>Prof. Sagar Gulati, Technology Education & Research Integrated Institutions Kurukshetra, India</li>
<li>Prof. Samayveer Singh, Bennett University, Greater Noida, India</li>
<li>Prof. Sanjay Kumar Malik, USICT, GGSIP University, Delhi, India</li>
<li>Dr. Sakshi Babbar, BML Munjal University, Gurugram, India</li>
<li>Dr. Satyajee Srivastava, Galgotias University, Greater Noida, India </li>
	<li>Dr. Shailendra Shukla, Jaypee University of IT, Waknaghat, Solan, HP, India</li>


<li>Mr. Shashi Bhushan, IGNOU, Delhi, India</li>

<li>Dr. Shilpa Bahl, IINTM, Janakpuri, Delhi, India</li>
<li>Prof. Shweta Sinha, KIIT, Gurgaon, India</li>
<li>Prof. Subhajit Ghosh, Galgotias University, Noida, India</li>
<li>Prof. Subhash Bhalla, Aizu University, Japan.</li>
<li>Prof. Sudeep Tanwar, Nirma University, Gujrat, India</li>
<li>Prof. Sudhansh Sharma, IGNOU, Delhi, India</li>
<li>Prof. Sudhanshu Tyagi, GB Pant University, India</li>
<li>Prof. Sudhir Sharma, Jaipur National University, Jaipur, India</li>
<li>Prof. Sugandha Singh, G.H. Raisoni College of, Engineering, Nagpur, India.</li>
<li>Dr. Sunita Tiwari, G B Pant Govt Engineering College, New Delhi, India</li>
<li>Prof. Suresh Shanmugasundaram, Botho University &minus; Gaborone</li>
<li>Dr. Surendra Sunda, ISRO, Ahmedabad, India		</li>
<li>Dr. Sushil Kumar, JNU, Delhi, India</li>
	<li>Dr. Sushila Madan, LSR, Delhi University, India</li>
<li>Dr. Tirthankar Gayen, JNU, Delhi, India</li>
<li>Dr. Umang Singh, ITS, Ghaziabad, India</li>
<li>Dr. V.P. Vishwakarma, GGSIPU, Delhi, India</li>
<li>Dr. Vikram Bali, JSS, Noida, India </li>
<li>Mr. Vikrant Bhateja, Controller of Academics, SRMGPC, Luckhnow, India </li>
	<li> Dr. Vinay Goyal, Chandigarh University, Punjab, India </li>
<li>Dr. Vinay Kumar, Thapar University, Punjab, India</li>
<li>Dr. Vinay Rishiwal, MJP Rohilkhand University, Bareilly</li>
<li>Prof. Vipin Pal, NIT Meghalaya, India</li>
<li>Prof. Vishal Goyal, Punjab University, Patiala, India	</li>
<li>Dr. Vishal Jain, BVICAM, Delhi, India</li>
<li>Dr. Vivek Shegal, JUIT Waknaghat, Solan, India</li>
<li>Dr. Yashwant Singh, Central University Jammu, India</li>
<li>Dr. Yogesh Chaba, GJU Hisar, Haryana, India </li>
	<li>Dr. Yudhvir Singh, MDU Rohtak, Haryana, India </li>
<li>Dr. Yugal Kumar, JUIT Waknaghat, Solan, India</li>
<li>Dr. Zahid Raza, JNU, Delhi, India</li>

                </ol>
        Local Organising Committee-->
                <center><h3>Internal Organizing Committee</h3></center>         
                <h3>Publication Committee</h3>
                <ol class="list">
                   <li>Prof.(Dr.) Ganesh Kumar Wadhwani, IITM, Delhi, India</li>
                   <li>Dr. Pankaj Kumar Varshney, IITM, Delhi, India</li>
                   <li>Dr. Manzoor Ansari, IITM, Delhi, India</li>
                   <li>Ms. Aditi Agrawal, IITM, Delhi, India</li>
                   <li>Ms. Preeti Sharma, IITM, Delhi, India</li>
                </ol>
                <h3>Conference Track Management Committee</h3>
                <ol class="list">
                    <li>Dr. Ramandeep Kaur, IITM, Delhi, India</li>
                    <li>Dr. Harmeet Malhotra, IITM, Delhi, India</li>
                    <li>Dr. Charul Nigam, IITM, Delhi, India</li>
                    <li>Ms. Kavita Srivastva, IITM, Delhi, India</li>
                    <li>Ms. Leena Gupta, IITM, Delhi, India</li>
                    <li>Ms. Shilpi Bansal, IITM, Delhi, India</li>
                </ol>
                <h3>Stage Committee</h3>
                <ol class="list">
                    <li>Ms. Rashmi Ishrawat, IITM, Delhi, India</li>
                    <li>Ms. Ankita Luke, IITM, Delhi, India</li>
                    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
                    <li>Ms. Parul, IITM, Delhi, India</li>
                </ol>        
                <h3>Reception and Registration Committee</h3>
                <ol class="list">
                    <li>Ms. Prabhneet Kaur, IITM, Delhi, India</li>
                    <li>Ms. Komal Sharma, IITM, Delhi, India</li>
                    <li>Ms. Sunaina, IITM, Delhi, India</li>
                </ol>   
                <h3>Sponsorship Committee</h3>
                <ol class="list">
                    <li>Dr. Vikas Bharara, IITM, Delhi, India</li>
                    <li>Dr. Gopal Singh Latwal, IITM, Delhi, India</li>
                    <li>Dr. Raghav Jain, IITM, Delhi, India</li>
                </ol>    
                <h3>Exhibition Committee</h3>
                <ol class="list">
                    <li>Dr. Mandeep Singh, IITM, Delhi, India</li>
                    <li>Dr. Dipti Gulati, IITM, Delhi, India</li>
                </ol>  
                <h3>Transport and Accommodation Committee</h3>
                <ol class="list">
                    <li>Dr. Mandeep Singh, IITM, Delhi, India</li>
                    <li>Mr. Himanshu Matta, IITM, Delhi, India</li>
                    <li>Dr. Rahul, IITM, Delhi, India</li>
                    <li>Mr. B.K. Mishra, IITM, Delhi, India</li>
                </ol> 
<h3>Hospitality Committee</h3>
<ol class="list">
    <li>Dr. Nivedita Sharma, IITM, Delhi, India</li>
    <li>Mr. Ashish Nayyar, IITM, Delhi, India</li>
    <li>Mr. Rohit, IITM, Delhi, India</li>
    <li>Ms. Priyanka Ratan, IITM, Delhi, India</li>
</ol>

<h3>Certificate & Printing Committee</h3>
<ol class="list">
    <li>Dr. Charul Nigam, IITM, Delhi, India</li>
    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
    <li>Ms. Sunaina, IITM, Delhi, India</li>
    <li>Mr. Rakesh Mandal, IITM, Delhi, India</li>
</ol>

<h3>Anchoring Committee</h3>
<ol class="list">
    <li>Ms. Divya Gupta, IITM, Delhi, India</li>
    <li>Ms. Shikha Dabral, IITM, Delhi, India</li>
</ol>

<h3>Decoration & Cultural Committee</h3>
<ol class="list">
    <li>Ms. Rashmi Ishrawat, IITM, Delhi, India</li>
    <li>Ms. Ankita Luke, IITM, Delhi, India</li>
    <li>Ms. Lakshmi Kumari, IITM, Delhi, India</li>
    <li>Ms. Parul, IITM, Delhi, India</li>
</ol>

<h3>Repertoire Committee & Media Coverage (Press) Committee</h3>
<ol class="list">
    <li>Mr. Sahil Dhull, IITM, Delhi, India</li>
    <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
</ol>

<h3>Website Management Committee</h3>
<ol class="list">
    <li>Ms. Kavita Srivastava, IITM, Delhi, India</li>
    <li>Mr. Gautam Kumar, IITM, Delhi, India</li>
</ol>

             <!--  <center> 
                <table class="table table-hover jumbotron">
                <tbody>
                    <tr>
                        <th colspan="3"><center>Publication Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Prof. Sudhir Kumar Sharma</b></td>
                       
                        <td width="300">Dr. Jyoti Batra</td>
                        <td width="300">Dr. Pankaj Varshney</td>
                        </tr>
                        <tr>
                        <td width="300">Mr. Ankit Yadav</td>
                        <td width="300">Ms. Chitra Nasa</td></tr>

                       
                    <tr>
                        <th colspan="3"><center>Conference Track Management Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="3" width="200"><b>Prof. Sudhir Kumar Sharma</b></td>
                       
                        <td width="300">Dr. Pankaj Varshney</td>
                        <td width="300">Dr. Jyoti Batra</td>
                       </tr> 
                        <tr>
                        <td width="300">Dr. Sandhya Maitra</td>
                        <td width="300">Dr. Rohit Yadav</td></tr>
<tr><td width="300">Dr. Tripti Lamba</td>
<td width="300">Dr. Ramandeep Kaur</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <th colspan="3"><center>Stage Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="3" width="200"><b>Dr. Tripti Lamba</b></td>
                       
                        <td width="300">Dr. Sunitha Ravi</td>
                        <td width="300">Dr. Savita Waswami</td>
                       </tr> 
                        <tr>
                        <td width="300">Ms. Nidhi Srivastava</td>
                        <td width="300">Ms. Suruchi Kaushik</td></tr>
<tr><td width="300">Ms. Ankita Gupta</td><td width="300">Ms. Charu Arora</td>
                        </tr>
                        <tr>
                        <th colspan="3"><center>Reception and Registration Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Ms. Harmeet Malhotra</b></td>
                       
                        <td width="300">Dr. Deepika Arora</td>
                        <td width="300">Ms. Neha Sharma</td>
                       </tr> 
                        <tr>
                        <td width="300">Ms. Palak Khurana</td>
                        <td width="300">Ms. Ankita Gupta</td></tr>

                        </tr>
                         <tr>
                        <th colspan="3"><center>Sponsorship Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Prof. Sudhir Kumar Sharma</b></td>
                       
                        <td width="300">Dr. Sandhya Maitra </td>
                        <td width="300">Dr. Tripti Lamba</td>
                        </tr>
                        <tr>
                        <td width="300">Mr. Ashish Nayyar</td>
                        <td width="300">Ms. Chitra Nasa</td></tr>
                       
                    <tr>
                       <tr>
                        <th colspan="3"><center>Exhibition Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Dr. Mandeep Singh</b></td>
                       
                        <td width="300">Dr. Sandhya Maitra </td>
                        <td width="300">Dr. Dipti Gulati</td>
                        </tr>
                        <tr>
                        <td width="300">Mr. Bhanu Pratap Yadav</td>
                        <td width="300">Mr. Rajeev Pathak</td></tr>
                       
                    <tr>  
                     <tr>
                        <th colspan="3"><center>Transport and Accomodation Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Dr. Mandeep Singh</b></td>
                       
                        <td width="300">Dr. Virender Dahiya</td>
                        <td width="300">Ms. Ruchi Kawatra</td>
                        </tr>
                        <tr>
                        <td width="300">Mr. Gaurav Kumar</td>
                        <td width="300">Dr. Ankit Verma</td></tr>
                       
                    <tr>  
                    <tr>
                        <th colspan="3"><center>Hospitality Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="4" width="200"><b>Dr. Virender Dahiya</b></td>
                       
                        <td width="300">Dr. Gopal Singh Latwal</td>
                        <td width="300">Dr. Neha Jain</td>
                        </tr>
                        <tr>
                        
                        <td width="300">Mr. Munna Pandey</td>
                         <td width="300">Ms. Vrinda Rawal</td></tr>
                             <tr>
                      
                        <td width="300">Ms. Tamanna Goel</td>
                        <td width="300">Ms. Palak Khurana</td>
                        </tr>
                        
                         <tr>
                       <td width="300">Ms. Charu Nigam</td>
                       <td width="300">Ms. Sushma Malik</td>
                        </tr>
                        
                       
                        
                        <tr>
                        <th colspan="3"><center>Certificates & Printing Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td  rowspan="2" width="200"><b>Mr. Ashish Nayyar</b></td>
                       
                        <td width="300">Dr. Deepika Arora</td>
                        
                       
                        <td width="300">Mr. Rakesh Mandal</td>
                       </tr>
                       
                    <tr>
                       
                       
                       
                        <td width="300">Ms. Ruby Dahiya</td>
                        <td width="300">Mr. Pramod Soni</td>
                       
                        
                       </tr>
                     <tr>
                        <th colspan="3"><center>Anchoring  Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td rowspan="2" width="200"><b>Dr. Malvika Srivastava</b></td>
                       
                        <td width="300">Dr. Jyoti Batra</td>
                        
                       
                        <td width="300">Ms. Harshleen Kaur</td>
                       </tr>
                       <tr>  
                     <tr>
                        <th colspan="3"><center>Decoration & Cultural  Committee</center></th>
                        
                    </tr>
                    <tr>
                       
                        <td  width="200"><b>Ms. Ruchi Kawatra </b></td>
                       
                        <td width="300">Dr. Ramandeep Kaur</td>
                        <td width="300">Ms. Suruchi Kaushik</td>
                        </tr>
                        
                         <tr>
                        <th colspan="3"><center>Repertoire Committee & Media coverage (Press)<br/> & Discipline Committee</center></th>
                        
                    </tr>
                     <tr> 
                    <tr>
                       
                        <td  rowspan="2" width="200"><b>Dr. Sandhya Maitra </b></td>
                       
                        <td width="300">Ms. Suman Singh</td>
                        <td width="300">Ms. Anamika Rana</td>
                        </tr>
                        
                        <tr>
                       
                        <td  width="200">Dr. Megha Sharma </td>
                       
                       
                        </tr>
                          <tr>
                        <th colspan="3"><center>Website Management Committee </center></th>
                        
                    </tr>
                     <tr> 
                    <tr>
                       
                        <td  width="200"><b>Ms. Kavita Srivastava</b></td>
                       
                        <td width="300">Mr. Hemant Kumar</td>
                        <td width="300">Dr. Tripti Lamba</td>
                        </tr>
                </tbody>		
            </table></center>
                Local Organising Committee
                <h3>Local Organizing Committee</h3>
                <ol>
<li>Ms. Ankita Gupta, IITM, Delhi, India</li>
<li>Ms. Anamika Rana, IITM, Delhi, India</li>
<li>Dr. Ankit Verma, IINTM, Delhi, India</li>
<li>Mr. Ashish Nayyar, IITM, Delhi, India</li>
<li>Ms. Chitra Nasa, IITM, Delhi, India</li>
<li>Dr. Deepika Arora, IITM, Delhi, India</li>
<li>Dr. Deepti Gulati, IITM, Delhi, India</li>
<li>Mr. Gaurav, IITM, Delhi, India</li>
<li>Dr. Gopal Singh Latwal, IITM, Delhi, India</li>
<li>Prof. Geetali Banerji, IINTM, Delhi, India</li>
<li>Ms. Harmeet Malhotra, IITM, Delhi, India</li>
<li>Mr. Hemant Kumar, IITM, Delhi, India</li>

<li>Dr. Jyoti Bhambhani Jeswani, IITM, Delhi, India</li>
<li>Ms. Kavita Srivastava, IITM, Delhi, India</li>
<li>Dr. Kirti Singh Dahiya, IITM, Delhi, India</li>
<li>Ms. Latika Malhotra, IITM, Delhi, India</li>
<li>Dr. Megha Sharma, IITM, Delhi, India</li>
<li>Dr. Madhu Chauhan, IINTM, Delhi, India</li>
<li>Dr. Malavika Srivastava, IITM, Delhi, India</li>
<li>Dr. Mandeep Singh, IITM, Delhi, India</li>
<li>Ms. Manika Garg, IITM, Delhi, India</li>
<li>Mr. Munna Pandey, IITM, Delhi, India</li>
<li>Ms. Neha Jain, IITM, Delhi, India</li>

<li>Ms. Neha Sharma, IITM, Delhi, India</li>
<li>Ms. Nidhi Srivastava, IITM, Delhi, India</li>
<li>Ms. Palak Khurana, IITM, Delhi, India</li>
<li>Dr. Prabhat Vishwakarma, IINTM, Delhi, India</li>
<li>Mr. Pramod Soni, IINTM, Delhi, India</li>
<li>Dr. Ramandeep Kaur, IITM, Delhi, India</li>
<li>Dr. Rashmi Jha, IINTM, Delhi, India</li>
<li>Dr. Renu Chaudhary, IITM, Delhi, India</li>
<li>Dr. Rohit Kumar Yadav, IITM, Delhi, India</li>
<li>Ms. Ruby Dahiya, IITM, Delhi, India</li>
<li>Ms. Ruchi Kawatra, IITM, Delhi, India</li>
<li>Dr. Sandeepa Kaur, IITM, Delhi, India</li>

<li>Ms. Sandhya Maitra, IITM, Delhi, India</li>
<li>Dr. Savita Waswani, IITM, Delhi, India</li>
<li>Prof. Sheela Bhargava, IITM, Delhi, India</li>
<li>Ms. Suman Singh, IITM, Delhi, India</li>
<li>Dr. Sunitha Ravi, IITM, Delhi, India</li>
<li>Dr. Vikas Bharara, IITM, Delhi, India</li>
<li>Mr. Virender Dahiya, IITM, Delhi, India</li>
<li>Mr. Yogesh Kumar, IITM, Delhi, India</li>




                </ol>-->
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
