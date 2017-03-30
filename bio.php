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

        <div id="outerDiv">
            <img src="img/IMG_6316.JPG" style="width: 550px; height: auto;">
        
        <br><br>

        <div id="textDiv">
        <p class=".text-center"> My name is Eli Waalkes. I am a Junior at Boston College (Go Eagles!) pursuing a B.S. in Computer Science with a minor in Philosophy. I was born and raised in Sammamish, Washington. I went to high school at The Overlake School in Redmond.</p>

        <p class=".text-center">
        I am an avid (and sometimes rambunctious) Seahawks, Mariners, and Sounders fan. I play golf and soccer at a respectable level and intermural sports at a high-effort, low-competence level. I love sports radio and Game of Thrones and will discuss theories and possibilities for hours with my friends and family. I am an avid reader, I think data science and Machine Learning are wicked interesting, and I love my dog.</p>

        <p class=".text-center">
        My first year at BC was a period of discovery. I initially intended to study Economics then I switched to Math, then I switched to Philosophy, before finally settling with Computer Science. I am very thankful for the opportunity to switch so easily between these different fields, as it made my eventual choice of Computer Science an easy one. I knew immediately that I chose the right major when I began enjoying my homework! Designing solutions and traversing through problems both in teams and solo is fun. There is nothing more satisfying than fixing that final bug and watching your program work properly. </p>

        <p class=".text-center">
        I am also a huge supporter of the liberal arts education and love to investigate how art and culture intersect with technical progress. I am fascinated by philosophers and writers like Freud, Kant, Borges, Barthes, Vonnegut, and Foster Wallace and the implications of their writings. </p>

        <p class=".text-center">
        Throughout my time at Boston College I have tried to surround myself with intelligent peers who through discussions (often at ungodly hours!) help me question and reaffirm my fundamental beliefs. I want to optimize my learning. There are so many interesting things to know, so many things to learn, so many places to see and in my limited time on this Earth I want to live and understand as much as I can, by committing myself to whatever challenge is in front of me!</p>
        </div>
        </div>

    </div>

 
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