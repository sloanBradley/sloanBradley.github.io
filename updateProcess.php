<?php
include_once "mysqli_connect_amended.php";
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE musicCollection set id='" . $_POST['id'] . "', bandName='" . $_POST['bandName'] . "', album='" . $_POST['album'] . "', genre='" . $_POST['genre'] . "' ,yearReleased='" . $_POST['yearReleased'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM musicCollection WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>



<html>
<head>
<title>Update Data</title>
    <!-- Required meta tags -->
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
            <h1 class="pageTitle">UPDATE DATABASE</h1>
            <img src="img/logo.png" alt="logo" class="footerLogo">
            <p>&nbsp;</p>    
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="database.php">Music Collection</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Band Name: <br>
<input type="text" name="bandName" class="txtField" value="<?php echo $row['bandName']; ?>">
<br>
Album :<br>
<input type="text" name="album" class="txtField" value="<?php echo $row['album']; ?>">
<br>
Genre:<br>
<input type="text" name="genre" class="txtField" value="<?php echo $row['genre']; ?>">
<br>
Year Released:<br>
<input type="text" name="yearReleased" class="txtField" value="<?php echo $row['yearReleased']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">

</form>


                        <p>&nbsp;</p>

                
                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseUpdate.php" role="button">Update Another?</a>
                        </div>
                        
                        <p>&nbsp;</p>

                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseDelete.php" role="button">Click Here To Delete Records</a>
                        </div>

                        <p>&nbsp;</p>

                        <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseInsert.php" role="button">Add Record</a>
                        </div>
</body>
</html>