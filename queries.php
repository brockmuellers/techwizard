<?php $conn = mysql_connect('sql.mit.edu','jsharps','techwizardr0x') or die('Failed to connect db connection');
mysql_select_db('jsharps+techwizard', $conn);

$query = "SELECT * FROM subcategories WHERE parent=1";
$results = mysql_query($query, $conn);
while($res = mysql_fetch_assoc($results)) {
	echo $res['name'];
}
?>
