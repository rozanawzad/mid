<?php 
if(isset($_POST['submit'])){

echo "your email: " . $_POST['email'];
echo "<br/>";

	function validation($pwd){
	$pwd= $_POST['pwd'];
	if(strlen($pwd)<8 || strlen($pwd)>16){
		echo "your password must be between 8 to 16 characters!";
	}
	else{
		echo "GOOD!";
	}
}
validation($_POST['pwd']);
	
	if (empty($_POST['gender'])) {
	echo"select your gender";
}
else {
echo "gender: ". $_POST['gender'];
 echo "<br>";
}

	$color = $_POST['form'];
	if(empty($color)) 
  {
    echo("No favorite color.");
  } else{
	foreach ($color as $c) {
	echo $c . "<br/>";
}
}
}
else{
	header('location: form.html');
}
?>