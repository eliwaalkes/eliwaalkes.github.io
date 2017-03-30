<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eli Waalkes Bio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/index.php">Home</a>
                </li>
                <li>
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/bio.php">Bio</a>
                </li>
                <li>
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/projects.php">Projects</a>
                </li>
                <li>
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/resume.php">Resume</a>
                </li>
                <li>
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/contact.php">Contact</a>
                </li>
                <li>
                    <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/dog.php">Dog</a>
                </li>
            </ul>
        </div>
        <br><br><br><br>
        <img src="img/chels3.JPG" style="width: 400px; height: auto; transform: rotate(180deg);">
        <img src="img/chels2.JPG" style="width: 400px; height: auto; transform: rotate(270deg);">
        <img src="img/chels1.jpg" style="width: 400px; height: auto;">

 
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>