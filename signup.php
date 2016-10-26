<!DOCTYPE html>
<html>
    <head>
    
		<link href="geeklove.css" type="text/css" rel="stylesheet" />
    
    </head>
    
    <body>
        
        <?php include("top.html"); ?>

		<div>

            <form action="signup-submit.php" method="post">
                <fieldset>

                <legend>New User Signup:</legend>

                    <ul>
                        <li>
                            <strong>Name:</strong>
                            <input type="text" name="name" size="16" />
                        </li>
                        
                        <li><strong>Gender:</strong>
                            <label><input type="radio" name="gender" value="M" />Male</label>
                            <label><input type="radio" name="gender" value="F" checked="checked" />Female</label>
                        </li>
                        

                        <li>
                            <strong>Age:</strong>
                            <input type="text" name="age" size="6" maxlength="2" />
                        </li>
            
                        <li>
                            <strong>Personality type:</strong>
                            <input type="text" name="personality" size="6" maxlength="4" />
                            <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
                        </li>

         
                        <li>
                            <strong>Favorite OS:</strong>
                            <select name="OS">
                                <option selected="selected">Windows</option>
                                <option>Mac OS X</option>
                                <option>Linux</option>
                            </select>
                        </li>

            
                        <li>
                            <strong>Seeking age:</strong>
                            <input type="text" name="minage" size="6" maxlength="2" placeholder="min"  />to<input type="text" name="maxage" size="6" maxlength="2" placeholder="max" />
                        </li>
                        
                        <li>
                            <input type="file" name="photoUpload">
                        </li>
                        
                    </ul>
                        
                    <input type="submit" value="Sign Up">
                    
                </fieldset>
            </form>
            
            
            
			<p>
				Results and page (C) Copyright GeekLove Inc.
			</p>
			
			<ul>
				<li>
					<a rel="noopener" href="index.php">
						<img src="back.gif" alt="icon"/>
						Back to front page
					</a>
				</li>
			</ul>
		</div>

    </body>
</html>