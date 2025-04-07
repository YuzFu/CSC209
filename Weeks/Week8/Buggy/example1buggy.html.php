<?php
$NRWEEKS = 6;
// $WEEK = "<h1>Week NRWEEK</h1>";

$LISTDATES = array("Feb 1","Feb 8","Feb 15","Feb 21","March 1","March 8","March 15","March 21","April 1","April 8","April 15","April 21");

// $DATE = "<h2>DATE</h2>";

$LISTTOPICS= array("Installation","Html","Css","Javascript 1","","","","","","","","","");

// $TOPIC ="<h3>TOPIC</h3";

$LISTDESCRIPTIONS=array("We install software","We make our first Html","We style pages with Css","Get started on Javascript ","","","","","","","","","");

// $TOPIC ="<h3>DESCRIPTION</h3";

?>

<html>
<head>

</head>
<body>

<h1><?php echo "NRWEEKS=".$NRWEEKS."<br>"; ?></h1>

<?php
for ( $i=1; $i <= $NRWEEKS; $i++){
	echo("<h1>Week".$i."<h1>");
	echo("<h2>Date: ".$LISTDATES[$i]."</h2>");
	echo("<h2>Topic: ".$LISTTOPICS[$i]."</h2>");
	echo("<h2>Description: ".$LISTDESCRIPTIONS[$i]."</h2>");
	}
?>
	
</body>
</html>