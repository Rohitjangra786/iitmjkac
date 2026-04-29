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
    <title>IITM | Events</title>

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
            font-size: 14px; /* Reduced font size */
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
            line-height: 1.5;
        }

        .value-added-section h1 {
            font-size: 10px; /* Reduced font size */
            color: #800000;
            text-align: center;
            margin-bottom: 20px;
        }

        .value-added-section p {
            font-size: 7px; /* Further reduced font size */
            color: #333;
            margin-bottom: 15px;
        }

        .committee-list {
            color: #800000;
            list-style-position: inside;
        }

        .committee-list li {
            display: list-item;
            color: #800000;
        }

        .carousel-inner {
            max-width: 70vw; /* Restored carousel width */
            margin: 0 auto;
            transition: transform 0.3s cubic-bezier(0.4, 0.0, 0.2, 1); /* Fast and smooth sliding transition */
        }

        .carousel-item img {
            max-height: 300px; /* Restored carousel image height */
            width: auto;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <?php include('../naacheader.php'); ?>
    <?php include('../n.php'); ?>

<div style="height: 5vh;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1 id="iipc">Extra Curricular Events</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="padding: 5px; background-color: #add8e6;height: 250px;">
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/extra.php">Extra & Co-Curricular Events</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/guest.php">Guest Lectures</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/conference.php">Conference/Seminars/Webinars</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/fdp.php">FDP</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/industrialvisits.php">Industrial Visits</a>
              <a class="dropdown-item" href="https://iitmjanakpuri.com/events/workshops.php">Workshops</a>
              <a class="dropdown-item" href="https://www.iitmjanakpuri.com/events/fiesta.php">Fiesta</a>
        </div>
        <div class="col-md-9">
            
          <div class="underline"></div>
          <div class="container">
              <h2 class="text-justify" style="color: #4b4b4b;"><strong>Extra-Curricular Activities</strong></h2>
              <p class="text-justify" style="color: #4b4b4b;">Extracurricular activities constitute 
              an integral facet of collegiate existence, imbuing campus life with enrichment 
              and enjoyment. At IITM, there is a steadfast commitment to broadening students' 
              horizons beyond academic realms, fostering a conducive atmosphere for the 
              cultivation of communication and leadership proficiencies, 
              thereby fostering self-assurance and facilitating substantial 
              personal advancement. Engagement in committees, clubs, athletic 
              endeavors, and other extracurricular endeavors fosters the 
              acquisition of new competencies, engendering innovative learning 
              encounters. Such activities afford practical involvement and afford 
              a broad platform for showcasing talents and making meaningful societal contributions.</p>
              
              
              <hr class="hr-maroon"/>
              <h2 class="text-justify" style="color: #4b4b4b;"><strong>Co-Curricular Activities</strong></h2>
              <p class="text-justify" style="color: #4b4b4b;">To facilitate comprehensive development 
              among students, the curriculum incorporates co-curricular activities. Significantly, 
              theoretical knowledge is applied through the organization of co-curricular 
              activities pertinent to classroom instruction. Intellectual facets of 
              individuals are cultivated through formal classroom education, whereas 
              character formation, spiritual development, and creative expression are 
              fostered through co-curricular pursuits. These activities, in conjunction 
              with formal education, channelize students' latent potential, thereby fostering their development into conscientious citizens.</p>    
              
               <div class="table-container">
                   <h1>Extra-curricular Events (2024-25)</h1>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                                <tr><td>	1	</td><td>	Essay writing competition	</td><td>	14.09.24-17.09.24	</td></tr>
                                <tr><td>	2	</td><td>	Cover page designing Competition	</td><td>	21-31.08.24	</td></tr>
                                <tr><td>	3	</td><td>	Blood Donation camp	</td><td>	07.09.24	</td></tr>
                                <tr><td>	4	</td><td>	Plantation drive	</td><td>	21.08.24	</td></tr>
                                <tr><td>	5	</td><td>	Independence day celebration	</td><td>	14.08.24	</td></tr>
                                <tr><td>	6	</td><td>	Mr. & Ms. Freshers Contest 	</td><td>	07.09.24	</td></tr>
                                <tr><td>	7	</td><td>	Talent Hunt 	</td><td>	03.09.24	</td></tr>
                                <tr><td>	8	</td><td>	Raksha Bandhan Celebration	</td><td>	10.08.24	</td></tr>
                                <tr><td>	9	</td><td>	Talent Hunt Engravers Talent Hunt  Talent Hunt	</td><td>	28.08.24	</td></tr>
                                <tr><td>	10	</td><td>	Talent Hunt-Darmatic Society	</td><td>	31.08.24	</td></tr>
                                <tr><td>	11	</td><td>	Plantation Drive “Ek ped maa ke naam”	</td><td>	14.08.24	</td></tr>
                                <tr><td>	12	</td><td>	Matrix 2.0-tech fest	</td><td>	20-21.09.24	</td></tr>
                                <tr><td>	13	</td><td>	Diwali Campaign	</td><td>	30.10.24	</td></tr>
                                <tr><td>	14	</td><td>	Recruitment Drive – Cultural Committee	</td><td>	25.9.24	</td></tr>
                                <tr><td>	15	</td><td>	Dandiya Fest	</td><td>	11.10.24	</td></tr>
                                <tr><td>	16	</td><td>	Plastic Waste Management Campaign	</td><td>	24-28.09.24	</td></tr>
                                <tr><td>	17	</td><td>	Ethnic Day	</td><td>	5.10.24	</td></tr>
                                <tr><td>	18	</td><td>	Eye Camp for Senior Citizens	</td><td>	1.10.24	</td></tr>
                                <tr><td>	19	</td><td>	Cyber Crime  Awareness  Campaign	</td><td>	1.10.24	</td></tr>
                                <tr><td>	20	</td><td>	Cleanliness Drive	</td><td>	27.8.24	</td></tr>
                                <tr><td>	21	</td><td>	Star Cast Interaction and Music Launch of Emergency Movie	</td><td>	31.8.24	</td></tr>
                                <tr><td>	22	</td><td>	Intra College Debate Competition	</td><td>	26.9.24	</td></tr>
                                <tr><td>	23	</td><td>	7th Global Strategy and Leadership Awards	</td><td>	24.9.24	</td></tr>
                                <tr><td>	24	</td><td>	Hindi Writing Competition	</td><td>	14.8.24	</td></tr>
                                <tr><td>	25	</td><td>	Poster Making Competition 	</td><td>	9.10.24	</td></tr>
                                <tr><td>	26	</td><td>	Inter-college Declamation Contest	</td><td>	20-26.11.24	</td></tr>
                                <tr><td>	27	</td><td>	Student’s Meet	</td><td>	23.11.24	</td></tr>
                                <tr><td>	28	</td><td>	Cultural Competition	</td><td>	29.10.24	</td></tr>
                                <tr><td>	29	</td><td>	Red Run Competition	</td><td>	15.09.24	</td></tr>
                                <tr><td>	30	</td><td>	Web Innovative Competition	</td><td>	20.08.24	</td></tr>
                                <tr><td>	31	</td><td>	Institute Internal Hackathon 	</td><td>	31.08.24	</td></tr>
                                <tr><td>	32	</td><td>	NSS Drive	</td><td>	29.10.24	</td></tr>
                                <tr><td>	33	</td><td>	Poster Making Competition	</td><td>	27.10.24	</td></tr>
                                <tr><td>	34	</td><td>	Training Program 	</td><td>	8-13.01.2025	</td></tr>
                                <tr><td>	35	</td><td>	Cloth Donation Drive	</td><td>	16-23.01.2025	</td></tr>
                                <tr><td>	36	</td><td>	( Training-Cum-awareness Program)”Tobacco Control and cessation”	</td><td>	22.01.2025	</td></tr>
                                <tr><td>	37	</td><td>	Intra College Digital Poster making competition 	</td><td>	27.01.2025	</td></tr>
                                <tr><td>	38	</td><td>	Webinar on menstrual Hygiene	</td><td>	28.01.2025	</td></tr>
                                <tr><td>	39	</td><td>	Inter- college poster Making competition “WOMEN EMPOWERMENT”	</td><td>	29.01.2025	</td></tr>
                                <tr><td>	40	</td><td>	Campaign on Voter Awareness selfie campaign	</td><td>	30.01.2025	</td></tr>
                                <tr><td>	41	</td><td>	ED Cell (Samriddhi Competition) Inter College Competition	</td><td>	11.02.2025	</td></tr>
                                <tr><td>	42	</td><td>	Observance of Communal Harmony	</td><td>	16-25.01.25	</td></tr>
                                <tr><td>	43	</td><td>	National Youth Festival	</td><td>	8-13.01.25	</td></tr>
                                <tr><td>	44	</td><td>	Clothes Donation Drive	</td><td>	16-23.01.25	</td></tr>
                                <tr><td>	45	</td><td>	Tobacco Control & Cessation	</td><td>	22.01.25	</td></tr>
                                <tr><td>	46	</td><td>	Inter College Digital Poster Making Competition	</td><td>	27.1.25	</td></tr>
                                <tr><td>	47	</td><td>	Inter College Digital Poster Making Competition – Women Empowerment	</td><td>	29.1.25	</td></tr>
                                <tr><td>	48	</td><td>	Voter Awareness Selfie Campaign	</td><td>	30.1.25	</td></tr>
                                <tr><td>	49	</td><td>	Mond-O-Pedia	</td><td>	11.2.25	</td></tr>
                                <tr><td>	50	</td><td>	Poster Making Competition	</td><td>	9.3.25	</td></tr>
                                <tr><td>	51	</td><td>	Bharat Drone Manthan 2.0	</td><td>	12.3.25	</td></tr>
                                <tr><td>	52	</td><td>	Eco Vision 3D	</td><td>	6.3.25	</td></tr>
                                <tr><td>	53	</td><td>	Intra College Sports Event - Kabaddi	</td><td>	09.09.2024	</td></tr>
                                <tr><td>	54	</td><td>	Intra College Sports Event - Cricket	</td><td>	13-14.09.2024	</td></tr>
                                <tr><td>	55	</td><td>	Intra College Sports Event - Table Tennis	</td><td>	13-14.09.2024	</td></tr>
                                <tr><td>	56	</td><td>	Intra College Sports Event - Volley Ball	</td><td>	17.09.2024	</td></tr>
                                <tr><td>	57	</td><td>	Intra College Sports Event - Power Lifting	</td><td>	18-19.09.2024	</td></tr>
                                <tr><td>	58	</td><td>	Intra College Sports Event - Athletics	</td><td>	19.09.2024	</td></tr>
                                <tr><td>	59	</td><td>	Intra College Sports Event - Badminton	</td><td>	20.09.2024,24.09.2024	</td></tr>
                                <tr><td>	60	</td><td>	Intra College Sports Event - Basket Ball	</td><td>	24.09.2024	</td></tr>
                                <tr><td>	61	</td><td>	Intra College Sports Event - Chess	</td><td>	27.09.2024,28.09.2024	</td></tr>
                                <tr><td>	62	</td><td>	Intra College Sports Event - Football	</td><td>	28.09.2024	</td></tr>
                                <tr><td>	63	</td><td>	Inter-College Sports Event - Badminton	</td><td>	13-20.10.2024	</td></tr>
                                <tr><td>	64	</td><td>	Inter-College Sports Event - KABADDI	</td><td>	15-20.10.2024	</td></tr>
                                <tr><td>	65	</td><td>	Inter-College Sports Event- Volley Ball	</td><td>	16-20.10.2024	</td></tr>
                                <tr><td>	66	</td><td>	Inter-college sports event-Athletics (Shot put and Race)	</td><td>	16-20.10.2024	</td></tr>
                                <tr><td>	67	</td><td>	Inter-college sports event-Tug of War	</td><td>	22-27.10.2024	</td></tr>
                                <tr><td>	68	</td><td>	Inter-college sports event-Football	</td><td>	06-15.11.2024	</td></tr>
                                <tr><td>	69	</td><td>	Inter-college sports event-Chess	</td><td>	18-20.11.2024	</td></tr>
                                <tr><td>	70	</td><td>	Workshop on Yoga	</td><td>	20.03.2025	</td></tr>
                                <tr><td>	71	</td><td>	Annual Sports Meet	</td><td>	22-25.2.25	</td></tr>
            </tbody>
        </table>

        <h1>Extra-curricular Events (2023-24)</h1>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Cover Page Designing Competition</td><td>22.5-5.6.23</td></tr>
                <tr><td>2</td><td>Har Ghar Tringa</td><td>13-15.8.23</td></tr>
                <tr><td>3</td><td>Panch Pran Pledge</td><td>14.8.23</td></tr>
                <tr><td>4</td><td>Plantation Drive</td><td>14.8.23</td></tr>
                <tr><td>5</td><td>Independence Day</td><td>14.8.23</td></tr>
                <tr><td>6</td><td>Panch Pran Pledge - Online</td><td>17.8.23</td></tr>
                <tr><td>7</td><td>World Entrepreneurship Day</td><td>21.8.23</td></tr>
                <tr><td>8</td><td>Conclave on G-20 Nations</td><td>13.9.23</td></tr>
                <tr><td>9</td><td>Hindi Diwas</td><td>14.9.23</td></tr>
                <tr><td>10</td><td>Smart India Hackathon</td><td>27.9.23</td></tr>
                <tr><td>11</td><td>Mega Swachhta Drive</td><td>4.10.23</td></tr>
                <tr><td>12</td><td>IPU Health Mela</td><td>8.10.23</td></tr>
                <tr><td>13</td><td>Poster Making Competition on Clean India Beautiful India</td><td>11.10.23</td></tr>
                <tr><td>14</td><td>Seminar on Women Health Awareness Against Cancer</td><td>20.10.23</td></tr>
                <tr><td>15</td><td>Matrix-Tech Fest</td><td>6-7.10.23</td></tr>
                <tr><td>16</td><td>Cleanliness Drive</td><td>13.10.23</td></tr>
                <tr><td>17</td><td>Videography Competition</td><td>9-14.10.23</td></tr>
                <tr><td>18</td><td>Competition</td><td>22.9.23</td></tr>
                <tr><td>19</td><td>Just a Minute</td><td>22.9.23</td></tr>
                <tr><td>20</td><td>Battle of Wits – Intra College Debate Competition</td><td>23.9.23</td></tr>
                <tr><td>21</td><td>Poetry Recitation Competition</td><td>25.9.23</td></tr>
                <tr><td>22</td><td>Laugh Out Loud-Standup Comedy Competition</td><td>25.9.23</td></tr>
                <tr><td>23</td><td>Lakeerin Star Cast Visit</td><td>31.10.23</td></tr>
                <tr><td>24</td><td>UMUNG</td><td>17-18.11.23</td></tr>
                <tr><td>25</td><td>Intra College Collage Making Competition</td><td>22.11.23</td></tr>
                <tr><td>26</td><td>Inter College Debate Competition</td><td>23.11.23</td></tr>
                <tr><td>27</td><td>Blood Donation Camp</td><td>29.11.23</td></tr>
                <tr><td>28</td><td>National Youth Day Celebrations</td><td>12.01.24</td></tr>
                <tr><td>29</td><td>Student Exchange Programme</td><td>12.12.23</td></tr>
                <tr><td>30</td><td>Pledge of Rashtriya Gunvatta Pakhwada</td><td>25.01.24</td></tr>
                <tr><td>31</td><td>Republic Day Celebration</td><td>25.01.2023</td></tr>
                <tr><td>32</td><td>Anugoonj Competitive (Painting Competition)</td><td>8.02.2024</td></tr>
                <tr><td>33</td><td>Anugoonj Competitive (Western Vocal Competition)</td><td>8.02.2024</td></tr>
                <tr><td>34</td><td>Anugoonj Competitive (Dance)</td><td>8.02.2024</td></tr>
                <tr><td>35</td><td>Anugoonj Competitive (Street Play)</td><td>8.02.2024</td></tr>
                <tr><td>36</td><td>Anugoonj Competitive (Folk Dance)</td><td>8.02.2024</td></tr>
                <tr><td>37</td><td>Anugoonj Competitive (JUST A MINUTE)</td><td>9.02.2024</td></tr>
                <tr><td>38</td><td>Anugoonj Competitive (Classical Vocal Solo)</td><td>9.02.2024</td></tr>
                <tr><td>39</td><td>Anugoonj Competitive (Group Song)</td><td>9.02.2024</td></tr>
                <tr><td>40</td><td>National Tribal Festival – Aadi Mahotsav</td><td>10.02.2024</td></tr>
                <tr><td>41</td><td>Mr & Ms. Anugoonj</td><td>10.02.2024</td></tr>
                <tr><td>42</td><td>Leadership Talk Season-2 (Motivation)</td><td>16-17.02.2024</td></tr>
                <tr><td>43</td><td>Project Exhibition and Demonstration</td><td>20.02.2024</td></tr>
                <tr><td>44</td><td>Alumni Meet- MBA, MCA and BCA</td><td>10.03.2024</td></tr>
                <tr><td>45</td><td>NSS National Integration Camp</td><td>12-18.03.2024</td></tr>
                <tr><td>46</td><td>Intra-College Declamation Competition</td><td>13.03.2024</td></tr>
                <tr><td>47</td><td>E-Poster Competition (Viksit Bharat)</td><td>15.03.2024</td></tr>
                <tr><td>48</td><td>Management Sapiens-Business Plan Competition</td><td>15.03.2024</td></tr>
                <tr><td>49</td><td>IT FEST - Ideathon</td><td>15.03.2024</td></tr>
                <tr><td>50</td><td>IT FEST – UI/UX Design</td><td>15.03.2024</td></tr>
                <tr><td>51</td><td>IT FEST – Techquizite</td><td>15.03.2024</td></tr>
                <tr><td>52</td><td>CommParv-Tally Masters</td><td>15.03.2024</td></tr>
                <tr><td>53</td><td>CommParv- E-Poster Competition</td><td>15.03.2024</td></tr>
                <tr><td>54</td><td>CommParv-Brand Quest Competition</td><td>15.03.2024</td></tr>
                <tr><td>55</td><td>CommParv-Master Mind</td><td>15.03.2024</td></tr>
                <tr><td>56</td><td>CommParv-The Big Bull</td><td>15.03.2024</td></tr>
                <tr><td>57</td><td>Commerce Fest</td><td>15.03.2024</td></tr>
                <tr><td>58</td><td>Case Study X Management Sapiens</td><td>15-16.03.2024</td></tr>
                <tr><td>59</td><td>Tech Fest (Hackathon)</td><td>15.03.2024</td></tr>
                <tr><td>60</td><td>Tech Fest (Project Exhibition)</td><td>15.03.2024</td></tr>
                <tr><td>61</td><td>Liteter-Less Campaign</td><td>15.04.2024</td></tr>
                <tr><td>62</td><td>Tech Fest – Massive Gaming</td><td>16.03.2024</td></tr>
                <tr><td>63</td><td>Tech Fest – Video Editing</td><td>16.03.2024</td></tr>
                <tr><td>64</td><td>Tech Fest – Ode to Code</td><td>16.03.2024</td></tr>
                <tr><td>65</td><td>Management Sapiens (JUST A MINUTE)</td><td>16.03.2024</td></tr>
                <tr><td>66</td><td>Tech Fest – Machine Learning</td><td>16.03.2024</td></tr>
                <tr><td>67</td><td>Inter-College Poster Making Competition</td><td>19.03.2024</td></tr>
                <tr><td>68</td><td>Eco Friendly Holi</td><td>22-24.03.2024</td></tr>
                <tr><td>69</td><td>Group Discussion</td><td>09.04.2024</td></tr>
                <tr><td>70</td><td>Annual Day Celebration</td><td>26.04.2024</td></tr>
                <tr><td>71</td><td>Yoga Session</td><td>12.2.24</td></tr>
                <tr><td>72</td><td>Yoga Session</td><td>20.3.24</td></tr>
                <tr><td>73</td><td>Yoga Session</td><td>24.2.24</td></tr>
                <tr><td>74</td><td>Yoga Session</td><td>8.3.24</td></tr>
                <tr><td>75</td><td>Alumni Meet – MCA, MBA & BCA</td><td>10.3.24</td></tr>
                <tr><td>76</td><td>Videography Competition</td><td>18-22.3.24</td></tr>
                <tr><td>77</td><td>InternHunt 7.0</td><td>20.4.24</td></tr>
                <tr><td>78</td><td>Essay Writing Competition</td><td>22-29.4.24</td></tr>
                <tr><td>79</td><td>Best Out of Waste Challenge</td><td>22.4.24</td></tr>
                <tr><td>80</td><td>Visit of Gaishala</td><td>4.5.24</td></tr>
                <tr><td>81</td><td>Farewell Party</td><td>10.5.24</td></tr>
                <tr><td>82</td><td>Pet Feeding Drive</td><td>2.5.24</td></tr>
                <tr><td>83</td><td>World Environment Day</td><td>5.6.24</td></tr>
                <tr><td>84</td><td>Leadership Talks</td><td>16-17.2.24</td></tr>
                <tr><td>85</td><td>InternHunt</td><td>20.4.2024</td></tr>
            </tbody>
        </table>

        <h1>Extra-curricular Events (2022-23)</h1>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Pitch-o-Pedia</td><td>23-24.9.22</td></tr>
                <tr><td>2</td><td>Founder’s Day</td><td>29.9.22</td></tr>
                <tr><td>3</td><td>Educational Trip to Pragati Maidan</td><td>4.10.22</td></tr>
                <tr><td>4</td><td>Techquizite: Quest for Gyanmrit</td><td>18.10.22</td></tr>
                <tr><td>5</td><td>Nature Photography Competition</td><td>11-18.10.22</td></tr>
                <tr><td>6</td><td>BINGE WARS</td><td>19.10.22</td></tr>
                <tr><td>7</td><td>Poster Making Competition on Say No To Crackers</td><td>20.10.22</td></tr>
                <tr><td>8</td><td>Vigilance Awareness Week</td><td>31.10.22</td></tr>
                <tr><td>9</td><td>Intra-Collage SQL Query Competition</td><td>12.11.22</td></tr>
                <tr><td>10</td><td>Parindey Auditions</td><td>21.11.22</td></tr>
                <tr><td>11</td><td>Talent Hunt</td><td>24.11.22</td></tr>
                <tr><td>12</td><td>Treasure Hunt X Plantation Drive</td><td>29.11.22</td></tr>
                <tr><td>13</td><td>MUN</td><td>2-3.12.22</td></tr>
                <tr><td>14</td><td>Inter College Coding Competition</td><td>24.12.22</td></tr>
                <tr><td>15</td><td>Logofy-Identify the Logo</td><td>28.12.22</td></tr>
                <tr><td>16</td><td>Blood Donation Camp</td><td>05.01.23</td></tr>
                <tr><td>17</td><td>Health Checkup Camp</td><td>06.01.23</td></tr>
                <tr><td>18</td><td>Social Media Marketing for Creating a Change</td><td>09.01.23</td></tr>
                <tr><td>19</td><td>Best Out of Waste Competition</td><td>12.01.23</td></tr>
                <tr><td>20</td><td>Mock Parliament ”Vidhan Sabha”</td><td>20.01.23</td></tr>
                <tr><td>21</td><td>Innovative Ways to Reduce E-Waste</td><td>25 Jan-10 Feb. 23</td></tr>
                <tr><td>22</td><td>How to Reduce E-Waste</td><td>30.01.23</td></tr>
                <tr><td>23</td><td>Anugoonj Prelims</td><td>23-24.02.23</td></tr>
                <tr><td>24</td><td>Photography Competition</td><td>24-28.02.23</td></tr>
                <tr><td>25</td><td>HR Conclave</td><td>25.02.23</td></tr>
                <tr><td>26</td><td>Collage Making Competition on Flowers of G-20 Countries and 09 Invited Countries</td><td>27.02.23</td></tr>
                <tr><td>27</td><td>Poster Making Competition on Food Culture of G-20 Countries and 09 Invited Countries</td><td>28.02.23</td></tr>
                <tr><td>28</td><td>Visit to Mega Plantation Drive</td><td>28.02.23</td></tr>
                <tr><td>29</td><td>Anugoonj</td><td>02-04.03.23</td></tr>
                <tr><td>30</td><td>Alumni Meet</td><td>19.03.23</td></tr>
                <tr><td>31</td><td>LOGOFY-G20</td><td>21.03.23</td></tr>
                <tr><td>32</td><td>GD X Management Sapiens</td><td>24-25.03.23</td></tr>
                <tr><td>33</td><td>Visit to Mega Plantation Drive</td><td>25.03.23</td></tr>
                <tr><td>34</td><td>AdD O Mania</td><td>06.04.23</td></tr>
                <tr><td>35</td><td>Nukkad Natak on Social Cause</td><td>07.04.23</td></tr>
                <tr><td>36</td><td>Awareness Campaign on Self Hygiene and Self-Care for Females</td><td>17.04.23</td></tr>
                <tr><td>37</td><td>Extempore Speech</td><td>21.04.23</td></tr>
                <tr><td>38</td><td>Battle of Bits-An Intra College Debate Competition</td><td>25-26.04.23</td></tr>
                <tr><td>39</td><td>Poster Making Competition</td><td>01.05.23</td></tr>
                <tr><td>40</td><td>Disaster Management Fire Drill</td><td>01.05.23</td></tr>
                <tr><td>41</td><td>Debate Competition</td><td>04.05.23</td></tr>
                <tr><td>42</td><td>Annual Ekal Study Circle Meet</td><td>05.05.23</td></tr>
                <tr><td>43</td><td>Essay Writing Competition</td><td>10.05.23</td></tr>
                <tr><td>44</td><td>Internhunt 6.0</td><td>6.5.23</td></tr>
                <tr><td>45</td><td>Yuva Utsav India 2047</td><td>28.05.23</td></tr>
                <tr><td>46</td><td>Slogan Writing Competition</td><td>25-31.5.23</td></tr>
                <tr><td>47</td><td>Visit to Thyagraj Stadium</td><td>5.6.23</td></tr>
            </tbody>
        </table>

        <h1>Extra-curricular Events (2021-22)</h1>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S. No.</th>
                    <th>Type of Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Inter College Online Gaming Event – BGMI and Chess</td><td>19.7.21</td></tr>
                <tr><td>2</td><td>Azadi Ka Amrut Mahotsav</td><td>14.8.21</td></tr>
                <tr><td>3</td><td>Independence Day</td><td>14.8.21</td></tr>
                <tr><td>4</td><td>Rakshabandhan</td><td>21.8.21</td></tr>
                <tr><td>5</td><td>Spoil Your Loved ones With Care</td><td>28.8.21</td></tr>
                <tr><td>6</td><td>Inter College Poster Making Competition</td><td>28.8.21</td></tr>
                <tr><td>7</td><td>Inter college Mono Acting Competition</td><td>28.8.21</td></tr>
                <tr><td>8</td><td>National Level Coding Competition</td><td>3.9.21</td></tr>
                <tr><td>9</td><td>Inter College Chess Competition</td><td>11.9.21</td></tr>
                <tr><td>10</td><td>National Level Hindi Poetry Recitation Competition</td><td>18.9.21</td></tr>
                <tr><td>11</td><td>National Level Singing Competition</td><td>18.9.21</td></tr>
                <tr><td>12</td><td>What the Bug</td><td>25.9.21</td></tr>
                <tr><td>13</td><td>Founder’s Day</td><td>29.9.21</td></tr>
                <tr><td>14</td><td>Annual Day</td><td>29.9.21</td></tr>
                <tr><td>15</td><td>Paperless Painting</td><td>9.10.21</td></tr>
                <tr><td>16</td><td>Mind-O-Pedia 2.0 – Quiz Competition</td><td>8.10.21</td></tr>
                <tr><td>17</td><td>Battle of Wits-Inter college Debate Competition</td><td>30.10.21</td></tr>
                <tr><td>18</td><td>Intra College Chess Tournament</td><td>1.11.21</td></tr>
                <tr><td>19</td><td>Diwali Celebration- Rangoli Making and Diya Making Competition</td><td>3.11.21</td></tr>
                <tr><td>20</td><td>Project Exhibition Cum Competition</td><td>25.11.21</td></tr>
                <tr><td>21</td><td>EDP Scheme of Govt. of NCT of Delhi</td><td>4.10.21</td></tr>
                <tr><td>22</td><td>Report on Inter college Poster Making Competition</td><td>11.11.21</td></tr>
                <tr><td>23</td><td>Orientation Programme – MBA</td><td>1.12.21</td></tr>
                <tr><td>24</td><td>Orientation Programme – B.Com(H)</td><td>1.12.21</td></tr>
                <tr><td>25</td><td>Poster Competition on No Smoking Day</td><td>21.2.22</td></tr>
                <tr><td>26</td><td>Talent Hunt</td><td>24.2.22</td></tr>
                <tr><td>27</td><td>Intra College Indoor Tournament</td><td>3.3.22</td></tr>
                <tr><td>28</td><td>Recreational College Tour to Kullu Manali</td><td>19.3.22</td></tr>
                <tr><td>29</td><td>Blood Donation Camp- A Social Initiative</td><td>21.3.22</td></tr>
                <tr><td>30</td><td>GD Competition</td><td>1-2.4.22</td></tr>
                <tr><td>31</td><td>Go Green</td><td>23.4.22</td></tr>
                <tr><td>32</td><td>Cloths Donation Camp</td><td>28.4.22</td></tr>
                <tr><td>33</td><td>Internhunt 5.0</td><td>7.5.22</td></tr>
                <tr><td>34</td><td>Educational College Trip to Drone Festival of India</td><td>28.5.22</td></tr>
                <tr><td>35</td><td>International Day of Yoga</td><td>21.6.22</td></tr>
                <tr><td>36</td><td>Youth Talkathon</td><td>8.7.22</td></tr>
                <tr><td>37</td><td>Intra-College Debate Competition</td><td>15.7.22</td></tr>
            </tbody>
        </table>
    </div>
    <div style="height: 10vh;"></div>
              <div style="margin:0;width:100%;">
                   <div class="container">
                   <div class="row">
                  <div id="my-carousel" class="carousel slide" data-ride="carousel" style="margin-right: auto;margin-left: auto;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/fare.jpg" alt="Business Plan">
             </div>
             <div class="col-md center" style="overflow-wrap: break-word;">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;text-align: center;">Farewell Party</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : May 10, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/dental.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Free Dental Camp</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : May 08, 2024</h2>
             </div>
      </div>
     </div>
      <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/annual.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Annual Day</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : April 26, 2024</h2>
             </div>
      </div>
     </div>
      <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/litter.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Litter-Less Campaign</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : April 15, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/resumecl.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Resume Clinic </h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : April 10, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/leader.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;">Leadership Talks, Season 2- MotivAction </h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : March 28, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/holi.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;"> Eco-Friendly Holi campaign</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : March 22-24, 2024</h2>
             </div>
      </div>
     </div>
     
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/sapm.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;"> Case Study × Management Sapiens - Annual Fest </h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : March 15-16, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/techno24.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;"> Techno-Sapiens - Annual Fest</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : March 15-16, 2024</h2>
             </div>
      </div>
     </div>
     <div class="carousel-item">
          <div class="row" style="background: #800000;">
             <div class="col-md">
                <img class="d-block carousel-image img-responsive" src="images/commpav.jpg" alt="Business Plan">
             </div>
             <div class="col-md center">
                 <h1 style="font-weight:bolder; margin-top: 2rem; color: #fff; font-size: 1.5rem; text-align: center;"> CommParv - Annual Fest</h1>
                 <h2 style="color: #fff; font-size: 1.2rem; text-align: center;">Date : March 15-16, 2024</h2>
             </div>
      </div>
     </div>
     

    
  </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#my-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

             
              </div>
         
</div>
</div>
</div>
        </div>
    </div>
</div>
<div style="height: 5vh"></div>
    <?php
        include("../naacfooter.php");
    ?>




    <script src="myscript.js"></script>
</body>
</html>
