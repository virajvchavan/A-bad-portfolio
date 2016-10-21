<?php
require "BingPhoto.php";

$image_url;
$bing  = new BingPhoto(BingPhoto::RESOLUTION_LOW);
foreach ($bing->getImages() as $image) {
     $image_url = $image['url'];
     
}
?>

<html>
    <head>
        <title>Viraj Chavan</title>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        
        
        <link rel="stylesheet" type="text/css" href="a.css">
        
        <style>
        #header{
            background-image: url(<?php echo $image_url; ?>);
            
        }
    
    
        </style>
    </head>
    
    
    <body>
        <div id="body">
            <div id="header">
                <div id="header-text">
                <div id="dp">
                    <img src="a.jpg" height="150px" width="150px">
                </div>
                <div id="name">
                    Viraj Vasant Chavan
                </div>
                <div id="subname">
                    Student at Walchand College of Engineering, Sangli
                </div>
                <br>
                <div id="contact">
                <span id="links">
					<a href="https://github.com/virajvchavan"><img src="github.png" height="40px" width="40px"></a>
					<a href="https://in.linkedin.com/in/viraj-chavan-4b2565117"><img src="linkedin.png" height="40px" width="40px"></a>
					<a href="https://facebook.com/virajvchavan"><img src="fb.png" height="40px" width="40px"></a>
				</span>
                
                	8975201655<br>
                	<a id="mail" href="mailto:virajc@live.com">virajc@live.com</a>
				</div>
</div>
            </div>
            <div id="main">
            <div id="summary" class="element">
                <h3>Summary</h3>
                <p>Technology enthusiastic. Excited about Coding, Reading, Cycling, Adventures, Movies and much more.<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div id="education" class="element">
            	<h3>Education</h3>
            	<table>
            		<tr>
            			<th>Course</th>
            			<th>Year</th>
            			<th>School</th>
            			<th>Grades</th>
            		</tr>
            		<tr>
            			<td>SSC</td>
            			<td>2012</td>
            			<td>SWV, Warananagar</td>
            			<td>89.75</td>
            		</tr>
            		<tr>
            			<td>HSC</td>
            			<td>2014</td>
            			<td>YCWM, Warananagar</td>
            			<td>81.80</td>
            		</tr>

            	</table>
            </div> 

            <div id="skills" class="element">
                <h3>Skills</h3>
                <ul>
                    <li>C, C++</li>
                    <li>Java</li>
                    <li>HTML, CSS</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Android</li>
                </ul>
            </div>
               
             <div id="work" class="element">
             	<h3>Work Experience</h3>
             	<ul>
             		<li>Assistant Treasurer for PACE, WCE, Sangli</li>
             		<li>Joint Program Director in Events for PACE, WCE, Sangli</li>
             	</ul>
             	</div> 
                
            <div class="element">
                
                <h3>Projects</h3>
                <div id="projects">
                	<div class="project">
	                   <h4>Race On</h4>
	                    A 3D car adventure game developed using Blender Game Engine
                    </div>
                    <div class="project">
                    <h4>Walchand Student Guide</h4>
                    An Android app aimed for helping the first year students of WCE, Sangli. Giving them access to various information about the college and Sangli</div>
                    <div class="project">
                    <a href='http://wcebookshare.esy.es'><h4>WCE Bookshare</h4></a>
                    A Web based platform for the students of WCE to share their books with the other students, also giving them access to a wide range of books to read for free</div>
                    <div class="project">
                    <h4>A Game Of Shares</h4>
                    A Web based platform to learn the basics of the Share Market. It's a simulation of the Share Market letting the players invest, earn or lose the virtual money
                    </div>
                    </div>
            </div>

            
                </div>
    </div>
    </body>
</html>