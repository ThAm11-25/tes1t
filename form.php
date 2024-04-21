<?php
error_reporting(0);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if(isset($_POST['submit'])) {
//echo $firstName . 'ss/' . $lastName . 'ss/' . $email;
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$lastName  = mysqli_real_escape_string($conn,$_POST['lastName']);
$email     = mysqli_real_escape_string($conn,$_POST['email']); 

    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES('$firstName','$lastName','$email ' )";

        if(empty($firstName)){
            $errors['firstNameError'] ='يرجى ادخال الاسم الاول ';
           
        }
        elseif(empty($lastName)){
            $errors['firstNameError'] ='يرجى ادخال الاسم الاخير ';
        }
        elseif(empty($email)){
            $errors['emailError'] ='يرجى ادخال  الايميل ';
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] =' يرجى ادخال الايميل صحيح';
        }else{
    if( mysqli_query($conn,$sql)){
        header('Location: '  . $_SERVER['PHP_SELF'] );
        echo 'success';
    }else{
        echo 'Error' . mysqli_error($conn);
    }
}
}