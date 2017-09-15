<?php




$deck = range(0,51);  //creates array with values 1 to 52

$suits = array("clubs","spades","hearts","diamonds");

shuffle($deck);

    echo "   <div class='player-field'>";
    $playerTotal = 0;  // total points for each player
    $totalPoints = 0;
    $i= 0; // what player we are on.
    $players = array(0,0,0,0);  // 
    
    echo " < div>";

foreach ($deck as $card) {
    
   // for(){
    
       // echo "Card value: "  . (($card % 13) + 1) . "-  Card Suite: " .  $suits[floor($card / 13)] . " <br />";
        
        echo "<img class='image-object' src='../img/".$suits[floor($card / 13)]."/".(($card % 13) + 1).".png' alt='Picture of card'>";
        
        $playerTotal += (($card % 13) + 1); // 
        $totalPoints += (($card % 13) + 1); // Game total points
        
//    }
    
    if($maxCount > 37 ){
        
        $players[i] = $playerTotal;
        $playerTotal = 0;
        $i += 1;
        
        echo " <br />";
        echo " </div>";
        echo " <div> ";
        
    }
    
    
}

    echo " </div> ";

?>