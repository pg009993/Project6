<?php include("top.html"); ?>



<?php

//Variables
$textFile = file_get_contents("singles.txt");
$singles = explode("\n", $textFile);
$notInFile = false;

//Get User Information
$userName = $_GET["name"];
$userInfo = array();
foreach ($singles as $people) {
    $userInfo = explode(",", $people);
    if ($userInfo[0] == $userName) {
        break;
    }
}

//Function to check personality match
function checkPersonality($matchPersonality, $userPersonality) {

    for ($i = 0; $i < 4; $i++) {
        if ($matchPersonality[$i] == $userPersonality[$i]) {
            return true;
        }
    }
}

//Function to create match array
function createMatches() {
    global $singles;
    global $userInfo;
    $matches = $singles;
    $arraySize = sizeof($matches);


    //Test for gender compatibility
    for ($i = 0; $i < $arraySize; $i++) {
        $matchInfo = explode(",", $matches[$i]);
        $location = $i + 1;

        if ($matchInfo[1] == $userInfo[1]) {
            unset($matches[$i]); //remove same gender from array
        } else if ($matchInfo[4] != $userInfo[4]) {
            unset($matches[$i]); //remove different OS from array
        } else if (($matchInfo[2] < $userInfo[5] || $matchInfo[2] > $userInfo[6]) || ($userInfo[2] < $matchInfo[5] || $userInfo[2] > $matchInfo[6])) {
            unset($matches[$i]); //remove ages outside range from array
        } else if (!checkPersonality(str_split($matchInfo[3]), str_split($userInfo[3]))) {
            unset($matches[$i]); //remove incompatible personas from array
        }
    }
    $matches = array_values($matches); //re-indexes the array
    return $matches;
}

//Function to get matches
function displayMatches() {
    $matches = createMatches();
    for ($i = 0; $i < sizeof($matches); $i++) {
        $theMatches = explode(",", $matches[$i]);
        printMatches($theMatches);
    }
}

//Function to display matches
function printMatches($theMatches) {
    global $userInfo;
    echo "<div class='match'>
                <img src='" . getImageFileName($userInfo[0]) . "' />
                <img src='" . getImageFileName($theMatches[0]) . "' />
		<p class='column'>" . $theMatches[0] . "</p>
		<ul>
			<li><strong>gender:</strong>" . $theMatches[1] . "</li>
			<li><strong>age:</strong>" . $theMatches[2] . "</li>
			<li><strong>type:</strong>" . $theMatches[3] . "</li>
			<li><strong>OS:</strong>" . $theMatches[4] . "</li>                        
		</ul>
		</div>";
}

function getImageFileName($name) {
    $string = 'Images/';
    $array = explode(' ', strtolower($name));
    $length = count($array);
    $index = 0;
    foreach ($array as $value) {
        $string = $string . $value;
        $index++;
        if ($index !== $length) {
            $string = $string . '_';
        }
    }
    $string = $string . '.jpg';
    return $string;
}

function displayHeader() {
    global $userName;
    echo "<h1>Matches for " . $userName . "</h1>";
}
?>

<?php displayHeader(); ?>

<?php displayMatches(); ?>


<?php include("bottom.html"); ?>