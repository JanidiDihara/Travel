<?php
    include 'conn.php';
    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $password = $_POST['password'];


        $sql="INSERT INTO users(`name`,`pass`,) VALUES('$name','$password',)";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Data inserted successfull.";
            header('location:log.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>
