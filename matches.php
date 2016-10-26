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