<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/Style-Login.css">
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
    <div id="error"></div>
    <div id="scontainer">
        <div id="fholder">
            <div id="uprline"></div>
            <form id="loginf" action="Login.php" method="post">
                <span>Type your e-mail here:</span>
                <input class="fspan" type="text" name="lmail" placeholder="Enter E-mail">
                <span>Type your password here:</span>
                <input class="fspan" type="text" name="lpassword" placeholder="Your Password">


                <button  id="fbutton" class="button" name="logb">Submit</button>

            </form>
            <div id="lwrrline"></div>
        </div>


    </div>
    <div id="footer"></div>

</div>


</body>
</html>
