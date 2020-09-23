<!--
<style>
	.bs-example{
    	margin: 20px;
    }
</style>
-->

<?php
   $db_hostname = 'localhost';
   
   $db_username = 'root';
   
   $db_password = '';
   
   $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
   
   if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
   
   mysqli_select_db($db_server,'register')
   
   or die("Unable to select database: " . mysqli_error());
   
   if(isset($_POST["submit"]))
   
   {    
  
       $name=$_POST['name'];
    $phone=$_POST['phone'];
      $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
      
       if (!preg_match("/^[a-zA-Z]*$/",$name))
   {
   $msg8 = "Only letters are allowed in user name field...";
   echo "<script type='text/javascript'>
      alert('$msg8');
   </script>";
           
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
   $msg4 = "Invalid email format...";
   echo "<script type='text/javascript'>
      alert('$msg4');
   </script>";
   }
       
      
else{
    
    $query = "INSERT INTO contact (name, email, subject,message)VALUES ('$name', '$email','$subject','$message')";
   
       if (mysqli_query($db_server, $query))
   
       {
           
//         
      
           
//       $result='<div class="alert alert-success">Thank You! I will be in touch</div>';   
        
//           
           
           header("Location:index.html");
                  
//    header("Location:index.php");       
//        
       }
   
       else
   
       {
            header("Location:err.html");
//   
//          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
       }
}
   
   }
   
  
   
   ?>




<?php
   $db_hostname = 'localhost';
   
   $db_username = 'root';
   
   $db_password = '';
   
   $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
   
   if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
   
   mysqli_select_db($db_server,'register')
   
   or die("Unable to select database: " . mysqli_error());
   
   if(isset($_POST["submit"]))
   
   {    
  
       $name=$_POST['name'];
   
      $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
      
       if (!preg_match("/^[a-zA-Z]*$/",$name))
   {
   $msg8 = "Only letters are allowed in user name field...";
   echo "<script type='text/javascript'>
      alert('$msg8');
   </script>";
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
   $msg4 = "Invalid email format...";
   echo "<script type='text/javascript'>
      alert('$msg4');
   </script>";
   }
       
      
else{
    
    $query = "INSERT INTO contact (name, email, subject,message)VALUES ('$name', '$email','$subject','$message')";
   
       if (mysqli_query($db_server, $query))
   
       {
           
//         
      
           
//       $result='<div class="alert alert-success">Thank You! I will be in touch</div>';   
        
//           
//             echo "<script>
//   alert('Successful');
//   </script>";         
           
           

           header("Location:index.php");
                  
//    header("Location:index.php");       
//        
       }
   
       else
   
       {
            header("Location:err.html");
//   
//          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
       }
}
   
   }

?>