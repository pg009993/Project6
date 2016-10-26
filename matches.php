<!--
<?php 
$_POST['value'];
 ?>

Returning User:<br> 

 <form method="post" action="">
Name: 
<input type="text" name="value"><br>

<input type="button" name="search" value="View My Matches">
</form>


<?php 
	if(isset($_POST['value'])){
	$file = 'singles.txt';
	$searchfor = $_POST['value']; 
	$file = file_get_contents($file);

	if(strpos($file, $searchfor)){
	echo "found";
		}

	else{
		echo "No matches found"; 
	}
}

 ?>
-->







<!DOCTYPE html>
<html>
    <head>
    
		<link href="geeklove.css" type="text/css" rel="stylesheet" />
    
    </head>
    
    <body>
     
        <?php include("top.html"); ?>
        
        <form action="matches-submit.php" method="get">
            
            <fieldset>
                
                <legend>Returning User:</legend>
        
                <ul>
                    <li>
                        <strong>Name:</strong>
                        <input type="text" name="name" size="16" />
                    </li>
                </ul>
                        
                <input type="submit" value="View My Matches">
                
            </fieldset>
            
        </form>
               
        <?php include("bottom.html"); ?>
        
    </body>
    
</html>