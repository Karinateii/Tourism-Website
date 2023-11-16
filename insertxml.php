<?php 

require_once "db_connect.php";

mysqli_select_db($conn, "tourgroupdb");

$xml = simplexml_load_file("States_list.xml") or die("Error: Cannot Create Object");

$allstates = (array)$xml;
try{
    foreach($allstates['state'] as $singlestate){
        $name = $singlestate->name;
        $slogan = $singlestate->slogan;
    
        $sql = "INSERT INTO nigerian_states(states,slogans) VALUES ('$name','$slogan')";
        $result = mysqli_query($conn, $sql);
        $getstateid = mysqli_insert_id($conn);
        // $singlestate->addAttribute('id', $getstateid);
    
    
    }
    echo "<li> State Table has been filled!!! </li>";

}  catch(Exception $e) {
    // echo $e->getMessage();
    echo "<li> Sites Table Values have already been inserted </li>";
    
}

try{
    // for($x=0; $x < count($allstates); $x++){ 
    $allstateelements = (array)$xml->state;
    // foreach($allstates['state'] as $singlestate){      
        foreach($xml->state as $singlestate){                  
        // $allsites = (array)$singlestate->sites;        
        // for($i = $allstateelements[0]; $i < count($allstateelements); $i++){
            
            $stateid = $singlestate['id'];
            foreach($singlestate->sites->site as $singlesite){                
                $sitename = $singlesite->sitename;
                $sqlcheck = "SELECT * FROM state_sites WHERE Sites = '$sitename' LIMIT 1";
                $checkresult = mysqli_query($conn, $sqlcheck);
                if(mysqli_num_rows($checkresult) > 0){
                    echo "<li> Sites Table has been filled!!! </li>";
                }else{

                    $sql = "INSERT INTO state_sites(sites,stateid) VALUES ('$sitename','$stateid')";
                    $result = mysqli_query($conn, $sql);
                    echo "<li> Site(s) have been inserted!!! </li>";                    
                }
            }
        // }
    }
    echo "<li> Sites Table has been filled!!! </li>";
    
    // }    
}  catch(Exception $e) {
    echo "<li> Sites Table Values have already been inserted </li>";
}
// foreach($allstates['state'] as $singlestate){
// }
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>    
</head>
<body>
    <script src="js/table_msg.js"></script>
    <div id="messagexml"></div>
</body>
</html>