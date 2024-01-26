<?php
$insert =false;
$server = "localhost";
$username ="id18355761_shivafitness";
$password ="RS!n3/rzF<rQN|eY";
$database ="id18355761_database1";

$con = mysqli_connect($server , $username, $password, $database);

if(!$con){
    die("Connection failed");
}
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

 $sql_query = "INSERT INTO `shivafitness`( `name`, `age`, `gender`, `address`,`email`,`mobile`) values('$name', '$age','$gender', '$address','$email', '$mobile' )";

 if(mysqli_query($con, $sql_query)){
     echo "Sucessfully submitted.";
     $insert = true;
 }
 else{
     echo "ERROR!" . mysqli_error($con);
 }

 mysqli_close($con);

}
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiva fitness</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""> 
    <link href="style.css" rel="stylesheet">
    
</head>

<body>
    <nav class="navigation">
        <ul>
            <a href="Shiva fitness.html">
                <li>Home</li>
            </a>

            <a href="#">
                <li>About Us</li>
            </a>


            <a href="contact_us.php" target="_blank">
                <li>Contact us</li>
            </a>
            
            <a href="#" id="callus">
                <li>Call Us Now</li>
            </a>

            <a href="#" id="emailus">
                <li>Email Us</li>
            </a>
        </ul>
    </nav>
    <div class="applicationform" id="form">
        <h3>Sign-in for Membership in Shiva's Fitness:-</h3>
       <?php
        if($insert == true){
            echo "<p>Congratulations! Your Membership is done..! </p>";
        };
        ?>
        <form action="Shiva_fitness.php" class="classform" method="POST">
            <input type="text" name ="name" class="inputt" placeholder="Enter your Name">
            <input type="number" name ="age" class="inputt" placeholder="Enter your Age">
            <input type="text" name ="gender" class="inputt" placeholder="Enter your Gender">
            <input type="text" name ="address" class="inputt" placeholder="Enter your Locality">
            <input type="email" name ="email" class="inputt" placeholder="Enter your Email Id">
            <input type="number" name ="mobile" class="inputt" placeholder="Enter your Mobile Number">
            <br>
            <input type="submit" id="submitbutton">
        </form>
    </div>

</body>
</html>