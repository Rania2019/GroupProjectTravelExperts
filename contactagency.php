<!DOCTYPE html>
<!-- main contact page-->
<head>

  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php 
  include 'header.php';
  include 'header_navbar.php';
  ?>
<style>
  
  table{
  border-collapse: collapse;
  border: 4px solid black;
  }
  tr:hover {background-color:#f5f5f5;}
</style>

</head>


<div class='container-fluid' style= 'background-image: url(img/background.jfif); background-repeat: no-repeat; background-size: cover;'>
  <header class="masthead">
    <div class="container">
      <div class="intro-text"></div>
    </div>
  </header>  

 
       
<?php 

// creating an associative array assign each page link to its agency 

$links = array( "<a href='calgarytravelcenter.php'> Calgary </a>"=>"Calgary Travel Center", 
"<a href='tripcenteral.php'> Aidire </a>"=>"Trip Centeral",
"<a href='galatravel.php'> Toronto</a>"=>"Gala Travel", 
"<a href='costco.php'> Regina </a>"=>"Costco Travel");

//please visit our partener agencies

echo "<p style='font-size:160%; text-align:center; margin-top:30px'> Please visit our partner agencies </p>";

// creating a table with two fields: name of the agency and the link to its address and agents 

echo "<table  border =\"4\"  align = 'center' width = 50% >";  
foreach($links as $sites => $urlsites){
    
        echo "<tr class='success'>";
          echo "<td>" .$urlsites. "</td>";
          echo "<td><a href=\"$sites\">$sites</a></td>";
		    echo "</tr>";
}

echo "</table>";
echo "<br> <br> <br> <br>";
echo "</body>";

include 'footer.php';

?>
</div>

</html>