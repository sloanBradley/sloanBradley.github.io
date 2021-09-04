<?php
if (isset($_POST['email'])) {

    // EDIT THE FOLLOWING TWO LINES:
    $email_to = "sloan_bradley@hotmail";
    $email_subject = "From the Website";
    function problem($error)
    {
        echo "We're sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        problem('We\'re sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Bradley Sloan -- Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The online portfolio of Bradley Sloan" />
    <meta name="keywords" content="Sloan, Portfolio, South Australia, Developer" />
    <meta name="author" content="Bradley Sloan" />
    <meta name="robots" content="follow" />
    <meta name="copyright" content="Bradley Sloan" />
    <!--Styles and Scripts-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    

    <link rel="stylesheet" href="css/normalise.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/html5shiv.js"></script>
    <script src="js/myscripts.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
        <h1 style="margin-top:5em;">Contact Me</h1>
            <img src="img/logo.png" alt="logo" class="footerLogo">
            <p>&nbsp;</p>
        
            <div class="formContainer">
<form id="fcf-form-id" class="fcf-form-class" method="post" action="thank_you.php">
                    <div class="form-group row">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" id="name" name="firstname" placeholder="Your name..">
                    </div>
                      <div class="form-group row">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                      </div>
                    <div class="form-group row">
                    <textarea class="input1" id ="message"name="message" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                    </div>
                    <div class="row">
                    <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            
            <div>
                <A HREF="&#115;&#108;&#111;&#97;&#110;&#95;&#98;&#114;&#97;&#100;&#108;&#101;&#121;&#64;&#104;&#111;&#116;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">email me directly instead</A>
            </div>

            <footer>
                &#169; Bradley Sloan 2021
            </footer>
        </main>
    </div>

</body>
<script src="js/email.js"></script>
</html>