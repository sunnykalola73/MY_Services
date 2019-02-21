
<?php include "header.php"; include "connect.php"; 
	
	


if(!$resultset = $database_handler->query("SELECT distinct(city) FROM user_detail ;"))
             die("Query error");
			 
             while($row = $resultset->fetch_assoc()) { 

			$a[]=$row['city'];}

$location = $_REQUEST["location"];

$hint = "";

if ($location !== "") {
    $location = strtolower($location);
    $len=strlen($location);
    foreach($a as $name) {
        if (stristr($location, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "<option>".$name."</option>";
            } else {
                $hint .= "<option>".$name."</option>";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;
?>