 <?php

   $connection = mysqli_connect('localhost','root','','traveldb');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $id = $_POST['id'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $age = $_POST['age'];
      $guests = $_POST['guests'];


      $request = " insert into bookform(name, id, email, phone, address, age, guest) values('$name','$id','$email','$phone','$address','$age','$guests') ";
      mysqli_query($connection, $request);

      header('location:from.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
