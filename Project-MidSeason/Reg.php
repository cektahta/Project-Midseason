<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/Style-Register.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>
<body>
<div id="container">
    <div id="header">
        <div id="holder">
            <div id="logo"></div>
            <div id="menu">
                <button type="button" class="button" id="rec"><i>R</i>ecipes</button>
                <button type="button" class="button" id="inf"><i>I</i>nfo</button>
            </div>
        </div>

    </div>
    <div id="lheader">
        <div id="spanz">
            <span class="sign"></span>
            <span class="sign"></span>
        </div>

    </div>
    <div id="scontainer">
        <div id="fholder">
            <div id="uprline"></div>
            <form id="loginf" action="register.php" method="post">

                <span>Enter your name here:</span>
                <input class="fspan" type="text" name="nick" placeholder="Name">
                <span>Confirm your e-mail here:</span>
                <input class="fspan" type="text" name="mail" placeholder="Confirm E-mail">
                <span>Type your password here:</span>
                <input class="fspan" type="text" name="password" placeholder="Your Password">
                <button type="submit" id="fbutton" class="button">Submit</button>

            </form>
            <div id="lwrrline"></div>
        </div>


    </div>
    <div id="footer"></div>

</div>


</body>
</html>
