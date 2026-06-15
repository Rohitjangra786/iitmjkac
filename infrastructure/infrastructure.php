<?php
// Disable browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Check if the user is navigating back using JavaScript
echo '<script>';
echo 'if (window.performance && (window.performance.getEntriesByType("navigation")[0]?.type === "back_forward")) {';
echo '   window.location.href = "http://iitmjanakpuri.com/index.php";';
echo '}'; 
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Campus Infrastructure | IITM Janakpuri </title>
    <meta name="description" content="Discover world-class infrastructure at IITM Janakpuri featuring smart classrooms, labs, libraries, and modern learning facilities.">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="assets_new/styles_new.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500&display=swap">
    <style>
html,
body * {
    box-sizing: border-box;
    font-family: georgia, 'Open Sans', sans-serif
}

        p{
            text-align: justify;
        }
        .logo {
            height: 80px;
            width: 150px;
            margin-top: 10px;
        }
        .hero-section {
            background-color: #800000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero-title {
            font-size: 28px;
            font-weight: bold;
        }

        .value-added-section {
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #800000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            line-height: 1.8;
            text-align: justify;
        }

        .value-added-section h1 {
            font-size: 24px;
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 16px;
            color: #333;
            margin-bottom: 15px;
        }

        .value-added-section img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            height: auto;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }
        
        
        .card-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card {
    flex: 1;
    margin: 0.5rem;
    height: 400px; /* Set a uniform height */
    display: flex;
    flex-direction: column;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.card-body {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1rem;
}

.card img {
    width: 100%;
    height: 200px; /* Adjust for consistent image height */
    object-fit: cover;
    border-radius: 8px;
}

    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>
    <div style="height:5vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1>Infrastructure</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 80px;">
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/ict.php">ICT</a>
                <a class="dropdown-item" href="https://www.iitmjanakpuri.com/infrastructure/infrastructure.php">Infrastructure & Facility</a>
            </div>
            <div class="col-md-9">
                 <div class="container">
            <div class="row">
                <div class="col-md">
                    <p class="text-justify">
                        The campus offers a serene and pleasant ambience, featuring centrally air-conditioned, spacious, 
                        and well-ventilated lecture theatres, seminar rooms, and syndicate rooms. Additionally, there is a 
                        centrally air-conditioned, well-equipped multi-lab computer centre, libraries gleaming with relevant 
                        contemporary resources, and a state-of-the-art auditorium. Below are the key facilities provided:
                    </p>
                </div>
            </div>
            
        </div>
            </div>
        </div>
       
        <div class="container">
             <div class="lowerb" style="background:#fff;margin-top: 2rem;">
             
   
      
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
        
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>ICT-Enabled A/C Lecture Theatres</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/class.JPG" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
          
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">In order to ensure an environment 
         conducive to pragmatic learning, the lecture theatres are equipped with an AV system, a PA system, and internet connectivity.</p>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Computer Centre</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/IMG20240503103256.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute boasts a state-of-the-art 
         centrally air-conditioned multi-lab Computer Centre, equipped with the following:</p>
         <div style="overflow:scroll;">
 <p class="tgfmlt text-justify" style="color: #4b4b4b;"><ul class="committee-list" style="color: #4b4b4b;">
    	<li style="line-height: 2.5rem;text-align:justify;"> Provision of high-end multimedia workstations in a one-to-one ratio.</li>
	<li style="line-height: 2.5rem;text-align:justify;">Continuous availability of a 50 MBPS dedicated leased line for Internet connectivity from Airtel, supported by optic fibre, to cater to the requirements of faculty and students on campus throughout the day and night.</li>
	<li style="line-height: 2.5rem;text-align:justify;">Utilization of a high-end IBM server running on either Linux or Windows operating system.</li>

</ul></p></div>

      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Board Room</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/board.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute is equipped with centrally 
         air-conditioned Board rooms that are furnished with LCD projectors, Smart Boards, and multimedia systems. 
         These facilities are utilized extensively for various activities such as student seminars, group presentations, project discussions, 
         and guest lectures. The conducive environment provided by these rooms enhances the learning experience and facilitates effective 
         communication and collaboration among students and faculty members.</p>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
<div style="height: 10vh;"></div>
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b><a href="https://www.iitmjanakpuri.com/Library/" target="_blank">
          Library</a></b></strong></h1>
        <p class="card-text">
           <img src="images/infra/fine.JPG" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute maintains a meticulously organized collection of 
         contemporary text and reference books, e-books, and DVDs relevant to diverse topics covered in our educational programs. Additionally, the 
         libraries house over 29,000 volumes covering contemporary issues, industry studies, annual reports of various companies, project reports, and biographies. 
         The library management system is fully computerized, ensuring efficient organization and accessibility of resources.</p>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Auditorium</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/438230318_899569008847699_5747320491786116456_n.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The state-of-the-art centrally air-conditioned 
         auditorium, with a seating capacity of 240 persons, is equipped with an LCD projector, a large LCD screen, and a modern Public 
         Announcement System. It serves as a venue for conducting various co-curricular and extra-curricular activities, including conferences, 
         seminars, workshops, and faculty development programs.</p>



      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Canteen Area</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/canteen-area.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The Institute features a well-managed canteen 
         and a Nescafe outlet, complemented by dedicated spacious seating areas for students, staff, and guests. The canteen 
         area serves as a hub where students can find a variety of healthy eating options and engage in hearty conversations, providing them with a space to unwind.</p>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
      <div style="height: 10vh;"></div>
            <div class="row" style="background: #fff;">
   <div class="col-md card-group">
  <div class="card sliders3-ed border-0 border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Dhyan Kaksha/Meditation Room</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/yoga-kaksh.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The institute organizes regular Yoga and Stress 
         Management workshops in the Dhyan Kaksha. These sessions are conducted with the mission of instilling the art of self-management among students and faculty members.</p>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Common Rooms for Girls and Boys</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/common-room.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">Separate common rooms have been provided for boys and girls, 
         facilitating interaction, relaxation, and the expansion of knowledge through peer learning.</p>



      </div>
   
    
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Sports</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img src="images/infra/infra_sports.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 300px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The institute boasts a 
         well-equipped sports center, offering students opportunities to pursue their interests in various sports 
         activities. With the aim of encouraging participation in both indoor and outdoor sports, these facilities 
         aid in the development of students' physical abilities, willpower, and self-discipline.</p>
      </div>
     
      </div>
     </div>
  </div>
</div>
</div>
<div style="height: 10vh;"></div>

             <div class="row" style="background: #fff;">
 
 <div class="col-md card-group">
  <div class="card sliders3-ed border-0 border-0"  style="background-color: #fff;margin:0;padding:0;overflow: auto;">
   
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Solar Power Plant</b></strong></h1>
        <p class="card-text">
           <img src="images/infra/solarplant.jpg" class="img-responsive" style="min-width:100%;width: 100%;height: 400px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">Electricity generated on non-teaching days and holidays is 
         transmitted to the grid. The Solar Power Plant at IITM was installed and commissioned on March 6, 2014, boasting an installed capacity 
         of 20 KW. The plant yields approximately 80 units of electricity per day. Net-metering was integrated into the system on August 18, 2015.</p>
      </div>
    </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt border-0" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Audio/ Video Studio</b></strong>
</h1>
      <p class="card-text">
           <img src="images/infra/WhatsApp Image 2024-05-20 at 11.56.29.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 400px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The college features advanced audio and video studios, fostering an immersive learning environment. 
         These facilities provide students a platform to explore creativity, refine skills, and engage in hands-on learning. With cutting-edge technology and professional-grade equipment, 
         students create multimedia presentations and record lectures. 
         This empowers them to bring ideas to life effectively, enhancing their academic journey. Guided by experienced faculty and supported by dedicated staff, these 
         studios are invaluable resources for academic and creative pursuits.</p>



      </div>
   
    
    </div>
  </div>
 
 
 
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>iMac</b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img  src="images/infra/iMac.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 200px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;"> The state-of-the-art iMac Lab provides students with access to cutting-edge Apple technology, fostering creativity
    and innovation. Equipped with high-end iMacs and specialized software, this lab supports projects in graphic
    design, video editing, app development, and other multimedia applications. It serves as an excellent platform
    for students to develop technical skills and stay ahead in the competitive digital landscape.
</p>
      </div>
     
      </div>
     </div>
  </div> 
  
  
 
</div>
</div>
 <div style="height:10vh;"></div>
 <div class="row" style="background: #fff;">
 
 <div class="col-md card-group">
  
 
 
 
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>Differently-abled Infrastructure </b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img  src="images/infra/differently.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 200px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;"> The Institute is committed to inclusivity and has developed infrastructure tailored for differently-abled individuals. 
    Facilities include ramps, elevators, wheelchair-accessible pathways, and restrooms to ensure seamless mobility. 
    Additional resources such as assistive technologies and dedicated spaces provide a supportive environment where 
    all students can thrive and participate in academic and extracurricular activities without barriers.
</p>
      </div>
     
      </div>
     </div>
  </div>
  <div class="card sliders3-ed border-0" style="background: #fff;overflow: auto;">
    <div class="card-body">
      <h1 class="tgfmlt" style="font-size: 20px;text-align:center;color: #4b4b4b;"><strong><b>IoT Lab </b></strong>
</h1>
      <div class="card-text">
            <p class="card-text">
           <img  src="images/infra/iotlab.jpeg" class="img-responsive" style="min-width:100%;width: 100%;height: 200px; object-position: bottom;" />
       
      </p>
      <div class="card-text">
         <p class="tgfmlt text-justify" style="color: #4b4b4b;line-height: 2.5rem;">The IoT Lab is designed to enable students to explore the rapidly evolving field of the Internet of Things (IoT). 
    The lab is equipped with modern devices and tools like Raspberry Pi, Arduino kits, and sensors, allowing students 
    to design and implement innovative projects. It encourages hands-on learning and provides opportunities to develop 
    smart solutions for real-world problems, fostering a culture of technological excellence and innovation.
</p>
      </div>
     
      </div>
     </div>
  </div> 
  
  
 
</div>
</div>
        </div>
        </div> -->
        </div>
   <div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>
    <script src="myscript.js"></script>
</body>
</html>
