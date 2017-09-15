<?php?>
<html>
    <head>
        <title>Silverjack Arrays</title>
        <meta charset='utf-8'>
        <style>
            @import url("styles.css");
        </style>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <header>
            <h1 id="page-title">Silverjack</h1>
        </header>
        <div class='container'>
            
            
            <!-- These 'player-field' divs would be made using echo commands from PHP -->
            <div class='player-field'>
                <!-- We will need to change this image -->
                <img id='player-1' class='image-object' src='../img/test/doggo.jpg' alt='Picture of dog'>
                
                <!-- These will be the cards chosen from the php function. Src location may have to change depending
                    on how we choose to implement each object. -->
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                
                <!-- Player's total points -->
                <h3 class="player-points">41</h3>
            </div>
            
            
            <!------------ The previous div repeats for each player ----------------->
            <div class='player-field'>
                <img id='player-1' class='image-object' src='../img/test/doggo.jpg' alt='Picture of dog'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <h3 class="player-points">41</h3>
            </div>
            <div class='player-field'>
                <img id='player-1' class='image-object' src='../img/test/doggo.jpg' alt='Picture of dog'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <h3 class="player-points">41</h3>
            </div>
            <div class='player-field'>
                <img id='player-1' class='image-object' src='../img/test/doggo.jpg' alt='Picture of dog'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <img class='image-object' src='../img/clubs/1.png' alt='Picture of card'>
                <h3 class="player-points">41</h3>
            </div>
            <!----------------------------------------------------------------------->
            
            <div class='end-field'>
                <!-- The game can also end in a tie -->
                <h2 id='game results'>[Name] wins [totalOfPlayerPoints]!</h2>
                
                <!-- This may be implemented differently for php. Could be a button or just a http submit field. -->
                <h2 id='play-again'>Play Again!</h2>
            </div>
        </div>
    </body>
</html>