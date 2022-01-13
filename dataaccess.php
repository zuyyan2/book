<?php
session_start();

include ('connect.php');

//For Insert Category Record
if (isset($_REQUEST['btnCat']))
{
    $catname = $_POST['catname'];
    $catDescription = $_POST['catDescription'];
    $catId = 'Category'.rand(11111,99999);
    if ( mysqli_query($con,"INSERT INTO  category VALUES ('$catId','$catName','$catDescription')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: category.php");
    }
    else{
        echo $con->error;
    }
}

//For   Record
if (isset($_REQUEST['btncon']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $contactId = 'contact'.rand(11111,99999);
    if ( mysqli_query($con,"INSERT INTO  contact VALUES ('$contactId','$name','$email','$subject')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: Contactus.php");
    }
    else{
        echo $con->error;
    }
}

//For Insert Product Record
if (isset($_REQUEST['btnbook']))
{
    $booktitle = $_POST['booktitle'];
    $bookCat = $_POST['bookCat'];
    $bookprice = $_POST['bookprice'];
    $bookpublisher = $_POST['bookpublisher'];
    $bookquantity = $_POST['bookquantity'];
    $bookId = 'books'.rand(111,999);
    
//prdImage
$dir = "images/";
$destination = $dir . basename($_FILES['bookimg']['name'] );
$extension = strtolower(  pathinfo($destination, PATHINFO_EXTENSION ) );
//Checking Image Extension
    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png")
    {
        //Image Upload -- Images 
        if (move_uploaded_file($_FILES['bookimg']['tmp_name'], $destination))
        {

            //Record Insert - Table
            if ( mysqli_query($con,"INSERT INTO  books VALUES ('$bookId','$booktitle', '$bookCat', '$bookprice',
             '$bookpublisher', '$bookquantity','$destination' )") )
            {
                echo "<script> alert('Inserted') ; </script>";
                header("Location: booksupdate.php");
            }
                    else{
                        echo $con->error;
                    }
            }
            else
            {
                echo "<script> alert('Error - Image Uploading') ; </script>";
            }
        }
        else
        {
            echo "<script> alert('Error - Image Extension') ; </script>";
        }
  
    }


    //For Insert competition Record
if (isset($_REQUEST['btncom']))
{
    $comtitle = $_POST['comtitle'];
    $comId = 'competition'.rand(111,999);
    
//prdImage
$dir = "images/";
$destination = $dir . basename($_FILES['comimg']['name'] );
$extension = strtolower(  pathinfo($destination, PATHINFO_EXTENSION ) );
//Checking Image Extension
    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png")
    {
        //Image Upload -- Images 
        if (move_uploaded_file($_FILES['comimg']['tmp_name'], $destination))
        {

            //Record Insert - Table
            if ( mysqli_query($con,"INSERT INTO  competition VALUES ('$comId','$comtitle', '$destination' )") )
            {
                echo "<script> alert('Inserted') ; </script>";
                header("Location: uploadcompetition.php");
            }
                    else{
                        echo $con->error;
                    }
            }
            else
            {
                echo "<script> alert('Error - Image Uploading') ; </script>";
            }
        }
        else
        {
            echo "<script> alert('Error - Image Extension') ; </script>";
        }
  
    }



//For   Record
if (isset($_REQUEST['btnregister']))
{
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $passwords = $_POST['passwords'];
    $comfirmpasswords = $_POST['comfirmpasswords'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $Gender = $_POST['Gender'];
    $userId = 'user_reg'.rand(11111,99999);

    $pass = password_hash($passwords , PASSWORD_BCRYPT);
   $comfirmpass= password_hash($comfirmpasswords, PASSWORD_BCRYPT);

   if($passwords === $comfirmpasswords){
     
    if ( mysqli_query($con,"INSERT INTO  user_reg VALUES ('$userId','$username','$useremail','$pass','$comfirmpass','$contact','$address','$zipcode','$Gender')") )
    {
        echo "<script> alert('Inserted') ; </script>";
        header("Location: login.php");
    }

      }else{
        echo "password are not matching";
    }

}

//insert into login 
if(isset($_POST['submit'])){
    $email = $_POST['emailid'];
    $password = $_POST['password'];

    $email_search = "select * from user_reg where user_email='$email' ";
    $query  = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

      //  $pass = $email_pass['password'];

     // $pass_decode = password_verify($password, $pass);

        if($email_pass){
            echo "<script> alert('login successfully') ; </script>";
            header("Location: homepage.php");

        }
    else {
        echo "<script> alert('password incorrect') ; </script>";
    
 }   } 
 else {
    echo "<script> alert('email invalid') ; </script>";
    }

    
}



?>