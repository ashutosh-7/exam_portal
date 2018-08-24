<?php
require 'configure.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="register">
	<h1>Registeration for Exam!</h1>
</div>



	<div class="wrapper">

	<div class="form">
		<form action="signup.php" method="POST">
		<input type="text" name="student_name" placeholder="Name" required="required">
		<input type="text" name="student_id" placeholder="Student ID" required="required">
		<input type="text" name="email" placeholder="E-mail" required="required">
		<input type="text" name="branch" placeholder="branch" required="required">
		<input type="text" name="year" placeholder="year" required="required">
		<input type="text" name="mobile" placeholder="mobile" required="required">
		<input type="text" name="section" placeholder="section" required="required">
		 
				<select class="gender" name="gender" required="required">
					<option value="gender">gender</option>


					<option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Male">Other</option>
				</select>
  <button type="submit" class="button" name="submit">REGISTER</button>
		
</form>
	</div>
	
</div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
if(isset($_POST['submit']))   //submit button press ho gaya
{

                    $student_name=$_POST['student_name'];
                     $student_id=$_POST['student_id'];
                           
                    
                   $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    $gender=$_POST['gender'];
                    $branch=$_POST['branch'];
                    $year=$_POST['year'];
                    $section=$_POST['section'];

  $query1="SELECT * FROM student_details WHERE student_id='$student_id' ";
                    $query_run1=mysqli_query($conn,$query1);
                    $result1=mysqli_num_rows($query_run1);



                    if($result1>0)
                    {
                       echo "<h1>This Student already registered!</h1>";
                    }

                    else
                    {


             

                    	$query="INSERT INTO student_details (student_name,student_id,email,mobile,branch,year,section,gender) 
         VALUES ('$student_name','$student_id','$email','$mobile','$branch','$year','$section','$gender')";
         $query_run=mysqli_query($conn,$query);
           if ($query_run) 
         {
                       
                        header('location:registersuccess.php');
         }
         else
         {
         	echo "Error!";

         }
        
}
                }

?>




