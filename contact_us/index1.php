
<!DOCTYPE html>
<html>
	

<!-- <?php
include "dbconnect.php";
$con = mysqli_connect("localhost", "root", "","store"); // Establishing Connection with Server
// $db = mysqli_select_db("store", $con); // Selecting Database from Server
if(isset($_POST['submit1'])){ // Fetching variables of the form which travels in URL
// $name = $_POST['name'];
// $email_id = $_POST['email'];
// $website = $_POST['website'];
// $info = $_POST['info'];

$name = 'ashish';
$email_id = 'em22';
$website ='ashish.com';
$info = 'im the owner';

if($name !=''||$email !=''){
//Insert Query of SQL
$sql="insert into contact_us values($name,$email_id,$website,$info)";
$query=mysqli_query($con,$sql);
echo "success";
}
else{
echo "failed>";
}
}

?> -->



<head>
	<title>Contact-us</title>
	
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>

	<h2>Contact Form</h2>
	
	<form class="form" action="" method="POST">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe" />
			<label for="name">Name</label>
		</p>
		
		<p class="email">
			<input type="text" name="email" id="email" placeholder="mail@example.com" />
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="text" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Website</label>
		</p>		
	
		<p class="text">
			<textarea name="text" placeholder="Write something to us" ></textarea>
		</p>
		
		<p class="submit">
			<input type="submit" value="send" name="submit1" />
		</p>
	</form>

</body>

</html>


