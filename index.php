<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css"  href="jquery/css/mint-choc/jquery-ui-1.10.3.custom.css"/>
  	<script type="text/javascript" src="jquery/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="jquery/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript" src="jquery/js/datesExclude.js"></script>
</head>	
<?php

require 'dbConnect.php';

$datequery = "Query to find dates used";

$ar = [];

$query = $dbh->prepare($datequery);
$query->bindParam(1, $where_1);
$query->execute();

while($r = $query->fetch(PDO::FETCH_OBJ)) {

//	add all the dates from query to make them non-selectable in datepicker
array_push($ar, $r->columnNameDate);
}

?>

<!-- put result of query array and encode to json for use in datepicker -->
<input type="hidden" id='arrayvals' value='<?php  echo json_encode($ar); ?>' />

<input id="date" type="text" name="date"/>
