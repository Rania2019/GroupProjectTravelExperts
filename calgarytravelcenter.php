<!DOCTYPE html>

<!-- this file is generated from the database to get the agency in Calgary and its agents -->

<head>

  <title>Calgary Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<?php
 include 'header.php';
 include 'header_navbar.php'; 
?>
<body>
<Header>
  <header class="masthead">
    <div class="container">
      <div class="intro-text"></div>
    </div>
</header> 
<!-- dividing my bottom page two sections  -->
<div class="container-fluid">

  <div class="row">

<!-- first left section the agency and its agents from database-->

    <div class="col-sm-6" style="background-color:lavender;">

        <?php

        
        echo "<br><br>";
        echo'<h3> Please visit our location in Calgay </h3>';

        $link = mysqli_connect('localhost', 'root', '','travelexperts') or die("Connection Error: " . mysqli_connect_error());
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            // Attempt select query execution to select calgary agency with id=1 from agencies table

            $sql = "select * from agencies WHERE AgencyId = 1";
            $result = mysqli_query($link, $sql);
            
            while($row = mysqli_fetch_array($result, MYSQLI_NUM))
            {

              echo "<br>";
              echo "<p> Adress: $row[1], $row[2], $row[3], $row[4], $row[5] </p>";
              echo "<p> Phone Number: $row[6] </p>";
              echo "<p> Fax Number: $row[7] </p>";
            }

        echo '<div class="container">';
        echo "<br>";
        echo "<h4> Our Agents </h4>";
        echo "<p style ='color:green;'> Search our agents by first names, last names or emails:</p> "; 
        echo '<input class="form-control" id="myInput" type="text" placeholder="Search..">';
        echo"<br>";
        echo '<table class="table table-hover">';

// Attempt select query execution to select calgary agents with id=1 from agents table

        $sql = "select * from agents WHERE AgencyId = 1";
        $result = mysqli_query($link, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {
            echo '<tbody id="myTable">';
            echo "<tr>";
            echo "<td>" . $row[1] ." ".  $row[2]." ". $row[3]. "</td>";
            echo "<td>" . $row[4]."</td>";
            echo "<td>" .$row[5] . "</td>";
            echo "</tr>";
            
        }
            echo '</tbody>';
        echo "</table>";
        echo '</div>';

        mysqli_close($link);
            ?>
    </div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- right section,  inserting a map of the agency-->
<div class="col-sm-6"  style=" text-align:center; background-color:lavenderblush;">
    <br> <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3847274440013!2d-114.09056018416729!3d51.04598357956195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x53716fe76e972489%3A0x149461cedf5b7c5b!2s1155+8+Ave+SW%2C+Calgary%2C+AB!5e0!3m2!1sen!2sca!4v1564024307416!5m2!1sen!2sca" 
        width="500" height="450" frameborder="0" marginheight= "30px"   allowfullscreen></iframe>
</div>
  </div>
</div>

</body>

<?php include 'footer.php' ?>

</html>
