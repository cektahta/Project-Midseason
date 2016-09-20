<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="assets/css/Style-AddRecipe.css">
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
            <div id="holdrr">
                <form id="formichka" action="AddRecipe.php" method="post">
                    <input type="image" name="fileToUpload" id="fileToUpload">
                    <textarea id="ingredients" rows="10" cols="50"></textarea>
                    <textarea id="howTo" rows="10" cols="50"></textarea>

                </form>




            </div>



        </div>


    </div>
    <div id="footer"></div>

</div>


</body>
</html>


