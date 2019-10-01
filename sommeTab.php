
<?php 
echo 'tableau 1 = [1,2,3,4] <br>';
echo 'tableau 2 = [4,5,7,8] <br>';
$a = [1,2,3,4];
$b = [5,6,7,8];
for ($i=0; $i < max(sizeof($a),sizeof($b)) ; $i++) { 
	$sommeTab = $a[$i] + $b[$i];
	echo ' ' .$sommeTab .' ';
}
 ?>