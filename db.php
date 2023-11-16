<?php
include "db_connect.php";
//create database
$affected ="Database Created Successfully";
try {
  $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'tourgroupdb'";
  $check = mysqli_query($conn, $query);
    if(mysqli_num_rows($check)){
      echo "<li> Database Already Exists </li>";
    }else{
      
      $sqldb = "CREATE DATABASE IF NOT EXISTS tourgroupdb";
      mysqli_query($conn, $sqldb);
          echo "<li>".$affected."</li>";
        }
    }
  
  //catch exception
  catch(Exception $e) {
    $e->getMessage();
  }
// $dbresult = mysqli_query($conn, $sqldb);
// if (!empty($dbresult)) {
//   echo $affected;
// } else {
//     $error_message = mysqli_error($conn);
// }

$database = "tourgroupdb";

mysqli_select_db($conn, $database);
$statetablemsg = "State Table Created Successfully";
try {
    $query = "SELECT Table_name from information_schema.tables where table_schema = 'nigerian_states'";
    $check = mysqli_query($conn, $query);
    if(mysqli_num_rows($check)){
      echo "<li> States Table Already Exists </li>";      
    }else{
      $state_table = "CREATE TABLE nigerian_states (
        ID int NOT NULL AUTO_INCREMENT,
        States varchar(255) NOT NULL UNIQUE,
        Slogans varchar(255) NOT NULL UNIQUE,
        PRIMARY KEY(ID)
        )";
        mysqli_query($conn, $state_table);
        echo "<li>".$statetablemsg."</li>";        
    }
  }
 
  //catch exception
  catch(Exception $e) {
    echo "<li> States Table Already Exists </li>";
  }


    // if($state_table != null){
    //     echo " ";
    // }else{
        
    //     $state_table_result = mysqli_query($conn, $state_table);
    // }


// mysqli_close($conn);
$sitestablemessage ="Sites Table Created Successfully";

try {
      $query = "SELECT Table_name from information_schema.tables where table_schema = 'state_sites'";
      $check = mysqli_query($conn, $query);
      if(mysqli_num_rows($check)){
        echo "<li> Sites Table Already Exists </li>";
      }else{

        $state_sites_table = "CREATE TABLE state_sites (
            ID int NOT NULL AUTO_INCREMENT,
            Sites varchar(255) NOT NULL UNIQUE,
            StateID int NOT NULL,
            PRIMARY KEY(ID),
            FOREIGN KEY(StateID) REFERENCES nigerian_states(ID)
            )";
            $site_table_result = mysqli_query($conn, $state_sites_table);
            echo "<li>".$sitestablemessage."</li>";
            
      }      

    }
  
  //catch exception
  catch(Exception $e) {
    echo "<li> Sites Table Already Exists </li>";
  }
    // if($state_sites != null){
    //     echo " ";
    // }else{
        
    //     $site_table_result = mysqli_query($conn, $state_sites);
    // }
    $userstablemessage ="Users Table Created Successfully";    
try {
    $query = "SELECT Table_name from information_schema.tables where table_schema = 'user_records'";
    if(mysqli_num_rows($check)){
      echo "<li> Users Table Already Exists </li>";
    }else{
      $users = "CREATE TABLE user_records( 
        ID int NOT NULL AUTO_INCREMENT, 
        Title varchar(64) NOT NULL, 
        Firstname varchar(255) NOT NULL, 
        Lastname varchar(255) NOT NULL, 
        Email varchar(255) UNIQUE NOT NULL, 
        Size varchar(50) NOT NULL, 
        RequireAccommodation varchar(50) NOT NULL, 
        RequireTransportation varchar(50) NOT NULL, 
        SpecificActivities varchar(50) NOT NULL, 
        HealthComplications varchar(50) NOT NULL, 
        OtherInformation varchar(255), 
        PRIMARY KEY (ID) 
        )";
        $users_table_result = mysqli_query($conn, $users);
        echo "<li>".$userstablemessage."</li>";        
    }      
}
    //catch exception
    catch(Exception $e) {
     echo "<li> Users Table Already Exists </li>";
    }

    $userssitesrelatemessage ="User Sites Relationtionship Table Created Successfully";    
try {
    $query = "SELECT Table_name from information_schema.tables where table_schema = 'user_site_relation'";
    $check = mysqli_query($conn, $query);
    if(mysqli_num_rows($check)){
      echo "<li> Users Sites Relationship Table Already Exists </li>";
    }else{
      $users_sites = "CREATE TABLE user_site_relation(
      UserID INT NOT NULL,
      SiteID INT NOT NULL,
      FOREIGN KEY (UserID) REFERENCES user_records(ID),
      FOREIGN KEY (SiteID) REFERENCES state_sites(ID),
      UNIQUE (UserID, SiteID)
      )";
      $users_sites_table_result = mysqli_query($conn, $users_sites);
      echo "<li>".$userssitesrelatemessage."</li>";
    }   
  }
    //catch exception
    catch(Exception $e) {
      echo "<li> Users Sites Relationship Table Already Exists </li>";
    }
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Database Tables</title>
</head>
<body>
  <div id="messagedb"></div>
</body>
</html>