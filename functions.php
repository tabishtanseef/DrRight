<?PHP 
$db = mysqli_connect("localhost","root","","drright");

function avoid($x){
	$y = $x;
	global $db;
	$ip = 'Avoid';
	$get_items = "select stars from feed where stars='$ip' and uid='$y'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);
		
		echo $count_items;
}

function tri($x){
	$y = $x;
	global $db;
	$ip = 'Try';
	$get_items = "select stars from feed where stars='$ip' and uid='$y'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);
		
		echo $count_items;
}

function reco($x){
	$y = $x;
	global $db;
	$ip = 'Rec';
	$get_items = "select stars from feed where stars='$ip' and uid='$y'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);
		
		echo $count_items;
}
?>