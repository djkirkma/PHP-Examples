<?php
$title = "Number Game";
require("includes/header.php");

//Define variable for output
$output = "";


// Compare Integers Function
function compare_integers($int1, $int2) {

    if($int1 < $int2) {
        return -1;
    }
    else if($int1 == $int2) {
        return 0;
    }
    else if($int1 > $int2) {
        return 1;
    }
}


// Using if/else to set a value for random
if(filter_has_var(INPUT_POST, 'random')) {
    $random = filter_input(INPUT_POST, "random", FILTER_SANITIZE_NUMBER_INT);
}
// If radom is not in POST, set it to a random number
else {
    $random = rand(1,20);
}



// Check if guess exists in POST, and sanatize it 
if(filter_has_var(INPUT_POST,'guess')) {
    $guess = filter_input(INPUT_POST, "guess", FILTER_SANITIZE_NUMBER_INT);
    //Check if guess is within 1-20
    if($guess > 0 && $guess < 21) {
        //Call compare integers function and store result in variable named result
        $result = compare_integers($guess, $random);
        if($result == -1) 
            $output =  "Your guess " . $guess . " was too low";
         else if ($result == 1) 
            $output = "Your guess " . $guess . " was too high";
         else if ($result == 0) 
            $output = "Congratulations! You guessed the hidden number!!!";
                
       }
    // If guess is not within 1-20, output error to user
    else {
           $output = "Invalid guess. Please enter a number between 1 and 20";
        }
}
?>
                <!-- page specific content starts -->
                <h2>Guessing the Number</h2>
                <p>Enter a number between 1 and 20, then press the Guess button.</p>
                <form action="game.php" method="post">
                    <p>
                        <input type="number" name="guess" required />&nbsp;&nbsp;
                        <input type="submit" value=" Guess " />
                    </p>
					<!-- this hidden field is used to store the system generated random number -->
                    <input type="hidden" name="random" value=<?php echo $random ?> />
                </form>
                <!-- Echo the output variable to the user -->
                <p style="color:red"> <?php echo $output;?> </p>
                <!-- page specific content ends -->
<?php
require("includes/footer.php");
?>