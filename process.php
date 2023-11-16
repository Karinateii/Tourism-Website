<?php
include "db_connect.php";
mysqli_select_db($conn, "tourgroupdb");
$errors = [];
$output = "";
$success = "";
try{

    if(isset($_POST["submit"])){
        if(empty($_POST['title'])){
            $errors['title'] = 'Please select a title';        
        }
        if(empty($_POST['fname'])){
            $errors['fname'] = 'Please enter your firstname';        
        }
        if(empty($_POST['lname'])){
            $errors['lname'] = 'Please enter your lastname';        
        }
        if(empty($_POST['email'])){
            $errors['email'] = 'Please enter your email';        
        }
        if(empty($_POST['size'])){
            $errors['size'] = 'Please choose if you\'ll be coming with someone/people or alone';        
        }
        if(empty($_POST['accommodation'])){
            $errors['accommodation'] = 'Please select if you\'ll need accomadation';        
        }
        if(empty($_POST['transportation'])){
            $errors['transportation'] = 'Please select if you\'ll need transportation';        
        }
        if(empty($_POST['activities'])){
            $errors['activities'] = 'Please select if you\'re interested in specific activities';        
        }
        if(empty($_POST['health'])){
            $errors['fname'] = 'Please select if you have any health considerations';        
        }
        if(empty($_POST['places'])){
            $errors['places'] = 'Please select at least one site of interest';        
        }

        //check database if user email already exists
        $User_title = $_POST["title"];
        $User_fmame = $_POST["fname"];
        $User_lmame = $_POST["lname"];
        $User_email = $_POST["email"];
        $PplSize = $_POST["size"];
        $UserAccommodation = $_POST["accommodation"];
        $UserTransport = $_POST["transportation"];
        $UserActivity = $_POST["activities"];
        $UserHealth = $_POST["health"];
        $Others = $_POST["msg"];
        
        $sql = "SELECT * FROM User_Records WHERE Email = '$User_email' LIMIT 1";
        $sqlresult = mysqli_query($conn, $sql);
        if(mysqli_num_rows($sqlresult) > 0){
            $errors['email'] = "Email already exists";
        }
        if(count($errors) === 0){
            if(isset($_POST['places'])){
                $placesofinterest = $_POST['places'];
    
                $query = "INSERT INTO User_Records (Title, Firstname, Lastname, Email, Size, RequireAccommodation, 
                    RequireTransportation, SpecificActivities, HealthComplications, OtherInformation) 
                    VALUES ('$User_title', '$User_fmame', '$User_lmame', '$User_email', '$PplSize', '$UserAccommodation',
                    '$UserTransport', '$UserActivity', '$UserHealth', '$Others')";
                
                $result = mysqli_query($conn, $query);
                $getuserid = mysqli_insert_id($conn);
                    foreach($placesofinterest as $place){
                        $specialquery = "INSERT INTO user_site_relation (UserID, SiteID) VALUES ('$getuserid', '$place')";
                        $result = mysqli_query($conn, $specialquery);        
                    }
                    $success="Your form has been submitted! We'll be in touch.";                        
            }

        }
    }
} catch(Exception $e) {
    echo "<li> Email Already Exists </li>";
  }

?>