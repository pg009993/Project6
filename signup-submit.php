
<!DOCTYPE html>
<html>
    
    <head>
    
		<link href="geeklove.css" type="text/css" rel="stylesheet" />
    
    </head>
    
    <body>
     
        <?php include("top.html"); ?>
        
        <?php
        
        $uName = $_POST["name"];
        $uGender = $_POST["gender"];
        $uAge = $_POST["age"];
        $uPersonality = $_POST["personality"];
        $uOS = $_POST["OS"];
        $uMinAge = $_POST["minage"];
        $uMaxAge = $_POST["maxage"];
        
       
        
        $blank = "";
        $AgeRegex = "/^[0-9][0-9]?$/";
        $GenderRegex = "/^([M]|[F])$/";
        $PersonalityRegex = "/^([I|E][N|S][F|T][J|P])$/";

        
        if($uName == $blank || (!(preg_match($AgeRegex, $uAge))) || (!(preg_match($GenderRegex, $uGender))) || (!(preg_match($PersonalityRegex, $uPersonality))) || !($uMinAge <= $uMaxAge) || (!(preg_match($AgeRegex, $uMinAge))) || (!(preg_match($AgeRegex, $uMaxAge))) ){
            echo "ERROR! Go to previous page and refresh; enter information again.\n";
        }
        
        $uData = $uName;
        
        foreach ($_POST as $key => $value) { // adds each entry in the form
            if ($key == "name"){
                $uData = $uData.",".$value; // append comma and entry
            }
        }

        // Appends new entry in singles.txt (assuming permission is allowed)
        //file_put_contents("singles.txt", "\n".$uData, FILE_APPEND);

        ?>

        <div>
            
            <h1>Thank you!</h1>
            <p>
                Welcome to NerdLuv, <?= $uName ?>!<br /><br />
                Now <a href="matches.php">log in to see your matches!</a>
            </p>
            
        </div>
               
        <?php include("bottom.html"); ?>
        
    </body>
    
</html>