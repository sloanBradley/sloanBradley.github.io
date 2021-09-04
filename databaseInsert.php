<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Bradley Sloan -- Portfolio</title>
    <meta charset="utf-8">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The online portfolio of Bradley Sloan" />
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
    <div class="wrapper">
    <input type="checkbox" id="menuToggler" class="input-toggler" value="1" />
        <label for="menuToggler" id="menuTogglerLabel" class="menu-toggler" aria-label="Navigation button">
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
        </label>
        <nav id="sidebar" class="sidebar" aria-labelledby="menuTogglerLabel" aria-hidden="true">
            <ul id="menubar" class="menu" role="menubar" aria-orientation="vertical">
                <li class="menu__item"><a class="menu__link" href="index.html" role="menuitem" tabindex="-1">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="portfolio.html" role="menuitem" tabindex="-1">Portfolio</a></li>
                <li class="menu__item"><a class="menu__link" href="skills.html" role="menuitem" tabindex="-1">Skills</a></li>
                <li class="menu__item"><a class="menu__link" href="testimonials.html" role="menuitem" tabindex="-1">Testimonials</a></li>
                <li class="menu__item"><a class="menu__link" href="contact.php" role="menuitem" tabindex="-1">Contact</a></li>
            </ul>
        </nav>
        <!--END MENU-->
        <main class="content">
            <h1 class="pagetitle">MY MUSIC DATABASE</h1>
            <img src="img/logo.png" alt="logo" class="footerLogo">



                <div>
                    <h3>Create Record</h3>
                    <p>Please fill this form and submit to add an album to the database.</p>
                    <form method="post" action="process.php">
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
                            <button type="submit" class="btn btn-primary" name="save" value="submit" style="padding-top=15px;">Save</button>
                        </form>
                        

                        <p>&nbsp;</p>

                
                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseUpdate.php" role="button">Click Here To Update Records</a>
                        </div>
                        
                        <p>&nbsp;</p>

                       <div>
                    <a class="btn btn-primary" href="https://bsloan.webdevaustralis.com.au/portfolio/databaseDelete.php" role="button">Click Here To Delete Records</a>
                        </div>


        <p>&nbsp;</p>
    <p>&nbsp;</p>
    <a class"btn btn-primary" href="database.php" role="button">Go back to view database</a>

    <footer class="footer">
        <p>&nbsp;</p>
        <a href= "https://bsloan.webdevaustralis.com.au/portfolio/index.html">Click here to go back to my website -- Bradley Sloan</a>
    </footer>
        </main>
    </div>


</body>

</html>