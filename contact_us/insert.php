
<?php
$con = mysqli_connect("localhost", "root", "","store"); // Establishing Connection with Server
 //$db = mysqli_select_db("store", $con); // Selecting Database from Server
if(isset($_POST['submit1'])){ // Fetching variables of the form which travels in URL
//  $name = $_POST['name'];
//  $email_id = $_POST['email'];
//  $website = $_POST['website'];
//  $info = $_POST['info'];

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
 // Closing Connection with Server
?>
