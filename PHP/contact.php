 <?php

   $connection = mysqli_connect('localhost','root','','traveldb');

   if(isset($_POST['send'])){
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $message = $_POST['Message'];


      $request = " insert into signin(`Name`, `Email`, `Message`) values('$name','$email','$message') ";
      mysqli_query($connection, $request);

      header('location:contact.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
