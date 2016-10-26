
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

        if ($uName === $blank || (!(preg_match($AgeRegex, $uAge))) || (!(preg_match($GenderRegex, $uGender))) || (!(preg_match($PersonalityRegex, $uPersonality))) || !($uMinAge <= $uMaxAge) || (!(preg_match($AgeRegex, $uMinAge))) || (!(preg_match($AgeRegex, $uMaxAge)))) {
            echo "ERROR! Invalid inputs! Go to previous page and refresh; enter information again.\n";
            include("bottom.html");
            exit;
        }

        $textFile = file_get_contents("singles.txt");
        $singles = explode("\n", $textFile);
        foreach ($singles as $people) {
            $userInfo = explode(",", $people);
            if ($userInfo[0] === $uName) {
                echo "ERROR! User with that name already exists! Go to previous page and refresh; enter information again.\n";
                include("bottom.html");
                exit;
            }
        }

        
        
//        if (isset($_POST["photoUpload"])) {
//            $target_file = getImageFileName($_POST["photoUpload"]);
//            echo $_FILES["fileToUpload"]["tmp_name"];
//
//            if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                echo "ERROR! there was an error uploading your file.";
//            } 
//        }
        
        // The following lines upload an image into the Images directory
        $target_directory = "Images/";
        $target_file = $target_directory . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "ERROR! File is not an image.";
                $uploadOk = 0;
                exit;
            }
        
        if (file_exists($target_file)) { // check if image already exists...
            echo "Sorry, that image already exists.";
            $uploadOk = 0;
            exit;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your image was not uploaded.";
            exit;
            // if everything is ok, try to upload file
        } else { // UPLOADING IMAGE HERE
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "";
            } else {
                echo "Sorry, there was an error uploading your image.";
                exit;
            }
        }
        

        $uData = $uName;
        foreach ($_POST as $key => $value) { // adds each entry in the form
            if ($key != "name") {
                $uData = $uData . "," . $value; // append comma and entry
            }
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
        
        
        // Appends new entry in singles.txt (assuming permission is allowed)
        file_put_contents("singles.txt", "\n".$uData, FILE_APPEND);
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