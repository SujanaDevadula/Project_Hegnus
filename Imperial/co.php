
<?php
   $db_hostname = 'localhost';
   
   $db_username = 'root';
   
  
   $db_password = '';
    $db_name='';  
   $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
   
   if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
   
   mysqli_select_db($db_server,'register')
   
   or die("Unable to select database: " . mysqli_error());
   
   if (isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['phone']))
   
   {    
   
       $name=$_POST['name'];
   
       
       $email=$_POST['email'];
      
       $phone=$_POST['phone'];
      
       $subject=$_POST['subject'];
      
       $message=$_POST['message'];
      
      
   

//       
//        if (!preg_match("/^[a-zA-Z]*$/",$name))
//   {
//   $msg1 = "Only letters are allowed in user name field...";
//   echo "<script type='text/javascript'>
//      alert('$msg1');
//   </script>";
//   }
//       
//   
//        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
//   {
//   $msg2 = "Invalid email format...";
//   echo "<script type='text/javascript'>
//      alert('$msg2');
//   </script>";
//   }
//       
//     else if(strlen($phone)!=10)
//   {
//   $msg3 = "Incorrect Mobile Number...";
//   echo "<script type='text/javascript'>
//      alert('$msg3');
//   </script>";
//   }   
//   
//       
//  
//      
//else{
   
      $query = "INSERT INTO contacts (name, email, phone, subject,message)VALUES ('$name', '$email','$phone','$subject','$message')";
   
   
       if (mysqli_query($db_server, $query))
   
       {
   
//           echo"<script>alert('thank you for contacting us');</script>";
//           
//           echo "New record created successfully<br>";
    
   header("Location:index.php");
       }
   
       else
   
       {
   
             header("Location:err.html");
           
//           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   
       
   
   }
  }
   
   
  
   
   ?>
