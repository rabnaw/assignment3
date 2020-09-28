<?php
require_once "database/connection.php";
   

//Form Submission Code
if(isset($_POST['submit'])){
    //Code to handle form
    
    //code for valdating the form
    $errors = [];

    //Name validation
    if(empty($_POST['name'])){
        $errors[] = "Name cannot be empty";
    }
    else{
        $name = trim($_POST['name']);
    }

    //Email Validation
    if(empty($_POST['email'])){
        $errors[] = "Email cannot be empty";
    }
    else{
        $email = trim($_POST['email']);
    }


    //username
    if(empty($_POST['username'])){
        $errors[] = "username must be selected";
    }
    else{
        $username = trim($_POST['username']);
    }


    //pnum Validation
    if(empty($_POST['pnum'])){
        $errors[] = "pnum cannot be empty";
    }
    else{
        $pnum = $_POST['pnum'];
    } 


    //pnum Validation
    if(empty($_POST['padd'])){
        $errors[] = "padd cannot be empty";
    }
    else{
        $padd = $_POST['padd'];
    }  

   
    if(empty($_POST['prdd'])){
        $errors[] = "prdd cannot be empty";
    }
    else{
        $prdd = $_POST['prdd'];
    }

    
    $cnic2 = $_POST['cnic'];
    if(empty($cnic2)){
        $errors[] = "cnic cannot be empty";
    }
    else if(strlen($cnic2)!='15'){
        $errors[] = "cnic should be 15 chrachters";
    }
    else{
        $cnic = $cnic2;
    }


    //Date of Birth
    if(empty($_POST['dob'])){
        $errors[] = "Date of Birth cannot be empty";
    }
    else{
        $dob = trim($_POST['dob']);
    }

    
     


    //if there are no errors
    if(empty($errors)){
        //Insert the record in the database
        $dbc = db_connect();
        $sql = "INSERT INTO users VALUES(NULL,'$name','$email','$username', '$pnum',  '$padd', '$prdd' ,'$cnic', '$dob')";
        $result = mysqli_query($dbc,$sql);
        if($result){
            echo "<div class = 'alert alert-success'> Data Entered Successfully </div>";
        }
        else{
            echo "<div class = 'alert alert-danger'> Data Cannot be Entered due to error </div>";   
        }
        db_close($dbc);
    }
    else{
        //Display the errors
        foreach($errors as $error){
            echo "<div class= 'alert alert-light' role='alert' >$error</div>";
        }
    }
}
else{
    //Form is not submitted
    //code
     echo "<div class = 'alert alert-danger'>Form is not submitted </div>";
}
?>