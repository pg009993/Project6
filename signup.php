<!DOCTYPE html>
<html>
		<head>
    
    
        </head>
    
    <body>
		<div>
			  <form action="" method="post">

            <p><input id="name" name="name" type="text" placeholder="Name: "></p>

         
             Gender: 
             <input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="female") echo "checked";?>
			value="female">Female
			<input type="radio" name="gender"
			<?php if (isset($gender) && $gender=="male") echo "checked";?> 
			value="male">Male



            <p><input id="age" name="age" type="text" placeholder="Age: "></p>

            <p><input id="personality type" name="personality type" type="text" placeholder="Personality type: "></p>

            <p><input id="favorite os" name="favorite os" type="text" placeholder="Favorite OS:"></p>

             <p><input id="seeking age" name="seeking age" type="text" placeholder="Seeking Age:"></p>

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