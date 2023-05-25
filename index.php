<html><head>
    <title>CIS Times</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src="darkmode.js"></script>

   
<?php include 'header.php'; ?>
<br><br><br><br><br><br>
    <div class="times_live">
        <p style="color: white;">CIS TIMES</p>
    </div>

    <header>
            <div class="profile-img">
				<img src="img/icon.png" alt="#">
  <div class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="#news">News</a>
  </div>
<!-- This is my Navigation List for my dropdown menu. It contains links to different html files and is triggered by hover the cursor over it. It uses and image as a visual icon.-->
			</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#news">News</a></li>
                </ul>
            </nav>
			<!-- This is my Navigation List for my Navigation Bar.-->
        </header>



    <h2>Recent News</h2>
<div style="height: 450px">		
    <img src="img/17may-speech.jpeg" width="600px" style="float: left;" alt="17th may speech"> <br> <br>
    <p>This is the 17th of may speech that was spooken on 17th of may in the school.</p> 
    <button class="open" style="float: left; width: 600px; height: 175px; margin-top: 81px;" type="button" onclick=" window.open('17may-speech.php')">Open the page</button>
    
</div>	



<section id="news">
  <h2>Newsletter</h2>
<div style="height: 450px">		
    <button class="open" style="width: 600px; height: 175px; margin-top: 81px;" type="button" onclick=" window.open('newsletter.php')">Sign up to our newsletter</button>
    
</div>	
	
</section>
  

  <footer>
    <a href="https://cissdesign.no/cistimes" style="color: whitesmoke;">CISSDESIGN.NO/CISTIMES</a>
    <br>
    <a href="https://cissdesign.no/cistimes/newsletter.php" style="color: whitesmoke;">Sign up to our newsletter</a>
    <br>
    <p style="font-size: medium; color: white;">© 2023 Stephan Teig</p>
  </footer>

</body></html>