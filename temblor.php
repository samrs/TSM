<?php
// Create connection

$con=mysqli_connect("localhost","id15555774_tsm123","qgQsGj)IO+H-Z5#t","id15555774_lightstatus");

// Check connection

if (mysqli_connect_errno())

{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Select all of our stocks from table 'stock_tracker'

$sql = "SELECT temblando FROM `temblor` WHERE id = 1";

// Confirm there are results

if ($result = mysqli_query($con, $sql))

{
	// We have results, create an array to hold the results
    // and an array to hold the data
	$resultArray = array();
	$tempArray = array();

	// Loop through each result
	while($row = $result->fetch_object())
	{
		// Add each result into the results array
		$tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
	// Encode the array to JSON and output the results
	echo json_encode($resultArray);
}
else
{
	print("no hubo");
	if ( false===$result ) {	
		printf("error: %s\n", mysqli_error($con));
	}
}
// Close connections
mysqli_close($con);

?>