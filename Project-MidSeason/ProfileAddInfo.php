<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/Style-AddInfo.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script type="text/javascript" src="assets/JS/Sync.js" ></script>
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
            <div id="pageinfo">
                <div class="blockec"> <button id="onee" class="pinfo">Add Info</button></div>
                <div class="blockec"> <button id="twoo" class="pinfo">Recipes</button></div>
                <div class="blockec"> <button id="three"class="pinfo">Add Recipe</button></div>
            </div>

            <div id="uprline"></div>

            <div id="lwrrline"></div>
            <form id="ainfo"action="AddRecipe.php" method="post">
                <div id="ainfoholder">
                    <div id="muncher">
                    <span class="spanec">Title</span>
                    <input name="titleinfo" type="text">
                    <span class="spanec">Add your text here</span>
                    <textarea name="textinfo" id="tinfo" rows="23" cols="50"></textarea>
                    </div>
                </div>
            </form>


        </div>


    </div>
    <div id="footer"></div>

</div>


</body>
</html>
