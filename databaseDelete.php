<?php
//connect to database
include "mysqli_connect_amended.php"; 
$result= mysqli_query($connection, "SELECT * FROM musicCollection");


?>

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
    <link rel="stylesheet" href="css/bootstrap.css">
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

            <h1 class="pageTitle">DELETE FROM DATABASE</h1>
            <img src="img/logo.png" alt="logo" class="footerLogo">
            <p>&nbsp;</p>
            
            
            


<table border='1'>
	<tr>
	<td>ID</td>
	<td>Band Name</td>
	<td>Album</td>
	<td>Genre</td></td>
	<td>Year Released</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["bandName"]; ?></td>
	<td><?php echo $row["album"]; ?></td>
	<td><?php echo $row["genre"]; ?></td>
	<td><?php echo $row["yearReleased"]; ?></td>
	<td><a href="deleteProcess.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>


                <form>
                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseUpdate.php" role="button">Click Here To Update Records</a>
                        </div>
                        
                        <p>&nbsp;</p>

                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseInsert.php" role="button">Click Here To Add Records</a>
                        </div>

                </form>            

<footer class="footer">
        <p>&nbsp;</p>
        <a href="https://bsloan.webdevaustralis.com.au/portfolio/index.html">Click here to go back to my website -- Bradley Sloan</a>
    </footer>
        </main>
    </div>

</body>
</html>