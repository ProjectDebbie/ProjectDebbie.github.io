<!DOCTYPE html>
<html>
<title>DEBBIE Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
        ul {
          flex-wrap: wrap;
          display: flex;
          font-family: Tahoma, Geneva, sans-serif;
        }
        ul li {
          flex: 1 0 33%;
          font-family: Tahoma, Geneva, sans-serif;
        }
        p {
          font-family: Tahoma, Geneva, sans-serif;
        }

</style>
<body>
<!-- Navbar (sit on top) -->
<div class="top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <img src="images/flyer.png" width="60" height="60"></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right">
      <a href="#about" class="w3-bar-item w3-button w3-padding-16">About</a>
      <a href="#ontology" class="w3-bar-item w3-button w3-padding-16">Ontology</a>
      <a href="#database" class="w3-bar-item w3-button w3-padding-16">Database</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-16">Documentation</a>
      <a href="#research" class="w3-bar-item w3-button w3-padding-16">Research</a>
      <a href="#team" class="w3-bar-item w3-button w3-padding-16">Team</a>
    </div>
  </div>
</div>
<br>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide w3-center" style="max-width:1245px; min-width:1245px;" id="home">
  <img class="w3-image w3-center" style="border-radius: 25px;" src="images/Debbie_long.png" alt="Debbie_img">
</header>

<!-- Page content max-width:1564px -->
<div class="w3-content w3-padding w3-white" style="max-width:1300px; min-width: 1300px;">
<h2>Send e-mail to someone@example.com:</h2>

<form action="mailto:austin.mckitrick01@estudiant.upf.edu" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>
  
</div>


<!-- End page content -->


<!-- Footer -->

</body>
</html>
