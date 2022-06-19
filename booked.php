<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View booking</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>





   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">Ethiopia Travels.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="admin.php">Admin</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<section class="update">
<h1>All Booking Data </h1>
  <div class="php">
<?php
  
 
  $connection = mysqli_connect('localhost','root','','book_db');

   $query="SELECT * FROM book_form";
   $result=mysqli_query($connection,$query);

   echo "<table border=1>";
   echo "<tr><td>ID \t</td> <td> NAME \t</td> <td> Email\t</td> <td> phone\t</td><td> address\t</td><td> location </td></td> <td> guests</td> <td> Arrival  </td><td> Departure \t </td>  </tr>";
  while($row = mysqli_fetch_assoc($result)){
   
   echo "<tr> <td> $row[id] \t</td><td> $row[name] \t</td>  <td> $row[email] \t</td> <td> $row[phone] \t</td><td> $row[address] \t</td><td> $row[location] \t</td> <td> $row[guests]\t </td> <td> $row[arrivals] \t</td><td> $row[Departure] </td>  </tr>";
  }
 ?>
   
   <h3 ><a class="submit"href="home.php">Back To Home Page!!!</a> </h3>
 </div>

</section>







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>