<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Bradley Sloan -- Portfolio</title>
    <meta charset="utf-8">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Read Database" />
    <meta name="keywords" content="Sloan, Portfolio, South Australia, Developer" />
    <meta name="author" content="Bradley Sloan" />
    <meta name="robots" content="follow" />
    <meta name="copyright" content="Bradley Sloan" />
    <!--Styles and Scripts-->
    <link rel="stylesheet" href="css/normalise.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/html5shiv.js"></script>
<script src="js/myscripts.js"></script>
</head>

<body>
    <!--MENU CODE-->
<!--<div class="wrapper">-->
        <input type="checkbox" id="menuToggler" class="input-toggler" value="1" autofocus="true" />
        <label for="menuToggler" id="menuTogglerLabel" class="menu-toggler" role="button" aria-pressed="false" aria-expanded="false" aria-label="Navigation button">
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
    </label>
        <nav id="sidebar" class="sidebar" role="navigation" aria-labelledby="menuTogglerLabel" aria-hidden="true">
            <ul id="menubar" class="menu" role="menubar" aria-orientation="vertical">
                <li class="menu__item" role "none"><a class="menu__link" href="index.html" role="menuitem" tabindex="-1">Home</a></li>
                <li class="menu__item" role "none"><a class="menu__link" href="portfolio.html" role="menuitem" tabindex="-1">Portfolio</a></li>
                <li class="menu__item" role "none"><a class="menu__link" href="skills.html" role="menuitem" tabindex="-1">Skills</a></li>
                <li class="menu__item" role "none"><a class="menu__link" href="testimonials.html" role="menuitem" tabindex="-1">Testimonials</a></li>
                <li class="menu__item" role "none"><a class="menu__link" href="contact.php" role="" tabindex="-1">Contact</a></li>
            </ul>
        </nav>
        <!--END MENU-->
        <main class="content">
            
            <h1 class="pageTitle">MY MUSIC DATABASE</h1>
            <img src="img/logo.png" alt="logo" class="footerLogo">
            <p>&nbsp;</p>
             <?php
                include "mysqli_connect_amended.php";

// If there is data in the table
if (mysqli_num_rows($result) > 0) {

    // Output data for each row, retrieve one row at a time
   while($row = mysqli_fetch_assoc($result)) {


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Band Name</th>
<th>Album</th>
<th>Genre</th>
<th>Year</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['bandName'] . "</td>";
echo "<td>" . $row['album'] . "</td>";
echo "<td>" . $row['genre'] . "</td>";
echo "<td>" . $row['yearReleased'] . "</td>";
echo "</tr>";
    }
}
echo "</table>";
}
?>

                <p>&nbsp;</p>
        <p>&nbsp;</p>
            
            <form action="login.php">
                <input type="submit" value="Login to make changes" />
            </form>
            

            
                <p>&nbsp;</p>
        <p>&nbsp;</p>
       
            

<footer>
        <a href="https://bsloan.webdevaustralis.com.au/portfolio/index.html">Click here to go back to my website -- Bradley Sloan</a>
    </footer>
        </main>
    </div>


    <p>&nbsp;</p>
    <p>&nbsp;</p>

</body>

</html>