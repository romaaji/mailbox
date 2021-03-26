<?php
				include('include/db.php');
				$alert = '';
				
				if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				
				try{
					$alert = ' <button class="alert btn-success" ><strong>Success! Message Has Been Send!</strong></button>';
				  } catch (Exception $e){
					$alert = ' <button class="alert btn-danger" ><strong>Failerd! Something Went Wrong!</strong></button>';
				  }
				
				$query="INSERT INTO contact (cname,cemail,csubject,cmessage) "; 
				$query.="VALUES('$name','$email','$subject','$message')";
				$run = mysqli_query($db,$query);
				
				if($run){
					echo $alert;
                } 
            }
?>