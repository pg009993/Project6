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