<!DOCTYPE html>
<html>
		<head>
    
    
        </head>
    
    <body>
		<div>

		New User Signup: <br>
			  <form action="" method="post">

			First Name:
			<input type="text" name ="name">
			<br>

             Gender: 
             <input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="female") echo "checked";?>
			value="female">Female
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="male") echo "checked";?> 
			value="male">Male<br>

            Age: <input id="age" name="age" type="text" ">
            <br>
            
            Personality type: <input id="personality type" name="personality type" type="text">

            (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
            <br> 
         
            Favorite OS: <select>
            	<option>Windows</option>
            	<option>Mac OS X</option>
            	<option>Linux</option>

            </select>
            <br>
            
            Seeking age: <input id="seeking age" name="seeking age" type="text">
            <br>

			<input type="submit" name="sign up" value="Sign Up">            
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