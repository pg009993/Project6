
<!DOCTYPE html>
<html>
    
    <head>
    
		<link href="geeklove.css" type="text/css" rel="stylesheet" />
    
    </head>
    
    <body>
     
        <?php include("top.html"); ?>
        
        <?php
        
        $uName = $_POST["name"];
        $uData = $uName;
        
        foreach ($_POST as $key => $value) { // adds each entry in the form
            if ($key != "name"){
                $uData = $uData.",".$value; // append comma and entry
            }
        }

        // Appends new entry in singles.txt (assuming permission is allowed)
        file_put_contents("singles.txt", "\n".$uData, FILE_APPEND);

        ?>

        <div>
            
            <h1>Thank you!</h1>
            <p>
                Welcome to NerdLuv, <?= $userName ?>!<br /><br />
                Now <a href="matches.php">log in to see your matches!</a>
            </p>
            
        </div>
               
        <?php include("bottom.html"); ?>
        
    </body>
    
</html>