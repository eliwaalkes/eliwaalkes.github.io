<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eli Waalkes Projects</title>

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
    <a id="github" href="https://github.com/eliwaalkes/"> <img src="img/github.png" style="width: 300px; height: auto; border: none;" alt="github"></a> <br><br><br><br><br><br>
    <h1>Artistic Facial Replacement with Convolutional Neural Networks</h1>
        <div id="textDiv2">
            <p>Abstract: In this project, we create a software program that allows a user to insert their face into a piece of artwork using convolutional neural networks. More specifically, through a user input image of a person and a piece of art, we successfully detect the faces within both images, extract the artistic style of the art face, impose the aforementioned style on the regular face, and overlay the stylized regular face onto the art face in the original piece of art in order to conduct artistic facial replacement. Another accomplishment of this project rests within the investigation of the face detection and style extraction methods. This includes an in-depth analysis on the architecture of the underlying VGG convolutional neural network—the network that powers both face detection and style extraction. Finally, we offer a set of results that allow for both further growth and greater inspection with regards to the strengths and limitations of the facial replacement program, the methods for face detection and style extraction, and the underlying convolutional neural network.</p>
            <br>
            <p>Click on the photo to see our paper!</p>
        </div>
         <a href="http://cscilab.bc.edu/~waalkes/EliWaalkes/docs/ArtisticFacialReplacementwithConvolutionalNeuralNetworks.pdf"><img class="rap" src="img/artistic_facial_eg.png">
    <h1>Home Depot Cross-Entropy Categorization Project</h1>
        <div id="textDiv2">
            <p>Using 150,000 web-scraped Home Depot reviews, I create a N-Gram Probablistic Model that calculated the cross-entropy of a given review. Basd on the cross-entropy my system was able to categorize the review into one of fourteen different categories with 75% accuracy. Below is my final presentation that outlines what I did, and you can see my code on my github linked above.</p>
        </div>
    <iframe id="video" width="650" height="400" src="https://www.youtube.com/embed/VnCYHiVx-5M"></iframe>
    <h1>Rap Generator</h1>
        <div id="textDiv2">
            <p>This is a side project I did which generates a rap based on a "style" of a selected rapper and a chosen set of words to be rhymed. I scraped lyrics from online, created a N-gram model which then finds the most likely line in reverse order. Currently experimenting trying to find which degree of n-gram and in what order creates the most realistic rap verse.</p>
        </div>
       
        <img class="rap" src="img/KanyeExample.png">
    <img src="img/TheCookbook2.png" style="display: none;">
       <a id="cookBook" href="http://cscilab.bc.edu/~borisenk/test/index.php"><h1>The Cookbook</h1></a>
        <br>
        
        <div id="textDiv2">
            <p>After starting this website in a class I added several functionalities and made it look professional! If you can't figure out what to make for dinner, use The Cookbook to search through 1.5 million recipes. Save the ones you like and of course a chef's best is dining out, so use the other search bar to find restauarants near you! This website was made using HTML, Javascript/JQuery, PHP, and CSS. We implemented the Edamam and Yelp API's to help our search functions and used an SQL database to store account information and saved recipes. See the code on my github page, linked above!</p>
        </div>
        <div id="textDiv2">
            <img class="whiteImg" src="img/TheCookbook2.png">
            <img class="whiteImg" src="img/TheCookbook1.png">
        </div>
    <h1>Huffman Code</h1>
        <div id="textDiv2">
            <p>Java Huffman Code encoding and decoding of text files. See the code on my github page, linked above.</p>
        </div>
    
    </div>
    
    </div>



 
    <script src="js/jquery.js">
        $("#cookBook").hover(function(){
            $(this).siblings("h1").addClass("newColorClass");
        }, function() {
            $(this).siblings("h1").removeClass("newColorClass");
        });
    </script>

    <script src="js/bootstrap.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>