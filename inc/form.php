<?php
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$errors = ['firstNameError'=>'','lastNameError'=>'','emailError'=>''];

if(isset($_POST['submit'])){    
     if(empty($firstName))
          $errors['firstNameError'] = 'يرجى ادخال الأسم الأول';
     if(empty($lastName))
          $errors['lastNameError'] = 'يرجى ادخال الأسم الثاني';
     if(!filter_var($email, FILTER_VALIDATE_EMAIL))
          $errors['emailError'] = 'يرجى ادخال عنوان البريد الإلكتروني صحيح';
     if(empty($email))
          $errors['emailError'] = 'يرجى ادخال عنوان البريد الإلكتروني';  
    
     if(!array_filter($errors)){
          $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
          $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);   
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $sql = "INSERT INTO users(firstName,lastName,email) VALUES('$firstName','$lastName','$email')"; //requette d'insertion de donnnes
          if(mysqli_query($conn,$sql))//requette de executer le requette dans la bd qui a connecter
               header('Location: '. $_SERVER['PHP_SELEF']);
          else
                echo 'Error: '.mysqli_error($conn);}
}

  